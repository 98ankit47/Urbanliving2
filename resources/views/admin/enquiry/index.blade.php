@extends('layouts.admin')
@section('content')

<head>
<style>
    .a_dash {
        margin-left:20px;
        font-family: Open Sans, sans-serif;
    }
    .tabs {
        margin-left:20px;
        width:90%;
    }
    .tablink {
  background-color: white;
  color: black;
  float: left;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width:100%; 
  text-align:left;
  border:1px solid;
  border-color: gray;
}

/* .tablink:hover {
  background-color: #347AB8;
} */

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

.enquiry-contain {
    margin-left: 45%;
}
</style>
</head>
<br>

<div class="enquiry-contain">
<h4><strong>Enquiry</strong></h4>
</div><hr><br>

<div class="container tabs"> 
    <a class="tablink" type="button" href="/admin/enquiryDetail">
      <div class="row">
        <div class="column" style="width:98%;font-family: Open Sans, sans-serif;">
          <strong>John Rambo</strong>
          <p style="font-size: 14px; color: gray; font-family: Open Sans, sans-serif;">Click for Description !</p>  
        </div>
        <div class="column" style="width:2%; padding-top: 20px;">
          <i class ="fa fa-angle-right" style="font-size:25px; color:gray;"></i>
        </div>
      </div>
    </a>
</div>

<div class="container tabs"> 
    <a class="tablink" type="button" href="/admin/enquiryDetail">
      <div class="row">
        <div class="column" style="width:98%;font-family: Open Sans, sans-serif;">
          <strong>Ken Miles</strong>
          <p style="font-size: 14px; color: gray;font-family: Open Sans, sans-serif;">Click for Description !</p>  
        </div>
        <div class="column" style="width:2%; padding-top: 20px;">
          <i class ="fa fa-angle-right" style="font-size:25px; color:gray;"></i>
        </div>
      </div>
    </a>
</div>

@endsection