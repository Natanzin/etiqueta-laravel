<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produto;
use PDF;

class PdfController extends Controller
{
    public function geraPdfProdutos(){
        $produtos = produto::all();
        $pdf = PDF::loadView('pdf.produtos', compact('produtos'));
        return $pdf->setPaper('a4')->stream('produtos.pdf');
    }
    public function geraPdfEtiquetas(Request $request){
        $produtos = produto::all();
        $pdf = PDF::loadView('pdf.etiquetas', compact('produtos'));
        return $pdf->setPaper('a4')->stream('etiquetas.pdf');
    }
}
