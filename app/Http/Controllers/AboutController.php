<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        return view('about', [
            'content' => AboutModel::contents()
        ]);
    }
}
