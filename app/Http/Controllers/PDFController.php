<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;
class PDFController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(){
        $pdf = PDF::loadView('invoice');
        return $pdf->stream('invoice.pdf');
        
    }
}
