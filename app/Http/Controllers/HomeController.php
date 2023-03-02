<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomeModel;
use App\Http\Requests;

class HomeController extends Controller
{
    //
    public function index(){
        return view('index', [
            'features' => HomeModel::offers()
        ]);
    }
}
