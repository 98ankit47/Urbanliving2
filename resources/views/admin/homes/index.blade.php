@extends('layouts.admin')
@section('content')
<style>
.home-list-contain {
  margin-left: 20px;
  margin-right: 20px;
}
.homes-contain {
  margin-left: 45%;
  font-family: "Times New Roman";
}
</style>
<div class="container">
<br>
<div class="row">
<div class="col-md-4 homes-contain">
<h4><strong>Homes</strong></h4>
</div>
<div class="col-md-2">
<a type="button" href="/admin/home/create" style="font-size: 15px; background-color:#18BDB0; font-family: Times New Roman;" class="btn btn-Success">Add New</a>
</div>
</div>
<hr>
<br><br>
    <div class="row home-list-contain" id="home_list">
    
  </div>
  </div>

  <div class="modal fade bd-example-modal-xl" id="deleteHome" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 style="font-family: Times New Roman;">Delete Confirm Action</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <h6 class="delete_heading" style="font-family: Times New Roman;">Are you sure, you want to delete this Home ?</h6>
            <div class="clearfix"></div>
            <div class="m-auto">
              <button type="button" data-dismiss="modal" class="btn btn-primary"> No </button>
              <button type="submit" id="ys-home-btn" class="btn btn-danger"> Yes</button>
             </div>  
            </div>    
          </div>
       </div>
     </div>
   </div>
  @endsection
 