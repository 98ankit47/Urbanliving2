@extends('layouts.admin')
@section('content')

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
<br>

<div class="container enquiry-contain" style="text-aligh:left;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
  <h4><strong> Manage Enquiry</strong></h4>
    <hr><br>


  <div class="tabs" id="enquiry" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"> 
     
  </div>
</div>
<br>


<div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="deleteEnquiry" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Delete Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-left:10px;">
          <h6 class="delete_heading">Are you sure, you want to Delete this Enquiry?</h6>
          <div class="clearfix"></div>
          <div class="m-auto">
            <button type="button" data-dismiss="modal" style="color:white;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100"> No </button>
            <button type="submit" id="ys-enq-btn" style=" color:white; background-color:#2DCC70;font-weight:bold" class="btn w3-100"> Yes</button>
           </div>  
          </div>    
        </div>
     </div>
   </div>
 </div>
@endsection