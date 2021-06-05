<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
 function Read(){

    return view('crud');
 }


//  function Create(Request $req){

//    return redirect()
//  }

}
