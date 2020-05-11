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
<h3>&nbsp;Selling Enquiry</h3>
<div class="container" style="text-align:center;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
<hr><br>
<div class="card" style="margin-left:15%;margin-right:15%;">
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg" alt="Third slide">
    </div>
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
    <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block" style="width:30px;height:20px;" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg"
        class="img-fluid"></li>
    <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block" style="width:30px;height:20px;" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg"
        class="img-fluid"></li>
    <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block" style="width:30px;height:20px;" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg"
        class="img-fluid"></li>
  </ol>
</div>
<br><br>
<div class="card-body" style="text-align:center;">
<h3><b>User Details</b></h3><br>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact No.</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin@gmail.com</td>
    <td>967787768</td>
  </tr>
</table><br>
<h3><b>Property Details</b></h3><br>

<table>
  <tr>
    <th>Address</th>
    <td>Houstan, NSW</td>
  </tr>
  <tr>
    <th>City</th>
    <td>Sydney, NSW</td>
  </tr>
  <tr>
    <th>State</th>
    <td>Sydney</td>
  </tr>
  <tr>
    <th>Zip</th>
    <td>65688</td>
  </tr>
  <tr>
    <th>Beds</th>
    <td>5</td>
  </tr>
  <tr>
    <th>Baths</th>
    <td>4</td>
  </tr>
  <tr>
    <th>Square Ft.</th>
    <td>75787</td>
  </tr>
  <tr>
    <th>Price Range</th>
    <td>$0 - $96889</td>
  </tr>
  <tr>
    <th>Property type</th>
    <td>Single Family</td>
  </tr>
  <tr>
    <th>Plan to Sell</th>
    <td>2 Months</td>
  </tr>
</table>
</div>
</div>

</div>
<br><br>
@endsection