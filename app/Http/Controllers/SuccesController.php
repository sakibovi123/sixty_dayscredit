<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccesController extends Controller
{
    public function showSuccess(){
        return view('success');
    }
}
