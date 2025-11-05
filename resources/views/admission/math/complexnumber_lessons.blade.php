@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">

                    <div class="col align-self-start">
                        <a class="btn btn-primary" href="{{ 'home_admission' }}">Go To Home</a>
                    </div>
                    <div class="col align-self-center">
                        <a class="btn btn-primary" href="{{ url('/blog_list') }}">Go To Lessons</a>
                    </div>
                    <div class="col align-self-end">
                        <a class="btn btn-primary" href="{{ url('/Practice_List_Math') }}">Lecture List</a>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-header text-center font-weight-bold  text-success">
                        <h2>Complex Number</h2>
                    </div>

                    <div class="card-body">
                        <h4 class="test-center font-weight-bold">Recap Tutorials</h4>
                        <small class="text-info"> Here we hold your hands and walk you trough
                            all the necessary aspects of the chapter. In the process
                            we help you solve all the important problems of every prominent textbooks.
                        </small>

                    </div>
                    <div class="lesson 1 card">
                        <h4 class="text-center" style="color:white;background-color:grey">
                            Lesson 1
                        </h4>
                        <h5 class="font-wight-bold text-danger">Password:mathadmission</h5> <br>
                        <iframe src="https://player.vimeo.com/video/459858253" width="640" height="100%" frameborder="0"
                            allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div> <br>
                    <div class="lesson 2 card">
                        <h4 class="text-center" style="color:white;background-color:grey">
                            Lesson 2
                        </h4>
                        <h5 class="font-wight-bold text-danger">Password:mathadmission</h5> <br>
                        <iframe src="https://player.vimeo.com/video/459869048" width="640" height="100%" frameborder="0"
                            allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div> <br>
                    <div class="lesson 3 card">
                        <h4 class="text-center" style="color:white;background-color:grey">
                            Lesson 3
                        </h4>
                        <iframe src="https://player.vimeo.com/video/460439006" width="640" height="100%" frameborder="0"
                            allow="autoplay; fullscreen" allowfullscreen></iframe>

                    </div> <br>
                    <div class="lesson 4 card">
                        <h4 class="text-center" style="color:white;background-color:grey">
                            Lesson 4
                        </h4>
                        <h5 class="font-wight-bold text-danger">Password:mathadmission</h5><br>
                        <iframe src="https://player.vimeo.com/video/459835114" width="640" height="100%" frameborder="0"
                            allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div> <br>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
