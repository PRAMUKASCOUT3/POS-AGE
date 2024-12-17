<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use Illuminate\Http\Request;

class ExpenditureController extends Controller
{
    public function index()
    {
        return view('expenditures.index');
    }
    public function edit($id)
    {
        $expenditure = Expenditure::find($id);

        return view('expenditures.edit', compact('expenditure'));
    }
}
