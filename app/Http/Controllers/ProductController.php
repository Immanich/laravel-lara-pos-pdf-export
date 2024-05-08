<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    public function index() {
        $product = Product::orderBy('name')->get();

        return view('product-index', [
            'product' => $product
        ]);
    }

    public function pdf() {
        $product = Product::orderBy('name')->get();

        $pdf = Pdf::loadView('product-index', compact('product'));
        
        return $pdf->stream('product-pdf.pdf');
    }
}
