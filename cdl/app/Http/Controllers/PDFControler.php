<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;
use Barryvdh\DomPDF\FACADE as PDF;


class PDFControler extends Controller
{
    public function gerarPDF($id){
       

        $dados = Candidato::find($id);
    
        $pdf = PDF::loadView('pdf', compact('dados'));

        return $pdf->setPaper("a4")->stream('file.pdf');

        
    }
}