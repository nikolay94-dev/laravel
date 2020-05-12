<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpdfController extends Controller
{
    public function pdfCreate() {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
    }
}
