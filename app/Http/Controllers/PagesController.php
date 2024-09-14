<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function detail($id){
        return view('user.detail');
    }

}
