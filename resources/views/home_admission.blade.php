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

              <!--  @if (auth::user()->status == 'admission' || auth::user()->status == 'both')
                    <a class="btn waves-effect waves-light blue darken-3 white-text"
                        href="{{ route('Exam Center Bangla') }}"> <i class=" material-icons left white-text">edit</i> Exam
                        Center</a>
                    <hr noshade="Noshade">
                @endif -->


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
                        <h1 class="font-weight-bold text-dark text-center" style="font-family: Comic Sans MS">Offline Examination Program 2021</h1>
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
                        <h5 class=" font-weight-bold text-center" style="color:black">Let's ace out admission</h5>
                 
                        <p class="bottom-three"></p>


                        <!-- Physics -->

                        <div class="card  border-success black-text ">
                            <div class="card-body">
                                <h5 class="card-title black-text font-weight-bold">Offline Preparation Exams</h5>

                                <p class="card-text font-weight-bold" style="font-family: Comic Sans MS">Find Solve Tutorials on the same day of Exams</p>

                                <!--Bangla Version -->
                                @if (auth::user()->role == 'admin' || auth::user()->version == 'Bangla')

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><a class="btn-floating btn-large teal"
                                                        href="{{ route('PhysicsAdmissionVideoBangla') }}"> <i
                                                            class="material-icons">straighten</i></a> <br> <b
                                                        style="font-family: Comic Sans MS">Physics</b> </td>
                                                <td><a class="btn-floating btn-large red"
                                                        href=" {{ route('MathAdmissionVideoBangla') }}"> <i
                                                            class="material-icons">functions</i></a> <br> <b
                                                        style="font-family: Comic Sans MS">Mathematics</b> </td>
                                                <td><a class="btn-floating btn-large green accent-3"
                                                        href="{{ route('ChemistryAdmissionVideoBangla') }}"> <i
                                                            class="material-icons">format_color_fill</i></a> <br> <b
                                                        style="font-family: Comic Sans MS"> Chemistry</b></td>
                                                <td><a class="btn-floating btn-large orange accent-3"
                                                        href="{{ route('PhysicsAdmissionpdfBangla') }}"> <i
                                                            class="material-icons">accessibility</i></a> <br> <b
                                                        style="font-family: Comic Sans MS"> Biology</b></td>
                                            </tr>
                                            <tr>
                                                <td><a class="btn-floating btn-large black accent-3"
                                                        href="{{ url('/Physics_bangla_tools') }}"> <i
                                                            class="material-icons">fitness_center</i></a> <br> <b
                                                        style="font-family: Comic Sans MS">Practice</b></td>
                                                <td><a class="btn-floating btn-large blue accent-3"
                                                        href="{{ url('/routine') }}"> <i
                                                            class="material-icons">schedule</i></a> <br> <b
                                                        style="font-family: Comic Sans MS">Routine</b></td>

                                            </tr>
                                        </tbody>
                                    </table>

                                @endif


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endsection
