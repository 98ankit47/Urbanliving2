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

.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

.enquiry-contain {
    text-align: center;
}
</style>
</head>
<br>

<div class="container enquiry-contain">
<h4><strong> Manage Enquiry</strong></h4>
</div><hr><br>


<div class="container tabs" id="enquiry"> 
     
</div>
@endsection