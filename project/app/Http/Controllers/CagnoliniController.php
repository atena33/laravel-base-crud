<?php

namespace App\Http\Controllers;
use App\Cagnolini;
use Illuminate\Http\Request;

class CagnoliniController extends Controller
{
  public function index(){

    $cagnolini = Cagnolini::all();

    return view('index', compact('cagnolini'));
  }
  public function show($id){

     $cagnolino = Cagnolini::findOrFail($id);

     return view('show_cagnolini', compact('cagnolino'));
  }
}
