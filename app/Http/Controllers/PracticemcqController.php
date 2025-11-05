<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\practicemcq;

class PracticemcqController extends Controller
{
    public function practiceMCQ(){

        $questions=practicemcq::where('chapter','measurement')->Paginate(1);
        
        return view('practicemcq')->with('questions',$questions);
        
      
       
    }
}
