<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
  public function index(){
    $title = "This is my controller title";
      return view('pages.index', compact('title'));
  }


  public function abt_timmer(){
    return 'About page from controller calling the abt_timmer method';
  }
  public function services(){
    $services = "The strings that binds it";
    $data = array(
      'title' => 'services',
      'tickets' => ['kano','abia','lagos']
    );
    return view('pages.services', compact('services'));
  }
}




