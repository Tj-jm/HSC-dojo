@extends('layouts.app_top')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn-floating btn-large blue" href="{{url('home_admission')}}"> <i class=" fa fa-home"></i> </a> <hr>
   
               <div class="container">
                   <h3 style="text-decoration: underline; text-align: center; color:green-accent">Chapter Lsit</h3>
                  <div class="card-panel grey lighten-4">
                      <h4 class="card-title center">
                          PHYSICS
                      </h4>
                      <table>
                          <tr>
                              <td style="font-weight:bold;font-size:25px;color:teal"> ভেক্টর</td>
                              <td><a class="btn-floating btn-small black accent-3" href={{url('/admission_vector_mcq')}}> <i class="material-icons">check</i></a> <br> <b style="font-family: Comic Sans MS">MCQ Practice</b></td>
                              <td><a class="btn-floating btn-small cyan " href=#> <i class="material-icons">assignment</i></a> <br> <b style="font-family: Comic Sans MS">Written Practice</b></td>
                              
                          </tr>
                          <tr> 
                              <td style="font-weight:bold;font-size:25px;color:teal"> গতিবিদ্যা <a class="btn-floating btn-small red pulse"><i class="material-icons">whatshot</i> </a> </td>
                              <td><a class="btn-floating btn-small black accent-3" href=#> <i class="material-icons">check</i></a> <br> <b style="font-family: Comic Sans MS">MCQ Practice</b></td>
                              <td><a class="btn-floating btn-small cyan " href=#> <i class="material-icons">assignment</i></a> <br> <b style="font-family: Comic Sans MS">Written Practice</b></td>
                              
                          </tr>
                      </table>

                  </div>


               </div>
         
            </div>
        </div>
    </div>
</div> 
 @endsection