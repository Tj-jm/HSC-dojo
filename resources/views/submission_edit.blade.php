@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header text-success"> <h2 > Edit Your Submission</h2></div>
               <div class="card-body">
                <form action="/Submissions/{{$submission->id}}" method="POST">
                    @method('PUT')
                    @csrf
              
                    <label for="phone" class="text-success font-weight-bold">Telephone</label><br>
                    <input class="col-5" type="tel" id="phone" name="phone" placeholder="01XXX NNNNNN" value="{{$submission->phone}}"  required><hr>

                    <label for="method" class="text-success font-weight-bold">Select Your Payment Method</label><br>
                    <select name="method" class="col-5" id="method" >
                      <option ></option>
                      <option value="bKash" class="list-group-item list-group-item-primary">bKash</option>
                      <!-- 
                     <option value="Rocket" class="list-group-item list-group-item-primary">Rocket</option>  -->
                      <option value="Nogod" class="list-group-item list-group-item-primary">নগদ</option>
                   
                      
                    </select> <br>
                    
                    @error('method')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('method')}} 
                    </div>
                    @enderror 
                    
                    <hr>
                    <label for="TrXId" class="text-success font-weight-bold" required >TrXID</label><br>
                    <input class="col-5" type="text" id="TrXId" name="TrXId" placeholder="Give Transaction Id" value="{{$submission->bkash}}" required><hr>
                  
                   

                    <label for="apply" class="text-success font-weight-bold">Select Submission Type</label><br>
                    <select name="apply" class="col-5" id="req">   
                      <option ></option>
                      <option value="New Admission" >Offline Exam (BDT 3500)</option>
                      <option value="Renewal Admission" >Online Exam (BDT 2000)</option>
                      
                    </select> 
                    <br>
                    
                    @error('apply')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('apply')}}  
                    </div> <br>
                    @enderror 
                    
                    
                    <hr style="height:2px;border-width:0;color:gray;background-color:green">
                    <input type="submit" class="btn btn-success" value="EDIT">
                
                </form>
               </div>
            </div>
        </div>
    </div>
</div> 
 @endsection