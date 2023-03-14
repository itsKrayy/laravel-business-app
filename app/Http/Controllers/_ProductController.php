<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index(){
        return view('products', [
            'products' => ProductModel::all()
        ]);
    }

}
