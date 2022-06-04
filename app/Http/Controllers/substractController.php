<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class substractController extends Controller
{
     public function sub(Request $request){
      $number1=$request->input('num1');
      $number2=$request->input('num2');
      $sub=$number1-$number2;
      echo $sub;
      return view('calculator',['sub'=>$sub]);
   }
}
