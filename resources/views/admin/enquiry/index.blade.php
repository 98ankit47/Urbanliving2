@extends('layouts.admin')
@section('content')

<head>
<style>
    .a_dash {
        margin-left:20px;
        font-family: Open Sans, sans-serif;
    }
    .tabs {
        
        font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;
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
</style>
</head>
<br>

<div class="container enquiry-contain" style="text-aligh:left;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
  <h4><strong> Manage Enquiry</strong></h4>
    <hr><br>


  <div class="tabs" id="enquiry" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"> 
     
  </div>
</div>
<br><br>
@endsection