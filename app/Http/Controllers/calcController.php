<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcController extends Controller
{
   public function calculator(Request $request){
      $number1=$request->input('num1');
      $number2=$request->input('num2');
       switch ($request->input('action')) {
        case 'sum':
             $sum=$number1+$number2;
           return view('calculator',['result'=>$sum]);
            break;

        case 'substract':
             $sub=$number1-$number2;
           return view('calculator',['result'=>$sub]);
            break;
            
               case 'multiply':
                $multiply=$number1*$number2;
           return view('calculator',['result'=>$multiply]);
            break;


        case 'division':
               $division=$number1/$number2;
           return view('calculator',['result'=>$division]);
            break;
    }
          return view('calculator');
   }
  
}
