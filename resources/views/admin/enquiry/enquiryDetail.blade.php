@extends('layouts.admin')
@section('content')

<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: white;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

.enquiry-contain {
    margin-left: 45%;
}
</style>
</head>
<br>
<div class="enquiry-contain">
<h4><strong>Enquiry Description</strong></h4>
</div><hr><br>
<div class="container" id="enquiry">

</div>

@endsection