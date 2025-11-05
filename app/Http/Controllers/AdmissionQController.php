<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admissionQ;
class AdmissionQController extends Controller
{   
    // Vector
    public function Vector_Admission_mcq(){
          $mcqs=admissionQ::where('subject', 'Physics')->where('type','mcq')->where('chapter','Vector')->paginate(1);
         return view("admission.physics.vector_mcq")->with('mcqs', $mcqs);           
        
        }
    public function Vector_Admission_math(){
     $maths=admissionQ::where('subject', 'Physics')->where('type','math')->where('chapter','Vector')->paginate(1);
     return view("admission.physics.vector_math")->with('maths', $maths);

     }

      public function Vector_Admission_lessons(){
      return view("admission.physics.vector_lesson");

      }

      public function ComplexNumber_Admission_lessons () {
          return view ("admission.math.complexnumber_lessons");
      }


}
