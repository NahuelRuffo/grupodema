<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stokController extends Controller
{
    public function materiaPrima(){
        return view('stock.materiaPrima');
    }

    public function stock(){
        return view('stock.stock');
    }
}
