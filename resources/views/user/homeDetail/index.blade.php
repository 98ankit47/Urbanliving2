@extends('layouts.user') 
@section('content')
@foreach($homes as $home)
  <div class="card" style="width: 70rem;">
    <div class="card-body">
        <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 32rem; height:20rem; text-align:center;">
            <img style="height:320px;" src="/uploads/homes/{{$home->featured_image}}"/>
            </div>
        </div>
        <div class="col-md-6">
        <div class="card" style="width: 32rem; height:20rem;">
            <div class="card-body" style="text-align:center;">
                <h4>CLEVER</h4><br><br>
                <span>$229,990</span><br>
                <span>{{$home->title}}</span><br><br><br><br>
                <div class="row">
                    <div class="col-md-1"></div>
                        <div class ="col-md-4">
                            <a href="#" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">Details</a> 
                        </div>
                    <div class="col-md-2"></div>
                        <div class ="col-md-4">
                            <a href="#" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#3B7FDC;" class="btn w-100">Tour</a>  
                        </div>
                </div>
            </div>
        </div>
        </div>
        </div>    
    </div>
  </div>
@endforeach
 
@endsection
 