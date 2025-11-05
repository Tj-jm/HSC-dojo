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
   ol.listing {
      list-style-type: square;
      color: black;
    }
     

     body {
         background-color: black;
         color: #fff;
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
        }
    
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

  

     .bottom-three {
                   margin-bottom: 2cm;
                }  

    .glow {
       font-size: 50px;
       color: #fff;
       text-align: center;
       -webkit-animation: glow 1s ease-in-out infinite alternate;
       -moz-animation: glow 1s ease-in-out infinite alternate;
       animation: glow 1s ease-in-out infinite alternate;
    }

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
/**Button */
a.button{
    position: relative;
    display: inline-block;
    padding: 25px 30px;
    margin: 40px 30px;
    color: #03e9f4;
    font-size: 24px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: 0.5s;
    letter-spacing: 4px;
    -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
}

a:nth-child(1){
    filter: hue-rotate(150deg);
}

a:nth-child(3){
    filter: hue-rotate(200deg);
}

a:hover{
    background: #03e9f4;
    color: #050801;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 200px #03e9f4;
}

a span{
    position: absolute;
    display: block;
}

a span:nth-child(1){
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent, #03e9f4);
    animation: animate1 1s linear infinite;
}

@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}

a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent, #03e9f4);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}

@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}

a span:nth-child(3){
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent, #03e9f4);
    animation: animate3 1s linear infinite;
    animation-delay: 0.5s;
}

@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}

a span:nth-child(4){
    bottom: -100;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent, #03e9f4);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}

@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}
/**Button */
 </style>
           
       
    </head>
    <body>
       <!-- Navbar -->
      <nav>
        <div class="nav-wrapper red lighten-2">
         <div class="container">
               <p class="brand-logo"> <b> HSC-dojo</b></p>
               <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>            
          </div>
        </div>
      </nav> <br>
    
    
     

     <div class="container">
         <h1>HSC-dojo academic Program</h1>
         <h5 class="glow" >
         কেন HSC-dojo Academic তোমার প্রথম পছন্দ</h5> <br>
         <div class="card-panel  text-dark">
           <ol class="listing" style="font-size: 16px; font-weight: bold">
             <li >
               Modular Course System
             </li>
             <li> 
                 অনেক বছরের অভিজ্ঞ শিক্ষক মণ্ডলীর তত্ত্বাবধানে সর্বাধিক কার্যকরী উপায়ে লেকচার প্রদান। 
             </li>
             <li> 
                 লাইভ ক্লাসে সকলের অংশগ্রহণ নিশ্চিত করার জন্য প্রতি unit এ নির্ধারিত সংখ্যক 
                 শিক্ষার্থী ভর্তি করানো হয়।
             </li>
             <li> 
                 কোর্সের সময় প্রচলিত সকল গুরুত্তপূর্ণ Textbook এর সমস্যা সমাধান করে দেয়া হয়।
             </li>
             <li> 
                 লাইভ ক্লাসের recorded video এক সপ্তাহ পর্যন্ত website এ দেয়া থাকবে।
             </li>
             <li> 
                 নিয়মিত Exam গ্রহন এবং performance এর উপর ব্যক্তিগতভাবে feedback প্রদান। 
             </li>
             <li> 
                 Course সমূহ এমনভাবে সাজানো হয়েছে যা Admission Preparation এ সুদৃঢ় ভিত্তি দিবে। 
             </li>
             <li> 
                 MCQ এবং গানিতিক সমস্যা অনুশীলনের জন্য  website এ প্রত্যেকের 
                 account এ practice tools দেয়া হবে যাতে থাকবে আগেরদিনের লেকচারের উপর 
                 বাছাইকৃত সমস্যা (HSC-dojo দেশের প্রথম online platform 
                 যেখানে এরকম টুলস এর সমাবেশ ঘটানো হয়েছে)
             </li>
             <li> 
                 Payment ২ টি ধাপে পরিশোধের ব্যবস্থা।
             </li>
             <li>
                 লেকচারের উপর pdf Notes প্রদান।
             </li>
             <li> 
                 Module এ অংশগ্রহণকারী প্রতিটি শিক্ষার্থী module শেষ হয়ে যাবার পর ও module সংক্রান্ত
                 যে কোন সমস্যা HSC exam পর্যন্ত সমাধান করিয়ে নিতে পারবে।
             </li>
           </ol>
                <blockquote class="text-center" style="font-weight:bold; color: red"> 
                Let's invest in our FUTURE</blockquote>
         </div>

     </div>
     <div class="container" style="text-align: center; font-family: verdana"> 
         <h5 > Download the routine</h5>
         <small style="color: aqua"> Running Program(s): Physics: Module 1 and 4, Math: Module A and 2, Chemistry: Organic</small>
     </div>
     <div class="conainer">
     <a class="button" href="#" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Physics 
    </a>
    <a class="button" href="#" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Math  
    </a>
    <a class="button" href="#" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Chemistry  
    </a>
       
     </div> 
     <div class="bottom-three"></div>

     <div class="container">
         <h3>অংশগ্রহণের পদ্ধতি</h3>

         <div class="card-panel  text-dark">
           <ol class="listing" style="font-size: 16px; font-weight: bold">
             <li >
                যেই Module এ অংশ নিতে চাও সেই মডিউলের fb পেজে নিচের লিঙ্ক থেকে প্রবেশ কর।
             </li>
             <li> 
                 Module এর প্রথম ভাগের ফি সরবরাহকৃত বিকাশ নাম্বারে প্রেরণ কর।  
             </li>
             <li> 
                 Group এর প্রস্নগুলোর উত্তর দাও। মনে রাখবে, যে নাম্বার থেকে বিকাশে করে Payment প্রেরণ করেছ
                 সেই নাম্বার এবং তোমার নিজের যোগাযোগ নাম্বার দুইটি ভিন্ন field এ ইনপুট দেয়া
                 লাগবে।
             </li>
             <li> 
                 এছাড়া অন্যান্য প্রয়োজনীয় প্রশ্নের উত্তর সরবরাহ কর। যদি কোন Step বুঝতে সমস্যা হয় তাহলে
                 নির্দ্বিধায় আমাদের সাথে যোগাযোগ কর। (phone, whatsapp, messenger inbox anything !!)
             </li>
             <li> 
                 ব্যাস। এডমিন যত দ্রুত সম্ভব তোমার membership activate করে দিবেন।
             </li>
            
         </div>

     </div>

     <div class="conainer">
     <a class="button" href="https://www.facebook.com/groups/957377984747072/?ref=share" target="_blank">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Physics Module 1
    </a>
    <a class="button" href="https://www.facebook.com/groups/957377984747072/?ref=share" target="_blank" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Physics Module 4  
    </a>
    <a class="button" href="https://www.facebook.com/groups/1464149347116235/?ref=share" target = "_blank">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Math Module 1 
    </a>

    
    <div class="conainer">
     <a class="button" href="https://www.facebook.com/groups/333606001033654/?ref=share" target = "_blank" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Math Module 2
    </a>
    <a class="button" href="#" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Chemistry Organic  
    </a>
    
    </a>
    
       
     </div> 
     <div class="bottom-three"></div>
      
     
      
    <div class="container">
                      <blockquote cite="https://en.wikipedia.org/wiki/Dojo" style="font-weight: bold;font-size:20px">
                          
                          dōjō (道場, Japanese pronunciation: [doꜜː(d)ʑoː]) is a hall or place for 
                          immersive learning or meditation. This is traditionally in the field of martial arts, 
                          but has been seen increasingly in other fields, such as meditation and 
                          software development. The term literally means "place of the Way" in Japanese.
                          
                      </blockquote>
    </div>
  <hr >
      
             

    
    <!--footer-->
    <footer class="page-footer  black">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
                
                   <h1 class=" green-text" style="font-family: verdana"><b> HSC-dojo</b> </h1>
                    <p style="font-family:verdana"> HSC-dojo is a project of Studio T as a part of their mission to produce high quality education-tools to enhance the quality of the science education system of Bangladesh and make science students more competitive to meet the need of modern world. </p>
          <p style="font-family:verdana">HSC-dojo is a gathering of some gifted and highly renowned instructors who have years of experience of mentoring students in admission arena all over the country accompanied by the talened software developer team of Studio T to ensure pleasant and easy user experience.</p>
                      <br> <br>
                      <strong style="font-family: Comic Sans MS;color: red">We collect email and phone number to
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
