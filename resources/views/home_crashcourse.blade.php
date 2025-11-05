@extends('layouts.app_top')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (auth::user()->role == 'admin')
                    <div class="card-panel">
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('message') }}
                            </div>
                        @else <article class="text-info font-weight-bold" style="font-family: Verdana;color:teal">
                                Notification Panel</article>
                        @endif
                    </div>

                @endif

                @if (auth::user()->role == 'admin' || auth::user()->version == 'Bangla')
                    <a class="btn waves-effect waves-light blue darken-3 white-text"
                        href="{{ route('Exam Center Bangla') }}"> <i class=" material-icons left white-text">edit</i> Exam
                        Center</a>
                    <hr noshade="Noshade">
                @endif

                @if (auth::user()->role == 'admin' || auth::user()->version == 'English')
                    <a class="btn waves-effect waves-light blue darken-3 white-text"
                        href="{{ route('Exam Center English') }}"> <i class=" material-icons left white-text">edit</i> Exam
                        Center</a>
                    <hr noshade="Noshade">
                @endif
                <!--New addition-->
                <div class="row">
                    <div class="col">
                        <a class="btn waves-effect waves-light black white-text pulse" href="{{ route('payment') }}"> <i
                                class=" material-icons left white-text">attach_money</i>Payment</a>
                    </div>
                    <div class="col">
                        <a class="btn waves-effect waves-light black white-text" href="/waiting_list"> <i
                                class=" material-icons left white-text">receipt</i>Payment Status</a>
                    </div>
                </div>

                <!--end new addition-->
                <div class="card">
                    <div class="card-header">
                        <h1 class="font-weight-bold text-dark text-center" style="font-family: Comic Sans MS">Crash Course
                        </h1>
                    </div>

                    <div class="card-body">

                        <h4 style="color: teal; font-family:Comic Sans MS">
                            {{ auth::user()->name }}
                        </h4>


                      <!-- Admin pannel -->
                        @if (auth::user()->role == 'admin')
                            <h5 class="text-success">Hello Admin, Lets Work!</h5>
                            <div class="row-cols-2">
                                <a href="{{ route('Posts.create') }}" class="btn btn-primary">Create Post</a>

                            </div>
                            <hr style="height:2px;border-width:0;color:gray;background-color:green">
                        @endif

                        <!-- Database Maintainer Pannel -->
                        @if (auth::user()->role == 'admin' || auth::user()->role == 'maintainer')
                            <h5 class="text-success">Hello Maintainer, Lets Work!</h5>

                            <a href="/block" class="btn btn-primary">User Management</a>
                            <a href="/Submissions" class="btn btn-primary">Submission List</a>

                            <hr style="height:2px;border-width:0;color:gray;background-color:green">
                        @endif

                        <!-- User Pannel-->
                        <h5 class=" font-weight-bold" style="color:black">Let's get busy with learning.</h5>
                        <hr>
                        <p class="bottom-three"></p>


                        <h3 class=" font-weight-bold "> <i class="prefix material-icons red-text">local_library</i> What
                            about some practice?</h3>
                        <div class="card-deck">
                            <div class="card  border-success black-text mb-3" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title black-text font-weight-bold">Physics</h5>

                                    <!-- HSC PHYSICS PRACTICE -->

                                    <p class="card-text font-weight-bold" style="font-family: Comic Sans MS">Learn and
                                        practice Physics at your own pace</p>
                                    @if (auth::user()->role == 'admin' || auth::user()->version == 'Bangla')
                                        <a href="{{ route('Physics Bangla') }}" class="btn black white-text">Let's Go</a>
                                    @endif
                                    @if (auth::user()->role == 'admin' || auth::user()->version == 'English')
                                        <a href="{{ route('Physics English') }}" class="btn black white-text">Let's Go</a>
                                    @endif

                                </div>
                            </div>
                            <div class="card border-danger  mb-3" style="width: 18rem;">

                                <div class="card-body">
                                    <h5 class="card-title black-text font-weight-bold">Higher Math</h5>
                                    <p class="card-text font-weight-bold" style="font-family: Comic Sans MS">Learn and
                                        practice Higher Mathematics at your own pace</p>

                                    <!-- HSC MAthematics PRACTICE -->

                                    @if (auth::user()->role == 'admin' || auth::user()->version == 'Bangla')
                                        <a href="{{ route('Math Bangla') }}" class="btn black white-text">Let's Go</a>
                                    @endif
                                    @if (auth::user()->role == 'admin' || auth::user()->version == 'English')
                                        <a href="{{ route('Math English') }}" class="btn black white-text ">Let's Go</a>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <p class="bottom-three"></p>
                        <h4 style="color: #4a148c; font-family: Comic Sans MS"><i
                                class="prefix material-icons">local_airport</i> Get all the Physics Practice tools <a
                                href="/Physics_bangla_tools">here</a> </h4>
                        <p class="bottom-three"></p>
                        <hr>
                        <p class="bottom-three"></p>
                        <h3 class="black-text font-weight-bold"> <i class="prefix material-icons red-text">forum</i> Have
                            questions? Your Mentors are always by your side.Tell us what's in your mind</h3>
                        <div class="card border-info w-85">
                            <div class="card-body">
                                <h5 class="card-title teal-text font-weight-bold" style="font-family: Comic Sans MS">Forum
                                </h5>

                                <!-- Forum -->
                                <ul class="collection">
                                    <li class="collection-item">Decency</li>
                                    <li class="collection-item">Mutual Respect </li>
                                    <li class="collection-item">Keep the Community Clean</li>
                                    <li class="collection-item">Look For other's Answers</li>
                                </ul>

                                <hr>

                                <a href="{{ route('forum.index') }}" class="btn black white-text">Let's Go to Forum</a>

                            </div>
                        </div>
                        <p class="bottom-three"></p>
                        <hr>
                        <p class="bottom-three"></p>
                        <!-- Weekly Activity -->
                        <h3 class=" font-weight-bold"> <i class="prefix material-icons red-text">whatshot</i> Time to attend
                            weekly activities</h3>
                        <div class="card-deck">
                            <div class="card  mb-3 border-success" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title  font-weight-bold">Physics</h5>

                                    <!--Physics post-->

                                    <p class="card-text font-weight-bold" style="font-family: Comic Sans MS">Attend your
                                        weekly activity </p>
                                    @if (auth::user()->role == 'admin' || auth::user()->version == 'Bangla')
                                        <a href="{{ route('Physics Post Bangla') }}" class="btn black white-text">Let's
                                            Go</a>
                                    @endif
                                    @if (auth::user()->role == 'admin' || auth::user()->version == 'English')
                                        <a href="{{ route('Physics Post English') }}" class="btn black white-text">Let's
                                            Go</a>
                                    @endif
                                </div>
                            </div>
                            <div class="card  mb-3 border-danger" style="width: 18rem;">

                                <div class="card-body">
                                    <h5 class="card-title black-text font-weight-bold">Higher Math</h5>
                                    <p class="card-text font-weight-bold" style="font-family: Comic Sans MS">Attend your
                                        weekly activity </p>
                                    <!-- MATH POST -->
                                    @if (auth::user()->role == 'admin' || auth::user()->version == 'Bangla')
                                        <a href="{{ route('Math Post Bangla') }}" class="btn black text-white">Let's Go</a>
                                    @endif
                                    @if (auth::user()->role == 'admin' || auth::user()->version == 'English')
                                        <a href="{{ route('Math Post English') }}" class="btn black text-white">Let's Go</a>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <p class="bottom-three"></p>
                        <hr>
                        <p class="bottom-three"></p>
                        <!-- Content Library -->
                        <h3 class="font-weight-bold  ">
                            <i class="prefix material-icons "> folder</i> Content Library
                        </h3> <br>

                        <!--Bangla Version -->
                        @if (auth::user()->role == 'admin' || auth::user()->version == 'Bangla')
                            <ul>
                                <li><a class="btn-floating btn-large teal"
                                        href="{{ route('Content Library Bangla Video') }}"> <i
                                            class="material-icons">ondemand_video</i></a> <br> <b
                                        style="font-family: Comic Sans MS"> Video Lesson</b> </li> <br>
                                <li><a class="btn-floating btn-large red" href=" {{ route('Content Library Bangla pdf') }}">
                                        <i class="material-icons">picture_as_pdf</i></a> <br> <b
                                        style="font-family: Comic Sans MS"> pdf Lesson</b> </li> <br>
                                <li><a class="btn-floating btn-large green accent-3"
                                        href="{{ route('Content Library Bangla Solve') }}"> <i
                                            class="material-icons">rate_review</i></a> <br> <b
                                        style="font-family: Comic Sans MS"> Exam Solution</b> </li> <br>

                            </ul>
                        @endif
                        <!-- English Version -->
                        @if (auth::user()->role == 'admin' || auth::user()->version == 'English')
                            <ul>
                                <li><a class="btn-floating btn-large teal"
                                        href="{{ route('Content Library English Video') }}"> <i
                                            class="material-icons">ondemand_video</i></a> <br> <b
                                        style="font-family: Comic Sans MS"> Video Lesson</b> </li> <br>
                                <li><a class="btn-floating btn-large red" href="{{ route('Content Library English pdf') }}">
                                        <i class="material-icons">picture_as_pdf</i></a> <br> <b
                                        style="font-family: Comic Sans MS"> pdf Lesson</b> </li> <br>
                                <li><a class="btn-floating btn-large green accent-3"
                                        href="{{ route('Content Library English Solve') }}"> <i
                                            class="material-icons">rate_review</i></a> <br> <b
                                        style="font-family: Comic Sans MS"> Exam Solution</b> </li> <br>

                            </ul>
                        @endif




                        <p class="bottom-three"></p>
                        <hr>


                        <p class="bottom-three"></p>




                        <p class="bottom-three"></p>

                        <h3 class=" font-weight-bold"> <i class="prefix material-icons">timeline</i> Timeline</h4>
                            <p>Let's see what your mentors want you do this week</p>

                            <!--Timeline Post-->

                            @if (count($timelines) > 0)
                                @foreach ($timelines as $timeline)
                                    <div class="card-panel w-100">
                                        <div class="card-title font-weight-bold " style="font-family: Comic Sans MS">
                                            <h5>{{ $timeline->title }} </h5>
                                        </div>
                                        <div class="card-body text-primary">
                                            <p class="card-text">{!! $timeline->body !!} </p>
                                        </div>
                                        <small> Posted at: {{ $timeline->created_at }}</small>

                                        @if (auth::user()->role == 'admin')
                                            <div class="card-footer  border-primary">
                                                <div class="row">
                                                    <div class="col-5">

                                                    </div>

                                                    <div class="col-3">
                                                        <a href="/Posts/{{ $timeline->id }}/edit" class="btn btn-primary">
                                                            EDIT Post</a>
                                                    </div>
                                                    <div class="col-3">
                                                        <form action="/Posts/{{ $timeline->id }}" method="POST">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <button class="btn btn-warning" type="submit">DELETE Post
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        @endif

                                    </div>
                                    <hr style="height:2px;border-width:0;color:gray;background-color:blue">
                                @endforeach
                            @else
                                <h4 class="text-danger">No Posts Yet</h4>
                            @endif

                            <!--Timeline English Medium -->


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
