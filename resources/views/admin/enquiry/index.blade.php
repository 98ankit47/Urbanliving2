@extends('layouts.admin')
@section('content')

<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
<br>

<div class="container-fluid enquiry-contain" style="text-aligh:left;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
  <h2><strong> Manage Enquiry</strong></h2>
    <hr><br>

    <div id="enquiry" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"> </div>
</div>
<br>


<div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" 
id="deleteEnquiry" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
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
            <button type="button" data-dismiss="modal" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"> No </button>
            <button type="submit" id="ys-enq-btn" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1"> Yes</button>
           </div>  
          </div>    
        </div>
     </div>
   </div>
 </div>
 <div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" 
id="replyEnquiry" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Message</h5>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row m-1">
          <textarea name="" pattern="^[a-zA-Z][\sa-zA-Z]*" required id="replyMsg" cols="30" rows="2" class="w-100 form-control"></textarea>
          <div class="clearfix"></div>
          <div class="mt-1">
            <button type="button" data-dismiss="modal" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"> Cancel </button>
            <button type="button" id="reply-btn" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1"> Send</button>
           </div>  
          </div>    
        </div>
     </div>
   </div>
 </div>
@endsection
