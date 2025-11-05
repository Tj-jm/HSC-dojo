@extends('layouts.app_top')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn-floating btn-large blue" href="{{route('home')}}"> <i class=" fa fa-home"></i> </a>
            <div class="card-panel ">
                <div class="card-title text-center "> 
                    <h3 class="font-weight-bold  text-success" style="font-family: Comic Sans MS"> <i class="prefix material-icons">attach_money</i>Payment</h3>
                    <strong class="text-info ">We are glad to have you in our family!!</strong>
                </div>

                    <div class="card-body">
                     <p style="color: black; font-family: Verdana;text-align:left">
                        To enjoy all the premium features, lectures, exam and many more,
                         please follow the steps below
                     </p> 

                     <ul class="collection">
                        <li class="collection-item"  style="font-family: Comic Sans MS">Send Money to the given number (personal)</li>
                        <li class="collection-item" style="font-family: Comic Sans MS">Grab TrxID</li>
                        <li class="collection-item" style="font-family: Comic Sans MS">Put required fields in the form below and hit enter</li>
                        <li class="collection-item" style="font-family: Comic Sans MS">Wait until we send you confirmation mail.</li>
                        <li class="collection-item" style="font-family: Comic Sans MS">Meanwhile you can check status or edit your submission .</li>
                        <li class="collection-item" style="font-family: Comic Sans MS">For any issue directly call or e-mail us</li>
                        <li class="collection-item" style="font-family: Comic Sans MS">Thank You</li>
                      </ul> 
                     
                      <p class="bottom-three"></p>
                       
                      <div class="card-panel">
                        <div class="card-title green-text"> <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS" > Transaction Id Submission Form </h2>
                            <p class="text-danger font-weight-bold text-center ">After Sending Tk 3500 for offline exam or Tk 2000 for online Exam
                                 to the number 01838660303 (Personal Number), fill the following fields and press submit </p>
                            <hr style="height:2px;border-width:0;color:gray;background-color:green">
                        </div>
                       <div class="card-body">
                           
                           <br>
                           <form action="/Submissions" method="POST" >
                            @csrf
                       
                            <!--phone-->
                            <div class="input-field">
                                <i class="material-icons prefix">contact_phone</i>
                                <input  type="tel" id="phone" name="phone" value="{{old('phone')}}" placeholder="01XXX NNNNNN"  required>
                                <label for="phone" class="text-success font-weight-bold">  Telephone</label> <br> <br>
                            </div>
        
                            <!-- method -->
                            <div class="input-field "> 
                            <i class="material-icons prefix">credit_card</i>
                             <select name="method" id="method" >
                                <option ></option>
                                <option value="bKash">bKash</option>
                                <!--
                                  <option value="Rocket">Rocket</option>-->
                                <option value="Nogod">নগদ</option>
  
                              
                             </select> 
                                  <label for="method" class="text-success font-weight-bold "> 
                                       Select Your Payment Method</label>
                            </div>
                           
                            
                            @error('method')
                            <div class="alert alert-danger" role="alert">
                            {{$errors->first('method')}} 
                            </div>
                            @enderror 
                            <br>
                            <!--TrXId-->
                            <div class="input-field "> 
                                <i class="material-icons prefix">attach_money</i>                   
                                <input  type="text" id="TrXId" name="TrXId" value="{{old('TrXId')}}" placeholder="Give Transaction Id" required>
                                <label for="TrXId" class="text-success font-weight-bold" required >  TrXID</label><br> <br>
                            </div>  
                           
                           
        
                            <!-- apply -->
                            <div class="input-field "> 
                                <i class="material-icons prefix">list</i>
                                <select name="apply"  id="req" >
                                    <option></option>
                                    <option value="Offline Exam" >Offline Exam (3500 BDT)</option>
                                    <option value="Online Exam" >Onine Exam (2000 BDT)</option>
                                </select> 
                                <label for="apply" class="text-success font-weight-bold">Select Submission Type</label><br>
                            </div>
                            
                            @error('apply')
                            <div class="alert alert-danger" role="alert">
                            {{$errors->first('apply')}}  
                            </div> <br>
                            @enderror 
                            
                            
                            
                            <hr style="height:2px;border-width:0;color:gray;background-color:green">
                            <input type="submit" class="btn btn-success" value="SUBMIT">
                        
                        </form>
                         <hr>
                        <a href="/waiting_list" class="btn btn-dark">Check Your Submission</a>
                         </div>
        
                    </div>
              

                    </div>
                </div>
                
             
                  <p class="bottom-three"></p>
                  <strong style="color: teal"> To access all the tools, please try out our premium service!! </strong>
                  <p class="bottom-three"></p>
            </div>
        </div>
    </div>
</div>
</div> 
@endsection