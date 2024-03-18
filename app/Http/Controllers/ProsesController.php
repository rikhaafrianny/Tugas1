<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function store(Request $request)
    {
        $a=$request->a;
        $b=$request->b;
        $op=$request->op;

        if($op=='+'){
            $hasil=$a+$b;
        }elseif($op=='_'){
            $hasil=$a-$b;
        }elseif($op=='x'){
            $hasil=$a*$b;
        }elseif($op==':'){
            if($b !=0) {
                $hasil =$a/$b;
            } else {
                $hasil =($op == 'Bagi' && $b !=0) ?$a/$b :"Tidak dapat melakukan pembagian dengan angka 0";
            }        
        }
        return view('kalkulator.hasil',compact('hasil'));
    }
    


}
