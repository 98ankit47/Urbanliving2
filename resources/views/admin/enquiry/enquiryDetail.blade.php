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
    margin-left: 20px;
}

</style>
</head>
<br>

<div class="enquiry-contain">
<div class="row">
<div class="col-md-5" style="text-align:left">
<a type="button" href="http://127.0.0.1:8000/admin/enquiry" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn">Back</a>
</div>
<div class="col-md-7" style="text-align:left">
<h4><strong>Enquiry Details</strong></h4>
</div>
</div>
</div><hr><br>

<div class="container" id="enquiry">

</div>

<script>
$('textarea').autoResize();
</script>

@endsection