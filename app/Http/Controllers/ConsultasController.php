<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultasController extends Controller
{
    public function getCups(){
        $cups = DB::table('cups')->get();

        return view('cups', compact('cups'));
    }
}
