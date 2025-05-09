<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use App\Models\Expenditure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class CashierController extends Controller
{
    public function index()
    {
        return view('cashier.index');
    }
    public function print()
    {
        $cashier = session('transaction');
        return view('cashier.print', compact('cashier'));
    }

    public function history()
    {
        // Mengambil data transaksi dengan paginasi
        $cashier = Cashier::where('id_user', Auth::id())
            ->with('product') // Include relasi dengan produk
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Menggunakan paginate

        return view('cashier.history', compact('cashier'));
    }

    public function report(Request $request)
    {
        $start_date = $request->input('start_date') ? Carbon::parse($request->input('start_date'))->startOfDay() : null;
        $end_date = $request->input('end_date') ? Carbon::parse($request->input('end_date'))->endOfDay() : null;


        // Filter data kasir berdasarkan tanggal
        $cashier = Cashier::when($start_date && $end_date, function ($query) use ($start_date, $end_date) {
            $query->whereBetween('date', [$start_date, $end_date]);
        })->paginate(10);

        // Filter data pengeluaran berdasarkan tanggal
        $expenditure = Expenditure::when($start_date && $end_date, function ($query) use ($start_date, $end_date) {
            $query->whereBetween('date', [$start_date, $end_date]);
        })->get();

        // Total pendapatan dan pengeluaran
        $total_pendapatan = $cashier->sum('subtotal');
        $pengeluaran = $expenditure->sum('nominal');
        $total_semua = $total_pendapatan - $pengeluaran;

        // Return data ke view
        return view('cashier.laporan', compact('cashier', 'expenditure', 'total_pendapatan', 'pengeluaran', 'total_semua'));
    }



    public function generatePDF(Request $request)
    {
        $start_date = $request->input('start_date') ? Carbon::parse($request->input('start_date'))->startOfDay() : null;
        $end_date = $request->input('end_date') ? Carbon::parse($request->input('end_date'))->endOfDay() : null;


        // Query untuk transaksi dengan filter tanggal
        $cashier = Cashier::with('product')
            ->when($start_date && $end_date, function ($query) use ($start_date, $end_date) {
                $query->whereBetween('date', [$start_date, $end_date]);
            })
            ->get();

        // Query untuk pengeluaran dengan filter tanggal
        $expenditure = Expenditure::when($start_date && $end_date, function ($query) use ($start_date, $end_date) {
            $query->whereBetween('date', [$start_date, $end_date]);
        })->get();

        // Hitung total pendapatan dan pengeluaran
        $total_pendapatan = $cashier->sum('subtotal');
        $total_pengeluaran = $expenditure->sum('nominal');
        $total_keseluruhan = $total_pendapatan - $total_pengeluaran;

        // Siapkan data untuk PDF
        $data = [
            'title' => 'Laporan Transaksi',
            'cashier' => $cashier,
            'expenditure' => $expenditure,
            'user' => Auth::user(),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'total_pendapatan' => $total_pendapatan,
            'total_pengeluaran' => $total_pengeluaran,
            'total_keseluruhan' => $total_keseluruhan,
        ];

        // Generate PDF menggunakan view
        $pdf = PDF::loadView('cashier.pdf', $data);

        // Download file PDF
        return $pdf->download('Laporan_Transaksi.pdf');
    }
}
