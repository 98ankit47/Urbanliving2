@extends('layouts.admin')
@section('content')

<head>
    <!-- <title>Admin</title> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <style type="text/css">
   
   *{
    font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;
    }
     /*table */
     .table {
        font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;
border-collapse: collapse;
width: 100%;
}

.elements,.row-contain {
border: 1px solid grey;
text-align: left;
color:black;
}

.row-contain:nth-child(even) {
background-color: rgba(128, 128, 128, 0.301);
color:black;
}

     /* CLIENT-SPECIFIC STYLES */
     body,
     table,
     td,
     a {
         -webkit-text-size-adjust: 100%;
         -ms-text-size-adjust: 100%;
         
     }

     table,
     td {
         mso-table-lspace: 0pt;
         mso-table-rspace: 0pt;
     }

     img {
         -ms-interpolation-mode: bicubic;
     }

     /* RESET STYLES */
     img {
         border: 0;
         height: auto;
         line-height: 100%;
         outline: none;
         text-decoration: none;
     }

     table {
         border-collapse: collapse !important;
     }

     body {
         height: 100% !important;
         margin: 0 !important;
         padding: 0 !important;
         width: 100% !important;
     }

     /* iOS #34495E  LINKS */
     a[x-apple-data-detectors] {
         color: inherit !important;
         text-decoration: none !important;
         font-size: inherit !important;
         font-family:'Montserrat'sans-serif !important;
         font-weight: inherit !important;
         line-height: inherit !important;
     }

     /* MOBILE STYLES */
     @media screen and (max-width:600px) {
         h1 {
             font-size: 32px !important;
             line-height: 32px !important;
         }
       
     }

     /* ANDROID CENTER FIX */
     div[style*="margin: 16px 0;"] {
         margin: 0 !important;
     }
 </style>
</head>
<br>

<div class="container" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
    <div class="row">
        <div class="col-md-6" style="text-align:left">
            <h4><strong>Enquiry Details</strong></h4>
        </div>
        <div class="col-md-6" style="text-align:right">
            <a type="button" href="http://127.0.0.1:8000/admin/enquiry" style="color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF; margin-left: 20px;" class="btn">Back</a>
        </div>
    </div>

    <!-- HIDDEN PREHEADER TEXT -->

    <div id="enquiry" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
    
    </div>
</div>

<script rel="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script rel="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script rel="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>

@endsection