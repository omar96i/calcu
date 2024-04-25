<?php

namespace App\Http\Controllers;

use App\Imports\BonusAImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BonosACOntroller extends Controller
{
        /**
     * Show the form for importing AxyValues.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('axyvalues.index');
    }

    /**
     * Import AxyValues from a file.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new BonusAImport, $file);

        return redirect()->route('axyvalues.import.create')->with('success', 'Importación exitosa!');
    }
}
