@extends('layouts.admin')
@section('content')
<style>
.category {
  font-size: .75rem;
  text-transform: uppercase;
}

.category {
    position: absolute;
    top: 30px;
    left: 0;
    color: white;
    padding: 10px 15px;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
}
</style>

<div class="container" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
<br>
  <div class="row">
    <div class="col-md-12" style="text-align:Center;">
      <h4><strong>Homes</strong></h4>
    </div>
     
  </div>
<hr>
<br>
  <div class="row" id="home_list" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
  </div>

</div>


  <div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="BlockHome" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5>Change Status Confirm Action</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row" style="margin-left:10px;">
            <h6 class="delete_heading">Are you sure, you want to change it's Status ?</h6>
            <div class="clearfix"></div>
            <div class="m-auto">
              <button type="button" data-dismiss="modal" style="color:white;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100"> No </button>
              <button type="submit" id="ys-chng-btn" style=" color:white; background-color:#2DCC70;font-weight:bold" class="btn w3-100"> Yes</button>
             </div>  
            </div>    
          </div>
       </div>
     </div>
   </div>



  <div class="modal fade bd-example-modal-xl" id="deleteHome" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
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
            <h6 class="delete_heading">Are you sure, you want to delete this Home ?</h6>
            <div class="clearfix"></div>
            <div class="m-auto">
              <button type="button" data-dismiss="modal" style="color:white;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100"> No </button>
              <button type="submit" id="ys-home-btn" style=" color:white; background-color:#2DCC70;font-weight:bold" class="btn w3-100"> Yes</button>
             </div>  
            </div>    
          </div>
       </div>
     </div>
   </div>
  @endsection
 