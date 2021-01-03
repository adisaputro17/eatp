<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    function cetak_bal()
    {
        $pdf = PDF::loadView('bal');
        return $pdf->download('bal.pdf');
    }

    function cetak_atp()
    {
        $pdf = PDF::loadView('atp');
        return $pdf->download('atp.pdf');
    }
}
