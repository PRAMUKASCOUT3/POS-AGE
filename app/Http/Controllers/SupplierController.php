<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('suppliers.index');
    }
    public function edit($id)
    {
        // Retrieve the supplier details from the database
        $suppliers = Supplier::find($id);

        // Return the supplier details in a view
        return view('suppliers.edit', compact('suppliers'));
    }

    public function delete($id)
    {
        // Retrieve the supplier details from the database
        $suppliers = Supplier::find($id);

        // Delete the supplier from the database
        $suppliers->delete();

        // Redirect to the supplier index page with a success message
        return redirect()->route('supplier.index')->with('success', 'Data Berhasil Dihapus');
    }
}
