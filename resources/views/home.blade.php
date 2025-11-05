@extends('layouts.app_top')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <!--Payment-->


                <a class="btn waves-effect waves-light black white-text" href="/waiting_list"> <i
                        class=" material-icons left white-text">receipt</i>Payment Status</a>


                <!--Payment-->
                <hr style="height:2px;border-width:0;color:gray;background-color:black">
                <h1 class="text-center font-weight-bold" style="color: green; font-family:Comic Sans MS;">
                    {{ auth::user()->name }}
                </h1>
                <hr style="height:2px;border-width:0;color:gray;background-color:black">
                <P class="bottom-three"></P>
                <!--Subscribed Course-->

                <div class="card-panel">
                    <h5><i>Your ID: </i>202111{{ auth::user()->id }}</h5>
                    <hr>
                    <i> Your Subscribed Courses are</i> <br> <br>
                    @if (auth::user()->status == 'active')
                        <h4 class="text-info">Online Admission Test Program</h4>
                    @elseif(auth::user()->status=="admission")
                        <h4 class="text-info">Offline Admission Test Program</h4>
                    @elseif(auth::user()->status=="both")
                        <h4 class="text-info">
                            <ol>
                                <li>Crash Course</li>
                                <li>Admission</li>
                            </ol>
                        </h4>
                    @else <h4 class="text-info">
                            You have not subscribed to any course yet. Please make payment and
                            attend your desired course
                        </h4>
                    @endif
                </div>
                <hr>
                <p class="bottom-three"></p>

                <section class="section section-icons grey lighten-2">
                    <div class="container">
                        <h2 style="font-family: Comic Sans MS; font-weight: bold">eNotes</h2>
                        <div class="row">
                            <div class="col s12 m4">
                                <img src="image/brand/eNotes.png" height="280" alt="Crash Course">
                            </div>

                            <div class="col s12 m4">
                                <h5 style="text-align:left; font-family:Comic Sans MS">
                                    বিষয় ভিত্তিক একাধিক বই? বুঝতে পারছ না কতটুকু "নিম্ন পক্ষে" জানা উচিত?<br>
                                    Try our "eনোট" !!
                                </h5>
                                <h5 style="color: red"> It is toally free !! All you need is to sign up with an email id.
                                </h5>
                                <small> We are making great content every day. We will inform you with every update!</small>
                                <hr>
                                <a href="{{ route('Blog List') }}" class="btn btn-rounded">Go</a>

                            </div>


                        </div>
                    </div>

                </section>
                <p class="bottom-three"></p>

              
                <!-- Section : Crash Course -->
                <section class="section section-icons " style="background-color:lightblue">
                    <div class="container">
                        <h2 style="font-family: Comic Sans MS; font-weight: bold;">Online Admission Preparation Program</h2>
                        <div class="row">
                            <div class="col s12 m4">
                                <img src="image/brand/online.png" height="280" alt="Crash Course">
                            </div>

                            <div class="col s12 m4">
                                <ol style="list-style-type:square;">
                                    <li>Online Scheduled Exams and careful script assessment</li>
                                    <li>Expert and Highly Experienced Guidance</li>
                                    <li>Solution Video on the Same day of the Exam</li>
                                    <li>Total 12300 marks !!! </li>
                                    <li>7 Special Live Classes</li>
                                    <li>Final Suggestion</li>
                                    <li>Special Model test arrangements for Medical Exams</li>
                                    <li>BUET, DU, Medical and Other public university preparation at one place</li>
                                </ol>
                                @if (auth::user()->status == 'active' || auth::user()->role == 'admin')
                                    <a href="{{ route('online') }}" class="btn ">Go</a>
                               
                                @else
                                    <a class="btn " href="{{ route('payment') }}"> Payment</a>
                              
                                    <span style="text-decoration: none;color:green"> BDT 2000 </span>
                                @endif

                            </div>

                        </div>
                    </div>

                </section>

                <p class="bottom-three"></p>

                <!-- Section: Admission -->

                <section class="section section-icons  grey lighten-5">
                    <div class="container">
                        <h2 style="font-family: Comic Sans MS; font-weight: bold">Offline Admission Preparation Program</h2>
                        <div class="row">
                            <div class="col s12 m4">
                                <img src="image/brand/no-wifi.png" height="280" alt="Crash Course">
                            </div>

                            <div class="col s12 m4">
                                <ol style="list-style-type:square;">
                                   <li>Offline Scheduled Exams and careful script assessment</li>
                                    <li>Expert and Highly Experienced Guidance</li>
                                    <li>Solution Video on the Same day of the Exam</li>
                                    <li>Total 12300 marks !!! </li>
                                    <li>7 Special Live Classes</li>
                                    <li>Final Suggestion</li>
                                    <li>Special Model test arrangements for Medical Exams</li>
                                    <li>BUET, DU, Medical and Other public university preparation at one place</li>
                                </ol>
                                @if(auth::user()->status=="admission" || auth::user()->role == 'admin')
                                    <a class="btn btn-outline-dark" href="{{ route('Admission') }}"> Go</a>
                              
                                @else
                                    <a class="btn btn-outline-dark" href="{{ route('payment') }}"> Payment</a>
                                    <span style="text-decoration: none;color:green"> BDT 3500 </span>
                                @endif

                            </div>

                        </div>
                    </div>

                </section>










                <p class="bottom-three"></p>

                <h1 style="font-family:Comic Sans MS; font-weight:bold">FOUNDERS</h1>

                <!--images-->
                <div class="card-deck">
                    <!-- Turjo -->
                    <div class="col s12 ">
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row valign-wrapper">
                                <div class="col s2">
                                    <img src="image/brand/turjo.jpg" alt="" class="circle " height="150">
                                    <!-- notice the "circle" class -->
                                </div>
                                <div class="col s10">
                                    <span class="black-text">
                                        <h5> Nur-A-Jaman Turjo</h5>
                                        <i>BUET-10 (EEE)</i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ABM-->
                    <div class="col s12 ">
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row valign-wrapper">
                                <div class="col s2">
                                    <img src="image/brand/ashik.jpg" alt="" class="circle " height="150">
                                    <!-- notice the "circle" class -->
                                </div>
                                <div class="col s10">
                                    <span class="black-text">
                                        <h5>ABM Ashik</h5>
                                        <i>BUET-08 (Civil)</i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <p class="bottom-three"></p>
                <!-- End of image-->
                <blockquote>
                    Hi !! Thank You for being a part of our extended family!!
                    We know the pressure on you is enormous. But you know what,
                    you have come to the right place.
                    Around decades we have been mentoring at Admission and HSC
                    level and have helped thousands of students to achieve
                    their goals including many toppers of the prominent universities
                    around Bangladesh. <br>
                    We are ready to guide you all way to your long cherished dream.
                    (نْ شَاءَ ٱللَّٰهُ‎, ʾin šāʾ -llāh)
                </blockquote>


                <!-- end of quote-->
                <p class="bottom-three"></p>
            </div>
        </div>
    </div>
@endsection
