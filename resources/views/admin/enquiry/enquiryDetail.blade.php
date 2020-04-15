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
<div class="container">
<table>
  <tr>
    <th style="text-align: center;">Date</th>
    <th style="text-align: center;">Name</th>
    <th style="text-align: center;">Email</th>
    <th style="text-align: center;">Ph. No.</th>
    <th style="text-align: center;">Description</th>
  </tr>
  <tr>
    <td>04-13-20</td>
    <td>John</td>
    <td>john@gmail.com</td>
    <td>726438978</td>
    <td>Description 1 here ! aodhsjnsijkaJD8Yiomksjncnsonjcuisn jshcajnxknIO JKSNCUNX AUIXA XJAUXAJ</td>
  </tr>
</table>
</div>

@endsection