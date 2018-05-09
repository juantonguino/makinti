<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function quienesSomos(){
        return view('quienessomos');
    }

    public function aliados(){
        return view('aliados');
    }

    public function hazParte(){
        return view('hazparte');
    }

    public function contactanos(){
      return view('contactanos');
    }

    public function talleres(){
      return view('talleres');
    }

    public function artesanos(){
      return view('artesanos');
    }

    public function sendMail(Request $request){

    }

    public function signIn(){

    }
}
