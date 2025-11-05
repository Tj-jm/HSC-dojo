@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="row">
                
                    <div class="col align-self-start">
                      <a class="btn btn-primary" href="{{('home_admission')}}">Go To Home</a> 
                    </div>
                    <div class="col align-self-center">
                       <a class="btn btn-primary" href="{{url('/blog_list')}}">Go To Lessons</a> 
                     </div>
                    <div class="col align-self-end">
                        <a class="btn btn-primary" href="{{url('/Practice_List_Physics')}}">Lecture List</a>
                    </div>
                </div> <hr>
                
                <hr> <br>
                
            <div class="card">
                <div class="card-header text-center font-weight-bold  text-success"> <h2 > Vector</h2></div>

               <div class="card-body">
                   <h4 class="test-center font-weight-bold">Recap Tutorials</h4>
                   <small class="text-info"> Here we hold your hands and walk you trough all the necessary aspects of the chapter</small>
                
               </div>

            </div>
        </div>
    </div>
</div>
</div> 
@endsection