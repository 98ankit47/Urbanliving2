@extends('layouts.user') 
@section('content')
<div class="row">
    <div class="col-md-8">
    @foreach($homes as $home)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="text-align:center;">
                        <img style="height:320px" src="/uploads/homes/{{$home->featured_image}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body" style="text-align:center;height:320px;;">
                                <h4>{{$home->communities->communities->title}}</h4><br><br>
                                <span>$229,990</span><br>
                                <span>{{$home->title}}</span><br><br><br><br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                        <div class ="col-md-4">
                                        <a href="/development-Detail/{{$home->id}}" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">Details</a> 
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
        <br>
@endforeach
    </div>
    <div class="col-md-4">
        <div style="height: 100%;width:100%" id="map"></div>
    </div>
</div>
  
 
@endsection
 