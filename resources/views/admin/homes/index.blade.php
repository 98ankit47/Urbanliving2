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

<div class="container-fluid" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
<br>
      <h2><strong>Homes</strong></h2>
<hr>

<br>
<div class="searchh" style="text-align:right;">
    

    <!-- <form class="form-inline" id="homeSearch" style="width:50%;">
          <input class="form-control form-control-sm mr-3 w-75" type="search" placeholder="Search"
            aria-label="Search" id="search">
          <a type="submit" style="margin-left:-30px;"><i style="color:#DC143C;" class="la la-search" aria-hidden="true"></i></a>
        </form> -->

    <form class="form-inline my-2 my-lg-0" id="homeSearch">
      <input class="form-control mr-sm-2" type="search" id="search" placeholder="Search Home" aria-label="Search">
      <button class="btn btn-outline-success" type="submit"><i style="color:#DC143C;" class="la la-search" aria-hidden="true"></i></button>
    </form>
</div>
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
              <button type="button" data-dismiss="modal" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"> No </button>
              <button type="submit" id="ys-chng-btn" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1"> Yes</button>
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
              <button type="button" data-dismiss="modal" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"> No </button>
              <button type="submit" id="ys-home-btn" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1"> Yes</button>
             </div>  
            </div>    
          </div>
       </div>
     </div>
   </div>
  @endsection
 