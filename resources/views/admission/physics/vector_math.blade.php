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
            <div class="card">
                <div class="card-header text-success"> <h2 >Vector</h2></div>
               <div class="card-body">
                <h4 class="text-bold text-primary">গাণিতিক সমস্যা</h4>
                

<div class="card border-success w-100">
@foreach ($maths as $math)
    
<div class="card-body">
    <small class="font-weight-bold text-danger"> {{$math->tag}}</small>

<h5 class="card-text text-success text-bold">{!!$math->question!!}</h5>

@csrf 
  <div class=" row">
 <input type="text" placeholder="Put The significant here..." autocomplete="off" id="myInput">
 <h3>\(\times\)</h3>
 <h3> 10 <sup>{{$math->power}}</sup> </h3>
 <h3>{!!$math->unit!!}</h3>
 </div> <br>
 
<button type="button" class="btn btn-success" onclick="getInputValue()">Check Answer</button>
<strong class="text-danger">(up to 5% error is accepted)</strong>
</div>
</div><br>
<h2 class="card-text text-primary text-bold" id ="math">Result: </h2>

</div>


<script>
 function getInputValue(){
  
  x = document.getElementById("myInput").value;
  
  a={{$math->significant}};
  b=a-(a*0.05);
  c=a+(a*0.05);
  if(a== Number(x) ){
  document.getElementById("math").innerHTML= "Result: Correct";}
  
  else if(a>Number(x) && Number(x)>= b){
  document.getElementById("math").innerHTML= "Result: Correct";}
  
  else if(a<Number(x) && Number(x) <=c){
  document.getElementById("math").innerHTML= "Result: Correct";}
  
  else{document.getElementById("math").innerHTML= "Result: Inorrect";}
   }
  </script>
  
@endforeach


</div> 
{{$maths->links()}}
        
    
              
            

            </div>
        </div>
    </div>
</div>
</div> 
@endsection