<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layoff;

class LayoffController extends Controller
{
    public function layoffs(){
        //$userlayoffs = Layoff::where('id', $user_id->id)->get();

        $layoffs = Layoff::get();
        return view('pdf.example', compact('layoffs'));
    }
}
