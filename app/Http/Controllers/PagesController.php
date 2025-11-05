<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\chapters;
use App\submission;
use App\forum;
use App\User;


class PagesController extends Controller
{  //Dashboard

  public function admission(){
    
        return view('home_admission');

  }
  public function online()
  {

    return view('home_online');
  }

  public function crashCourse(){
    $timelines = post::where("subject","Timeline")->orderby("created_at","desc")->get();
        return view('home_crashcourse')->with("timelines",$timelines);

  }

//payment
  public function payment(){

    return view('payment');
  }

//library
 public function libraryVideo_bangla(){
  $posts = post::where("category","Video_Bangla")->orderby("created_at","desc")->paginate(30);

  return view('library.bangla.video')->with('posts',$posts);

 }
  public function libraryPDF_bangla(){
    $posts = post::where("category","pdf_Bangla")->orderby("created_at","desc")->paginate(30);

    return view('library.bangla.pdf')->with('posts',$posts);

   }
   public function librarySolve_bangla(){
    $posts = post::where("category","Solve_Bangla")->orderby("created_at","desc")->paginate(30);
  
    return view('library.bangla.solve')->with('posts',$posts);
  
   }

   public function libraryVideo_english(){
    $posts = post::where("category","Video_English")->orderby("created_at","desc")->paginate(30);
  
    return view('library.english.video')->with('posts',$posts);
  
   }

   public function libraryPDF_english(){
    $posts = post::where("category","pdf_English")->orderby("created_at","desc")->paginate(30);
  
    return view('library.english.pdf')->with('posts',$posts);
  
   }

   public function librarySolve_english(){
    $posts = post::where("category","Solve_English")->orderby("created_at","desc")->paginate(30);
  
    return view('library.english.solve')->with('posts',$posts);
  
   }
   // User management
  
  public function waiting(){
    $id=auth()->user()->id;
     $applications=submission::where('comment','!=','ok')
     ->where("user_id",$id)
     ->orderby("created_at",'desc')->get();

      return view('waiting')->with('applications',$applications);

    }
      //Posts

  public function physics_post_bangla(){
      $posts = post::where("subject","Physics_Bangla")->orderby("created_at","desc")->paginate(30);

    return view('post.physics_post')->with('posts',$posts);
  }


  public function physics_post_english(){
    $posts = post::where("subject","Physics_English")->orderby("created_at","desc")->paginate(30);

  return view('post.physics_post_english')->with('posts',$posts);
}


  public function physics_bangla(){

   
    return view('Physics.bangla.topics');
  }

  public function physics_english(){

   
    return view('Physics.english.topic');
  }

  public function math_bangla(){

   
    return view('math.bangla.topics');
  }

  public function math_english(){

   
    return view('math.english.topics');
  }

  public function physics_1st_bangla_chapters(){

    $firsts=chapters::where('subject','physics 1st bangla')->paginate(1,['*'],'firsts');
    $seconds=chapters::where('subject','physics 2nd bangla')->paginate(1,['*'],'seconds');
 
    return view('Physics.bangla.chapters')->with(compact('firsts','seconds'));
  }
  // math

  public function math_post_bangla(){
    $posts = post::where("subject","Math_Bangla")->orderby("created_at","desc")->paginate(30);

  return view('post.math_post')->with('posts',$posts);
  }

 public function math_post_english(){
  $posts = post::where("subject","Math_English")->orderby("created_at","desc")->paginate(30);

    return view('post.math_post_english')->with('posts',$posts);
  }


// Exam Center

  public function exam_center_bangla(){
    $posts = post::where("subject","Question_Bangla")->orderby("created_at","desc")->get();
    return view ('exam_center_bangla')->with('posts',$posts);

  }

  public function exam_center_english(){
    $posts = post::where("subject","Question_English")->orderby("created_at","desc")->get();
    return view ('exam_center_english')->with('posts',$posts);

  }

  //forum
  public function forumPhysics(){
    $questions = forum:: where("subject","Physics")->orderby("created_at","desc")->Paginate(20);
    
    return view("forum.physics")->with("questions",$questions);

  
  }

  public function forumMath(){
    $questions = forum:: where("subject","Math")->orderby("created_at","desc")->Paginate(20);
    
    return view("forum.math")->with("questions",$questions);

  
  }

  public function forumPreparation(){
    $questions = forum:: where("subject","Technique")->orderby("created_at","desc")->Paginate(20);
    
    return view("forum.preparation")->with("questions",$questions);

  
  }

  public function forumQuery(){
    $questions = forum:: where("subject","General_Query")->orderby("created_at","desc")->Paginate(20);
    
    return view("forum.general inquiry")->with("questions",$questions);

  
  }

  //Admission Post

  //Bangla Version

  public function math_admission_video_bangla(){
  $posts = post::where("subject","Math_Admission")->where("Category","Video_Bangla")
  ->orderby("created_at","desc")->paginate(30);

  return view('admission.bangla.math_video')->with('posts',$posts);
  }
 public function math_admission_pdf_bangla(){
 $posts = post::where("subject","Math_Admission")->where("Category","pdf_Bangla")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.bangla.math_pdf')->with('posts',$posts);
 }
 public function math_admission_solve_bangla(){
 $posts = post::where("subject","Math_Admission")->where("Category","Solve_Bangla")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.bangla.math_solve')->with('posts',$posts);
 }



 public function physics_admission_video_bangla(){
 $posts = post::where("subject","Physics_Admission")->where("Category","Video_Bangla")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.bangla.physics_video')->with('posts',$posts);
 }
 public function physics_admission_pdf_bangla(){
 $posts = post::where("subject","Physics_Admission")->where("Category","pdf_Bangla")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.bangla.physics_pdf')->with('posts',$posts);
 }
 public function physics_admission_solve_bangla(){
 $posts = post::where("subject","Physics_Admission")->where("Category","Solve_Bangla")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.bangla.physics_solve')->with('posts',$posts);
 }



 public function chemistry_admission_video_bangla(){
 $posts = post::where("subject","Chemistry_Admission")->where("Category","Video_Bangla")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.bangla.chemistry_video')->with('posts',$posts);
 }
 public function chemistry_admission_pdf_bangla(){
 $posts = post::where("subject","Chemistry_Admission")->where("Category","pdf_Bangla")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.bangla.chemistry_pdf')->with('posts',$posts);
 }
 public function chemistry_admission_solve_bangla(){
 $posts = post::where("subject","Chemistry_Admission")->where("Category","Solve_Bangla")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.bangla.chemistry_solve')->with('posts',$posts);
 }


 //English Version

 public function math_admission_video_english(){
 $posts = post::where("subject","Math_Admission")->where("Category","Video_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.math_video')->with('posts',$posts);
 }
 public function math_admission_pdf_english(){
 $posts = post::where("subject","Math_Admission")->where("Category","pdf_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.math_pdf')->with('posts',$posts);
 }
 public function math_admission_solve_english(){
 $posts = post::where("subject","Math_Admission")->where("Category","Solve_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.math_solve')->with('posts',$posts);
 }



 public function physics_admission_video_english(){
 $posts = post::where("subject","Physics_Admission")->where("Category","Video_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.physics_video')->with('posts',$posts);
 }
 public function physics_admission_pdf_english(){
 $posts = post::where("subject","Physics_Admission")->where("Category","pdf_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.physics_pdf')->with('posts',$posts);
 }
 public function physics_admission_solve_english(){
 $posts = post::where("subject","Physics_Admission")->where("Category","Solve_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.physics_solve')->with('posts',$posts);
 }



 public function chemistry_admission_video_english(){
 $posts = post::where("subject","Chemistry_Admission")->where("Category","Video_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.chemistry_video')->with('posts',$posts);
 }
 public function chemistry_admission_pdf_english(){
 $posts = post::where("subject","Chemistry_Admission")->where("Category","pdf_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.chemistry_pdf')->with('posts',$posts);
 }
 public function chemistry_admission_solve_english(){
 $posts = post::where("subject","Chemistry_Admission")->where("Category","Solve_English")
 ->orderby("created_at","desc")->paginate(30);

 return view('admission.english.chemistry_solve')->with('posts',$posts);
 }


 
  
}
