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
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/g8yGxDMyGiE"  frameborder="0" allow="accelerometer; 
                autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr> <br>
                <h4 class="text-bold text-primary">বহুনির্বাচনী প্রশ্ন</h4>
            <div class="card">
                
                
               <div class="card-body">
                <div class="card-header text-success"> <h2 > Vector</h2></div>
                @foreach($mcqs as $mcq)
                   <div class="card border-success w-100">
                       <div class="card-body">
                       <small class="text-danger font-weight-bold"> {{$mcq->tag}}</small>
                        <h3 class="card-text text-success text-wrap ">{!!$mcq->question!!}</h3>
                        <div id="options">
                           @csrf
                           
                           <input type="radio" id="r1" name="rate" value="A"> {{$mcq->A}} <br>
                           <input type="radio" id="r2" name="rate" value="B"> {{$mcq->B}} <br>
                           <input type="radio" id="r3" name="rate" value="C"> {{$mcq->C}} <br>
                           <input type="radio" id="r4" name="rate" value="D"> {{$mcq->D}} <br>
                           <p><button onclick="Check()" class="btn btn-success"> Submit</button>
                        </div>
                       </div>
                   </div> 
                   <h2 class="card-text text-primary text-bold" id ="mcq">Result: </h2>
                    
                     </div>
                   <script>
                       function Check() {
                          if (document.getElementById('r1').checked) {
                         x = document.getElementById('r1').value;
                       }
                       else  if (document.getElementById('r2').checked) {
                          x = document.getElementById('r2').value;
                       } 
                       else  if (document.getElementById('r3').checked) {
                          x = document.getElementById('r3').value;
                       } 
                       else  if (document.getElementById('r4').checked) {
                          x = document.getElementById('r4').value;
                       } 
                       
                       switch(x){
                       case "A":
                        if(x!="{{$mcq->CorrectAnswer}}") {document.getElementById('mcq').innerHTML="Result: Incorrect";}
                                          
                        else {document.getElementById('mcq').innerHTML="Result: Correct";}
                        break;
                        case "B":
                        if(x!="{{$mcq->CorrectAnswer}}") {document.getElementById('mcq').innerHTML="Result: Incorrect";}
                                          
                        else {document.getElementById('mcq').innerHTML="Result: correct";}
                        break;
                        case "C":
                        if(x!="{{$mcq->CorrectAnswer}}") {document.getElementById('mcq').innerHTML="Result: Incorrect";}
                                          
                        else {document.getElementById('mcq').innerHTML="Result: correct";}
                        break;
                        case "D":
                        if(x!="{{$mcq->CorrectAnswer}}") {document.getElementById('mcq').innerHTML="Result: Incorrect";}
                                          
                        else {document.getElementById('mcq').innerHTML="Result: correct";}
                        break;
                     
                       }
                     
                       }
                     </script>
                @endforeach
              {{$mcqs->links()}} 
            

            </div>
        </div>
    </div>
</div>
</div> 
@endsection