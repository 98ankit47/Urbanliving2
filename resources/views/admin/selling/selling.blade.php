@extends('layouts.admin')
@section('content')
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width:100%;
}

th, td {
  padding: 15px;
}
</style>

<br>
<h2><strong>&nbsp;Selling Enquiry</strong></h2>
<?php
    $gallery = explode(',',$selling->gallery);
?>
<div class="container" style="text-align:center;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
<hr><br>
<div class="card" style="margin-left:15%;margin-right:15%;background:#E8E8E8">
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
 data-ride="carousel" style="margin:10px;">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <img class="d-block w-100" height="370px" src="/uploads/selling/{{$selling->featured_image}}" alt="First slide">
    </div>
    @foreach ($gallery as $gal)
    <div class="carousel-item">
      <img class="d-block w-100" height="370px"  src="/uploads/sellinggal/{{$gal}}" alt="Second slide">
    </div> 
    @endforeach
    
   
  </div>
  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
       <img class="d-block" style="width:30px;height:20px;" src="/uploads/selling/{{$selling->featured_image}}"
        class="img-fluid"></li>
    @foreach ($gallery as $key=>$gal)
      <li data-target="#carousel-thumb" data-slide-to="{{$key+1}}">
      <img class="d-block" style="width:30px;height:20px;" src="/uploads/sellinggal/{{$gal}}"
        class="img-fluid"></li>
    @endforeach
  </ol>
</div>
<br>
<div class="card-body" style="text-align:center;">
<h3><b>User Details</b></h3><br>
<table style="background: white" class="table">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact No.</th>
  </tr>
  <tr>
    <td>{{$selling->name}}</td>
    <td>{{$selling->email}}</td>
    <td>967787768</td>
  </tr>
</table><br>
<h3><b>Property Details</b></h3><br>

<table style="background: white" class="table">
  <tr>
    <th>Address</th>
    <td>{{$selling->address}}</td>
  </tr>
  <tr>
    <th>City</th>
    <td>{{$selling->city}}</td>
  </tr>
  <tr>
    <th>State</th>
    <td> {{$selling->state}}</td>
  </tr>
  <tr>
    <th>Zip</th>
    <td>{{$selling->zip}}</td>
  </tr>
  <tr>
    <th>Bedrooms</th>
    <td>{{$selling->bedroom}}</td>
  </tr>
  <tr>
    <th>Bathrooms</th>
    <td>{{$selling->bathroom}}</td>
  </tr>
  <tr>
    <th>Square Ft.</th>
    <td>{{$selling->squareft}}</td>
  </tr>
  <tr>
    <th>Price Range</th>
    <td>{{$selling->price}}</td>
  </tr>
  <tr>
    <th>Property type</th>
    <td>{{$selling->type}}</td>
  </tr>
  <tr>
    <th>Plan to Sell After</th>
    <td>{{$selling->time}} Months</td>
  </tr>
</table>
</div>
</div>

</div>
<br><br>
@endsection