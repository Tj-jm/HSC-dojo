<!DOCTYPE html>
  <html>
    <head>
        <title>Physics 1st Paper</title>
    
      <!--Import Google Icon Font-->
      
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Bootstrap-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
		crossorigin="anonymous">
      <style> 
        body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
    
        main {
         flex: 1 0 auto;
       }  
       .bottom-three {
                   margin-bottom: 1.5cm;
                }
          
      </style>
    </head>

    <body>
        

      <!-- Navbar -->
      <nav>
        <div class="nav-wrapper teal darken-2">
         <div class="container">
               <a href="{{ url('/') }}" class="brand-logo"> <b> HSC-dojo</b></a>
               <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
             <ul class="right hide-on-med-and-down">
                <li><a href="{{url('/blog_list')}}">Blog List</a></li>
                <li><a href="badges.html">Free Demo</a></li>
                
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

      <!-- Blog Menu -->
    <div class="container">
        <p class="bottom-three"></p>

        <div class="card-panel ">
             <h5 class="text-success font-weight-bold text-center">দ্য 11 টাইমস ট্রিক </h5>

            আমরা সকলেই জানি কোন সংখ্যাকে ১০ দিয়ে গুণনের সময় এর শেষে ০ বসিয়ে দিলেই গুণফল পাওয়া যায়। তবে তুমি কি জানো যে কোন দুই অংক বিশিষ্ঠ সংখ্যাকে 11 দিয়ে গুণ করে গুণফল বের করারও একটি সহজ কৌশল আছে? সেটি হলো
            দুই অংক বিশিষ্ঠ যে সংখ্যাকে ১১ দ্বারা গুণ করা হবে সেটির মাঝখানে একটি সংখ্যা কল্পনা করো (উদাহরণস্বরূপ আমরা 52 ব্যবহার করব:) <br>
            5 _ 2  <br>
            এখন দুটি সংখ্যা একসাথে যোগ করে এবং তাদের মাঝখানে রাখ: <br>
            5 (5 + 2) 2 <br>
            = 572 <br>
            এটাই তোমার উত্তর: 572  <br>
            যদি মাঝের সংখ্যাটি ২ অংক বিশিষ্ঠ হয়ে যায় যথা ১ম+২য় সংখ্যার যোগফল ২ অংক বিশিষ্ঠ হয়ে যায় তাহলে সংখ্যাটির ১ম অঙ্কটি মাঝখানে বসবে এবং বাকি অংক ১ম সংখ্যার সাথে যোগ হবে।  <br>
            উদাহরণস্বরূপ 99*11 এর ক্ষেত্রে, <br>
            9 (9+9) 9  <br>
            9 (18) 9  <br>
            9+1 (8) 9  <br>
            1089  <br>
            1089 - এটিই উত্তর।

        </div>
        <br>  

        <div class="card-panel ">
            <h5 class="text-success font-weight-bold text-center">কুইক স্কয়ার। </h5>
            যদি তোমাকে ২ অংক বিশিষ্ঠ এবং ৫ দ্বারা শেষ হয় এমন সংখ্যার বর্গ বের করতে বলা হয় তাহলে এই ট্রিক ব্যবহার করে সহজেই বের করে ফেলতে পারবে।  <br>
            প্রথম অঙ্কটি ও এর সাথে ১ যোগ করে গুনফল বের করো এবং শেষে 25 টি রাখো। যেমন 25 এর ক্ষেত্রে, <br>
            25<sup>2</sup> = (2 x (2 + 1)) এবং 25  <br>
                 = (2 x 3) এবং 25  <br>
                 = 625 

        </div>


             <br> 

        <div class="card-panel">
            <h5 class="text-center text-success font-weight-bold">5 দ্বারা গুণ করা</h5>
            বেশিরভাগ স্টুডেন্টই 5 এর নামতা খুব সহজেই মুখস্থ করে রাখে, তবে যখন বেশ বড় সংখ্যা গুণ করতে যায় তখন ঝামেলায় পড়ে। এর জন্যও একটি সহজ ট্রিক রয়েছে।  <br>
            যে কোনও সংখ্যা নাও, তারপরে এটি 2 দিয়ে ভাগ করো (অন্য কথায়, সংখ্যাটি অর্ধেক করো)। যদি ফলাফলটি পুরো হয়, শেষে একটি 0 যুক্ত কর। যদি তা না হয় তবে অবশিষ্টটিকে উপেক্ষা কর এবং শেষে একটি 5 যুক্ত কর। এটি সর্বদা কাজ করে: <br>
            একটি সংখ্যা নাও, সংখ্যাটিকে ২ দ্বারা ভাগ করো(অন্যভাবে বললে অর্ধেক করো) যদি ভাগফল পূর্ণসংখ্যা হয় তাহলে তার শেষে একটি 0 যুক্ত করো। আর তা না হলে বা ভগ্নাংশ হলে দশমিকের পরের অংশ বাদ দিয়ে (শুধু পূর্ণসংখ্যা অংশ নিয়ে) তার শেষে 5 যুক্ত করো।  <br>
            এটিই উত্তর। যেমন, <br>
            2682 x 5 = (2682 / 2) & (5 অথবা 0)  <br>
            2682 / 2 = 1341 (পূর্ণসংখ্যা তাই শেষে 0 যুক্ত হবে)  <br>
            13410  <br> <br>
            আরেকটি উদাহরণ দেখা যাক, <br>
            5887 x 5 <br>
            2943.5 (ভগ্নাংশ তাই দশমিকের পরের অংশ বাদ দিতে হবে এবং শেষে 5 যুক্ত করতে হবে)  <br>
            2943 ও 5 

        </div>
            
             <br> 

            <div class="card-panel">
                <h5 class="text-center text-success font-weight-bold">4 দ্বারা গুণ করা </h5>
            এটি একটি খুব সহজ কৌশল যা কারওর কাছে সুস্পষ্ট মনে হতে পারে তবে কারোকারো কাছে নয়। কৌশলটি হল দুই দ্বারা গুণ করা এবং তারপর আবারও দুই দ্বারা গুণ করা: <br>
            58 x 4 এর ক্ষেত্রে  <br>
            58 x 4 = (58 x 2) + (58 x 2) = (116) + (116) = 232

            </div>
              <br> 
         <div class="card-panel">
             <h5 class="text-center text-success font-weight-bold">টিপ গণনা করা</h5>
            তোমাকে রেস্টুরেন্টের বিলের সাথে যদি 15% টিপ রেখে যেতে হয় তবে এটি করার সহজ উপায় আছে। প্রথমে বিলের 10% বের করো (সিম্পলি বিলকে 10 ​​দ্বারা ভাগ করো)। তারপরে একে অর্ধেক করে ১০% এর সাথে যোগ করো। তাহলে ১০%+(১০/২%=৫%) = ১৫% বের হয়ে যাবে।<br>
            যেমনঃ<br>
            ৳250 এর 15% = (250৳ এর 10%) + ((250৳ এর 10%) / 2)<br>
                         = 25.0৳ + 12.5৳  <br>
                         = 37.5৳ 

         </div>

            <br>
        <div class="card-panel">
           <h5 class="font-weight-bold text-success text-center">কঠিণ গুণ</h5>
            তোমাকে যদি ২টি বৃহত সংখ্যা গুণ করতে দেওয়া হয় এবং একটি সংখ্যা যদি জোড় সংখ্যা হয় তবে খুব সহজেই সাবডিভাইড করে গুনফল বের করে ফেলতে পারো। সাবডিভাইড হলো যে ২টি সংখ্যার গুণফল বের করতে হবে তাদের যেকোন একটিকে কোন সংখ্যা দ্বারা ভাগ করে সেই একই সংখ্যা দ্বারা অন্যটিকে গুণ করা। এভাবে নিজের সুবিধামত বারবার এই প্রসেস প্রয়োগ করে গুণের কাজকে সহজ করে তোলা।<br>
            উদাহরণস্বরূপ,<br>
            32 x 125,<br>
            16 x 250 (32 কে 2 দ্বারা ভাগ করা হয়েছে এবং সেই 2 দ্বারা 125 কে গুণ করা হয়েছে)<br>
            8 x 500 (16 কে 4 দিয়ে ভাগ করা হয়েছে এবং সেই 4 দ্বারা 250 কে গুণ করা হয়েছে)<br>
            4 x 1000 = 4,000
        </div>

             <br>
                        
        <div class="card-panel">
        <h5 class="text-center text-success font-weight-bold">5 দ্বারা বিভাজন</h5>
            একটি বৃহত সংখ্যাকে পাঁচ দ্বারা ভাগ করা আসলে খুবই সহজ। এক্ষেত্রে শুধু সংখ্যাটিকে 2 দিয়ে গুণ করে দশমিক পয়েন্টটিকে একঘর সামনে নিয়ে আসলেই উত্তর পেয়ে যাবে:<br>
            যেমন, 195/5 এর ক্ষেত্রে,<br>
            স্টেপ 1: 195 * 2 = 390<br>
            স্টেপ 2: দশমিক স্থানান্তর করো: 39.0 বা 39<br>
            আরেকটি উদাহরণ দেখ, 2978/5<br>
            স্টেপ 1: 2978 * 2 = 5956<br>
            স্টেপ 2: 595.6
        </div>   

            <br>
            
       <div class="card-panel">
           <h5 class="text-center font-weight-bold text-success">1,000 থেকে বিয়োগ</h5>
            1000 থেকে বৃহত সংখ্যাকে বিয়োগ করতে তুমি এই সাধারণ ট্রিকটি ব্যবহার করতে পারো। প্রথম ও দ্বিতীয় অঙ্ককে ৯ থেকে বিয়োগ করে পরপর বসাও এবং শেষ অংকটিকে ১০ থেকে বিয়োগ করে শেষে যুক্ত করো। এটিই হবে নির্ণেয় বিয়োগফল।<br>
            উদাহরণস্বরূপ 1000-648 এর ক্ষেত্রে,<br>
            স্টেপ 1: 9 থেকে 648 এর ১ম অংক 6 বিয়োগ করো = 9 - 6 = 3<br>
            স্টেপ 2: 9 থেকে 648 এর ২য় অংক 4 বিয়োগ করো = 9 - 4 = 5<br>
            স্টেপ 3: 10 থেকে 648 এর শেষ অংক 8 বিয়োগ করো = 10 - 8 = 2<br>
            উত্তর: 352
        
       </div>    
            <br>

        <div class="card-panel">
             <h5 class="text-success text-center font-weight-bold">বিভিন্ন গুণনের বিধি </h5>
            5  দ্বারা গুণ করা : 10 দ্বারা গুণ এবং 2 দ্বারা ভাগ করা।<br>
            6  দিয়ে গুণ করা : কখনও কখনও 3 এবং তারপরে 2 দিয়ে গুণ করা সহজ।<br>
            9  দ্বারা গুণন করা : 10 দ্বারা গুণ করা এবং মূল সংখ্যাটি বিয়োগ করা।<br>
            12 দ্বারা গুণন করা : 10 দ্বারা গুণ করা এবং মূল সংখ্যার দ্বিগুণ করা।<br>
            13 দ্বারা গুণ করা : 3 দিয়ে গুণ করা এবং 10 গুণ মূল সংখ্যা যুক্ত করা।<br>
            14 দ্বারা গুণন করা : 7 দিয়ে গুণ এবং তারপরে 2 দিয়ে গুণ করা<br>
            15 দ্বারা গুণন করা : 10 দ্বারা গুণ করা এবং উপরের হিসাবে মূল সংখ্যাটি থেকে 5 গুণ যুক্ত করা।<br>
            16 দ্বারা দ্বারা গুণ করা : তুমি চাইলে চারবার দ্বিগুণ করতে পারো। অথবা তুমি 8 এবং তারপরে 2 দিয়ে গুণ করতে পারো।<br>
            17 দ্বারা গুণ করা : 7 দ্বারা গুণ করা এবং 10 গুণ মূল সংখ্যা যুক্ত করা।<br>
            18 দ্বারা গুণন করা : 20 দ্বারা গুণ করা এবং মূল সংখ্যা দ্বিগুণ করা (যা প্রথম পদক্ষেপ থেকে স্পষ্ট)।<br>
            19 দ্বারা গুণন করা : 20 দ্বারা গুণ করা এবং মূল সংখ্যাটি বিয়োগ করা।<br>
            24 দ্বারা গুণ করা : 8 দিয়ে গুণ করা এবং তারপরে 3 দিয়ে গুণ করা।<br>
            27 দ্বারা গুণ করা : 30 দ্বারা গুণ করা এবং মূল সংখ্যাটির 3 গুণ বিয়োগ করা (যা প্রথম পদক্ষেপ থেকে স্পষ্ট)।<br>
            45 দ্বারা গুণন করা : 50 দ্বারা গুণ করা এবং আসল সংখ্যাটির 5 গুণ বিয়োগ করা (এটি প্রথম ধাপ থেকে সুস্পষ্ট)।<br>
            90 দ্বারা গুণ করা : 9 দ্বারা গুণ (উপরে হিসাবে) এবং ডানদিকে একটি শূন্য রাখ।<br>
            98 দ্বারা গুণ করা : 100 দ্বারা গুণ করা এবং আসল সংখ্যার দ্বিগুণ করা।<br>
            99 দ্বারা গুণ করা : 100 দ্বারা গুণ করা এবং মূল সংখ্যাটি বিয়োগ করা।

        </div>
           <br>
        
        <div class="card-panel">
              <h5 class="font-weight-bold text-success text-center">শতাংশ </h5>
            300 এর 7% সন্ধান করো। কঠিন মনে হচ্ছে?<br>
            পার্সেন্টস: সবার আগে তোমাকে "শতাংশ" শব্দটি বুঝতে হবে। PERSENT এর প্রথম অংশটি PER, তালিকাভুক্ত পৃষ্ঠায় 10 টি করে কৌশল হিসাবে। PER = FOR EACH ।  দ্বিতীয় অংশটি হল CENT, 100 এর মধ্যে। যেমন শতাব্দী = 100 বছর। 1 ডলারের মধ্যে 100 সেন্টস ... ইত্যাদ।... তাই PERCENT = For Each 100. (প্রতি ১০০ এর মধ্যে)<br>
            সুতরাং, এটি বোঝায় যে 100 টির মধ্যে 7 টি র্সেন্ট।<br>
            8% of 100 = 8 তেমনিভাবে 35.73% of 100 = 35.73<br>
            তবে কীভাবে এটি কাজে লাগবে ??<br>
            300 এর 7% বের করার প্রশ্নে আসা যাক। ১ম 100% এর 7% হলো 7, ২য় শতাংশের 7% ও হল 7, এবং হ্যাঁ, তৃতীয় শতাংশেরও 7.. সুতরাং 7+7+7 = 21<br>
            আরো কিছু উদাহরণ:<br>
            8% of 200 = 8 + 8 = 16<br>
            8% of 250 = 8 + 8 + 4 = 20<br>
            8% of 25 = 2.0 (দশমিক পিছনে সরানো)।<br>
            15% of 300 = 15 + 15 + 15 = 45<br>
            15% of 350 = 15 + 15 + 15 + 7.5 = 52.5 

        </div>
        
          <br>
</div>
</body>
 
     <!--Footer -->
      
        <footer class="page-footer  teal darken-2">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h4 class="white-text">  <b>HSC-dojo</b>  </h4>
                  <p class="grey-text  text-lighten-4">We have arranged high-quality education materials. They will help you to 
                      get better grasp within minutes. And guess what! They are 
                      absolutely free!! <br>
                      We are constantly working to enrich the blog section. <br>
                      Support our journey.  <i class="material-icons ">favorite</i>
                      
                  </p>
                </div>
                <div class="col l4 offset-l2 s12">
                 
                  <ul>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.instagram.com/hscdojo"><i class="fa fa-instagram"></i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.facebook.com/hscdojo?subject=Inquiry to HSC-dojo"><i class="fa fa-facebook"></i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://wa.me/8801838660303"><i class="fa fa-whatsapp"></i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.facebook.com/hscdojo"><i class="material-icons">message</i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="mailto:hscdojo.bd@gmail.com?subject=Website Inquiry"><i class="material-icons">mail</i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.youtube.com/channel/UCc0C7a3xN1vIBl80GiTUrFQ"><i class="fa fa-youtube"></i></a></li> <br>

                  </ul>

                </div>
              </div>
            </div>
            <div class="footer-copyright white-text">
              <div class="container">
              © 2020 All Rights Reserved By Studio T
              
              </div>
            </div>
          </footer>
     <script>
               document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('.sidenav');
              var instances = M.Sidenav.init(elems);
                });

     </script>
              
      <!--JavaScript at end of body for optimized loading-->
      
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!-- Bootstrap script -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>
  </html>