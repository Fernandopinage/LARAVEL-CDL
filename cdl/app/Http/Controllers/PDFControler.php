<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;

class PDFControler extends Controller
{
    public function gerarPDF(){
       
        $pdf = new DomPDF();
        $pdf->loadHtml('<h1>teste</h1>');
        $pdf->setPaper("a4");
        $pdf->render();
        $pdf->stream("file.pdf",["Attachment" =>false]);
    }
}
