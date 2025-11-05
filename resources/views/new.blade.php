<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Welcome to dojo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       

        <!-- Styles -->
        <!--Materialize -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!-- Required meta tags -->
 <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       

               
 <style>
    .column {
          float: left;
          width: 50%;
          padding: 5px;
            }
     @media screen and (max-width: 500px) {
          .column {
              width: 100%;
                  } 
        }

  
     .tabs{
       background-color: #69f0ae;
       
     }
     .tabs .tab {
       line-height: 28px;
     }
    
  
     .tabs .tab a{
        color:black;
         text-transform: none;
         font-size: 18px;
      
     }
    
     .tabs .tab a:hover,
     .tabs .tab a.active {
       color: teal;
       
     }
   
     .bottom-three {
                   margin-bottom: 2cm;
                }  
 </style>
           
       
    </head>
    <body>
       <!-- Navbar -->
      <nav>
        <div class="nav-wrapper green accent-4">
         <div class="container">
               <p class="brand-logo"> <b> HSC-dojo</b></p>
               <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
             <ul class="right hide-on-med-and-down">
                <li><a href="{{url('/blog_list')}}">Blog List</a></li>
                <li>
                  @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a  href="{{ url('/home') }}">Home</a>
                                @else
                                    <a  href="{{ route('login') }}">Login</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </li>
                
             </ul>
          </div>
        </div>
      </nav>
    
    
      <ul class="sidenav" id="mobile-demo">
        <li> <h5 style="color:teal">Links</h5> </li>
        <li><a href="{{url('/blog_list')}}">Blog List</a></li>
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/') }}">Welcome</a></li>

      </ul>

 
 <!-- Section: Slider-->
      <section class="slider">
      <ul class="slides">
      <li>
        <img src="image/brand/scroll1.jpg" > <!-- random image -->
        
      </li>
      <li style="background-color: white">
      <div class="caption center-align">
          <h1 class="black-text font-weight-bold display-4" >HSC-dojo</h1> 
          <h5 class=" red-text " style="font-weight: bold">HSC শ্রেণীর পড়াশোনা এবং ভর্তি প্রস্তুতির 
             জন্য একটি আধুনিক প্লাটফর্ম</h5>
        </div>
      </li>
      
    </ul>
    <p class="bottom-three"></p>
    <!-- Section: Registration-->
    @guest
    <section class="section section-icons grey lighten-3 center">
       <div class="container">
         <h2 style="font-family: Comic Sans MS; font-weight: bold">Sign Up/ Log in</h2>
         <div class="row">
           <div class="col s12 m4">
             <img src="image/brand/registration.png" height="360"  alt="">
           </div>

           <div class="col s12 m4">
            <p class="card-text">Already have an account?</p>
            <a href="{{ route('login') }}" class="btn cyan btn-rounded">Log in</a>  <hr>
            <p class="card-text">New to Dojo? To buy any course or read eNotes (for free!!) you need to
            open an account. It is really easy. Just like any social media that you use. All you need is
            an email id.    
           </p> 
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn cyan btn-rounded pulse">Sign Up</a>
            @endif
            
           </div>
           
         </div>
       </div>
      
     </section>
 
    @endguest

    @auth
       <section class="section section-icons grey lighten-3 center">
       <div class="container">
       <h2 style="font-family: Comic Sans MS; font-weight: bold">Welcome {{auth::user()->name}}</h2>
         <div class="row">
           <div class="col s12 m4">
             <img src="image/brand/dashbord.jpg" height="280"  alt="">
           </div>

           <div class="col s12 m4">
             <ul >
              <li>You have already subscribed to a course? </li>
              <li> or, you want to read eNotes (for Free!!)? </li>
              <li>or, you want to buy any course and learn with us? </li>
              <li>Then it is your time to visit your very own "Home Page" </li>
           </ul>
            <a href="{{ route('home') }}" class="btn cyan btn-rounded ">Home</a> 
           </div>
           
         </div>
       </div>
      
     </section>
        
    @endauth
    
    <p class="bottom-three"></p>
    <div class="container">
                      <blockquote cite="https://en.wikipedia.org/wiki/Dojo" style="font-weight: bold;font-size:20px">
                          
                          dōjō (道場, Japanese pronunciation: [doꜜː(d)ʑoː]) is a hall or place for 
                          immersive learning or meditation. This is traditionally in the field of martial arts, 
                          but has been seen increasingly in other fields, such as meditation and 
                          software development. The term literally means "place of the Way" in Japanese.
                          
                      </blockquote>
    </div>
  
      
    <p class="bottom-three"></p>
     <!--section: Iconbox-->
     <section class="section section-icons  green accent-2 center">
       <div class="container">
         <h2 style="font-family: Comic Sans MS; font-weight: bold">WHY HSC-dojo?</h2>
         <div class="row">
           <div class="col s12 m4">
             <div class="card-panel">
               <i class="material-icons large green-text">ondemand_video</i>
               <h5>Tutorials & live Sessions</h5>
             </div>
           </div>

           <div class="col s12 m4">
             <div class="card-panel">
               <i class="material-icons large green-text">picture_as_pdf</i>
               <h5>eNotes and suggestion</h5>
             </div>
           </div>

           <div class="col s12 m4 ">
             <div class="card-panel">
               <i class="material-icons large green-text">rate_review</i>
               <h5>Exam & Solution Review</h5>
            
             </div>
           </div>

           <div class="col s12 m4">
             <div class="card-panel">
               <i class="material-icons large green-text">fitness_center</i>
               <h5>Tools for Learning and practice</h5>
             </div>
           </div>

           <div class="col s12 m4">
             <div class="card-panel">
               <i class="material-icons large green-text">school</i>
               <h5>Experienced Mentors</h5>
               
             </div>
           </div>
           
         </div>
       </div>
      
    
     </section>
            
    
      <p class="bottom-three"></p>

      <!-- demo-->
      
    <section class="section grey lighten-4 center">
      <div class="container">
       <h2 style="font-family: Comic Sans MS; font-weight: bold">Try Out Our Materials</h2>
       <h4 style="color: #4a148c; font-family: Comic Sans MS">
                    <i class="prefix material-icons">swap_horiz</i> 
                   Browse Menu
                     
                </h4>
         
      
          <ul class="tabs tabs-fixed-width ">
               <li class="tab"><a href="#test1">Foundation Video</a></li>
               <li class="tab"><a href="#test2">Advanced Problem Solving</a></li>
               <li class="tab "><a href="#test3">Comprehensive Problem Solving Tutorials</a></li>
               <li class="tab"><a href="#test4">eNotes</a></li>
               <li class="tab"><a href="#test5" class="active" >Practice Tools</a></li>
               <li class="tab"><a href="#test6">Written Script Feedback</a></li>
               <li class="tab"><a href="#test7">Exam Review</a></li>
               <li class="tab"><a href="#test8">Lecture Notes</a></li>
              
          </ul>
        <div id="test1" class="col s12">
          <div class="card-panel">
               
                    <div class="row">
                        <div class="column">
                                  <iframe src="https://drive.google.com/file/d/1xrAgtIMMSxIx1cY9yUADgWtrlWs7J2s5/preview" height="460" width="100%"></iframe>
                        </div>
                        <div class="column">
                                 <h1 style="font-family: Verdana">Foundation Video</h1>
                                 <h5 style="text-align:left;font-family:Comic Sans MS"> In Foundation videos we explain everything from scratch. We will hold your hand and walk you
                                   through every idea of each suject in such a way that would give you a firm grasp on the subject
                                   and solid foundation for admission preparation.
                                 </h5>
                        </div>
                    </div>
               
          </div>
        </div>
        <div id="test2" class="col s12">
          <div class="card-panel">
               
                    <div class="row">
                        <div class="column">
                                  <iframe src="https://drive.google.com/file/d/1xrAgtIMMSxIx1cY9yUADgWtrlWs7J2s5/preview" height="460" width="100%"></iframe>
                        </div>
                        <div class="column">
                                 <h1 style="font-family: Verdana">Advanced Problem Solving</h1>
                                 <h5 style="text-align:left; font-family:Comic Sans MS"> 
                                  সিলেবাসের সবথেকে কঠিন সমস্যাটি সহজে সমাধান করে ফেলতে পারলে কেমন হয়?
                                  এসব সমস্যা সমাধান ভর্তি পরীক্ষার জন্য যেমন গুরুত্বপূর্ণ তেমনি বিষয় বস্তুর উপর শক্ত আনুধাবন
                                  পেতে সহায়ক। <br>
                                  আমরা crash course এবং Admission অংশে আলাদা করে শতাধিক এরকম সমস্যার playlist
                                  রেখেছি।
                                 </h5>
                        </div>
                    </div>
               
            </div>
        </div>
        <div id="test3" class="col s12"><div class="card-panel">
               
                    <div class="row">
                        <div class="column">
                                  <iframe src="https://drive.google.com/file/d/1xrAgtIMMSxIx1cY9yUADgWtrlWs7J2s5/preview" height="460" width="100%"></iframe>
                        </div>
                        <div class="column">
                                 <h1 style="font-family: Verdana">Comprehensive Problem Solving Videos</h1>
                                 <h5 style="text-align:left; font-family:Comic Sans MS"> 
                                  Both "admission" and "crash course" offer comprehensive problem solving tutorials
                                  where we help you solve all the important problems for the respective preparation package.
                                  <br>
                                  আমাদের অভিজ্ঞ শিক্ষক মণ্ডলী এমনভাবে সমস্যাগুলো নির্বাচন করেছেন যাতে করে ভর্তি পরিক্ষা এবং একাডেমিক প্রস্তুতির জন্য পর্যাপ্ত হয়।
                                 </h5>
                        </div>
                    </div>
               
            </div>
        
        
        </div>
        <div id="test4" class="col s12"><div class="card-panel">
          <div class="row">
                        <div class="column">
                                 <img src="image/brand/eNotes.png" alt="eNotes" class="img-fluid" height="480">
                        </div>
                        <div class="column">
                               <h1 style="font-family: Verdana">eNotes</h1>
                                 <h5 style="text-align:left; font-family:Comic Sans MS"> 
                                  বিষয় ভিত্তিক একাধিক বই? বুঝতে পারছ না কতটুকু "নিম্ন পক্ষে" জানা উচিত?
                                  <br>
                                  Try our "eনোট" !! 
                                 </h5>
                                 <h5 style="color: red"> It is toally free !! All you need is to sign up with an email id.</h5>
                                 <small> We are making great content every day. We will inform you with every update!</small>
                        </div>
                    </div>
               
            </div>



        </div>
        <div id="test5" class="col s12"><div class="card-panel">
          <div class="row">
                        <div class="column">
                                 <img src="image/brand/practiceTools.png" alt="Practice Tools"  class="img-fluid">
                        </div>
                        <div class="column">
                               <h1 style="font-family: Verdana">Practice Tools</h1>
                                 <h5 style="text-align:left; font-family:Comic Sans MS"> 
                                  সমস্যা সমাধান আয়ত্ত হচ্ছে না? 
                                  <br>
                                  Use our "Practice Tools" !! 
                                 </h5>
                                 <h5 style="color: red; text-align:left"> HSC-dojo offers separate "Practice Tools" section for both "admission" and "crash course" courses to learn and practice effectively and with your own pace.</h5>
                                <a href="{{url('/demo')}}" class="btn btn-primary">Try it out</a>
                        </div>
                    </div>
               
            </div>
        
        </div>
        <div id="test6" class="col s12">
            <div class="card-panel">
               
                    <div class="row">
                        <div class="column">
                                  <iframe src="https://drive.google.com/file/d/1wo3BCxmaMKzKf264L9frRT6F0vHyYfY3/preview" width="100%" height="400" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <div class="column">
                                 <h1 style="font-family: Verdana">Written Script Feedback</h1>
                                 <h5 style="text-align:left; font-family:Comic Sans MS"> 
                                 প্রতিটি Exam এর Written Script তোমাদের সম্মানিত mentor গন নিরীক্ষণ করে Feedback জানিয়ে দিয়ে থাকেন। 
                                 </h5>
                        </div>
                    </div>
               
            </div>
        </div>
        <div id="test7" class="col s12">
          <div class="card-panel">
               
                    <div class="row">
                        <div class="column">
                                  <iframe src="https://drive.google.com/file/d/1xrAgtIMMSxIx1cY9yUADgWtrlWs7J2s5/preview" height="460" width="100%"></iframe>
                        </div>
                        <div class="column">
                                 <h1 style="font-family: Verdana">Exam Review</h1>
                                 <h5 style="text-align:left; font-family:Comic Sans MS"> 
                                 প্রতিটি Exam এর সমাধান আলোচনা করে "Exam Solutionn Review" টিউটোরিয়াল দেয়া হয়।
                                 </h5>
                        </div>
                    </div>
               
            </div>
        
        
        </div>
        
        <div id="test8" class="col s12">
          <div class="card-panel">
               
                    <div class="row">
                        <div class="column">
                         <iframe src="https://drive.google.com/file/d/1Hw_EC--8s3-44hUnAsGgkZuQ09cbypo3/preview" width="100%" height="480"></iframe>
                        </div>
                        <div class="column">
                                 <h1 style="font-family: Verdana">Lecture Notes</h1>
                                 <h5 style="text-align:left; font-family:Comic Sans MS"> 
                                  প্রতিটি Lecture এর সাথে "Preparation-focused lecture notes" দেয়া হয়ে থাকে যা সংশ্লিষ্ট বছরের জন্য যথাযথ ভাবে তৈরি করা। 
                                 </h5>
                        </div>
                    </div>               
            </div>

        </div>


        </div>
      </div>   
    </section>
      

      <p class="bottom-three"></p>
    <!-- Blog -->
     <section class="section section-icons red lighten-5 center">
       <div class="container">
       <h2 style="font-family: Comic Sans MS; font-weight: bold"></h2>
         <div class="row">
           <div class="col s12 m4">
             <img src="image/brand/blog.jpg" height="280"  alt="">
           </div>

           <div class="col s12 m4">
             <ul>
               <li> Want to Solve MCQ and Maths Faster? </li>
              <li>Wonder How Successfull Students Study? </li>
              <li>Looking for suggestions, tricks to prepare faster or important book-list? Try out our "FREE" blog section </li>
              
           </ul>
            <a href="{{route('Blog List')}}" class="btn red lighten-3 btn-rounded">Blog</a> 
           </div>
           
         </div>
       </div>
      
     </section>


      <p class="bottom-three"></p>
             

    
    <!--footer-->
    <footer class="page-footer  green accent-4">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
                
                   <h1 class=" black-text" style="font-family: Comic Sans MS"><b> HSC-dojo</b> </h1>
                    <p style="font-family:verdana"> HSC-dojo is a project of Studio T as a part of their mission to produce high quality education-tools to enhance the quality of the science education system of Bangladesh and make science students more competitive to meet the need of modern world. </p>
          <p style="font-family:verdana">HSC-dojo is a gathering of some gifted and highly renowned instructors who have years of experience of mentoring students in admission arena all over the country accompanied by the talened software developer team of Studio T to ensure pleasant and easy user experience.</p>
                      <br> <br>
                      <strong style="font-family: Comic Sans MS">We collect email and phone number to
                         enable students to use our platform; We never store any kind of user data and after 
                         each program we erase all their credentials permanently </strong>
                  
            </div>
            <div class="col 12 offset-l2 s12">

                <ul>
                    <li><a class="btn-floating btn-large pink lighten-2 " target="_blank" href="https://www.instagram.com/hscdojo"><i class="fa fa-instagram"></i></a></li> <br>
                    <li><a class="btn-floating btn-large blue darken-4 " target="_blank" href="https://www.facebook.com/hscdojo"><i class="fa fa-facebook"></i></a></li> <br>
                    <li><a class="btn-floating btn-large btn-success " target="_blank" href="https://wa.me/8801838660303"><i class="fa fa-whatsapp"></i></a></li> <br>
                    <li><a class="btn-floating btn-large red " target="_blank" href="https://www.facebook.com/hscdojo"><i class="material-icons">message</i></a></li> <br>
                    <li><a class="btn-floating btn-large indigo " target="_blank" href="mailto:hscdojo.bd@gmail.com?subject=website inquiry"><i class="material-icons">mail</i></a></li> <br>
                    <li><a class="btn-floating btn-large red darken-4 " target="_blank" href="https://www.youtube.com/channel/UCc0C7a3xN1vIBl80GiTUrFQ"><i class="fa fa-youtube"></i></a></li>
    
                  </ul>

            </div>
          </div>
        </div>
        <div class="footer-copyright white-text">
          
          <div class="container text-center">
          <h5>© 2020 All Rights Reserved By Studio T</h5>

          </div>
        </div>
    </footer>

        <script>
        
          
               document.addEventListener('DOMContentLoaded', function()
                {
                  var el = document.querySelectorAll('.tabs');
                  var instance = M.Tabs.init(el);
                });

         
               document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('.sidenav');
              var instances = M.Sidenav.init(elems);
                });
         
           document.addEventListener('DOMContentLoaded', function() {
             var elems = document.querySelectorAll('.slider');
               var instances = M.Slider.init(elems,{
                 indicators:false, 
                 height:250,
                 duration:1000,
                 interval:3000,
                 
               }
               
               );
              });
        </script>
            
 <!-- Optional JavaScript -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    
   
    </body>
</html>
