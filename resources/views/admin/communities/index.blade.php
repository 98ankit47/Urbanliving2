@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container">
<br>
<div class="row">
<div class="col-md-10">
<h4>Communities</h4>
</div>
<div class="col-md-2">
  <a type="button" data-toggle="modal" onclick="Addcommunity()"  data-target="#AddcommunityModal" style="font-size: 15px;" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-success">Add New</a> 

</div>
</div><hr>
<br>
    <div class="row" id="community_list">
     
      
  </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="communityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Community Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="Communityform">
<div class="form-group">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="title" placeholder="title">
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address">
  </div>

  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputArea">Area</label>
    <input type="text" class="form-control" id="area" placeholder="Area">
  </div>
  <div class="form-group col-md-4">
    <label for="inputDivision">Subdivision</label>
    <input type="text" class="form-control" id="subdivission" placeholder="Subdivision">
  </div>
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="city">
    </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">state</label>
        <input type="text" class="form-control" id="state">
      </div>
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="country" class="form-control">
        <option selected>Choose...</option>
        <option>India</option>
        <option>USA</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="zipcode">
    </div>
   
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>
      </div>
     
    </div>
  </div>
</div>

<!--Save Moadal-->



<div class="modal fade" id="AddcommunityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Community Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="Communityaddform">
<div class="form-group">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="addtitle" placeholder="title">
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="addaddress" placeholder="Address">
  </div>

  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputArea">Area</label>
    <input type="text" class="form-control" id="addarea" placeholder="Area">
  </div>
  <div class="form-group col-md-4">
    <label for="inputDivision">Subdivision</label>
    <input type="text" class="form-control" id="addsubdivission" placeholder="Subdivision">
  </div>
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="addcity">
    </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">state</label>
        <input type="text" class="form-control" id="addstate">
      </div>
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="addcountry" class="form-control">
        <option selected>Choose...</option>
        <option>India</option>
        <option>USA</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="addzipcode">
    </div>
   
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-xl" id="deleteCommunity" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Delete Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <h6 class="delete_heading">Are you sure, you want to delete this Community ?</h6>
          <div class="clearfix"></div>
          <div class="m-auto">
            <button type="button" data-dismiss="modal" class="btn btn-primary"> No </button>
            <button type="submit" id="ys-comm-btn" class="btn btn-danger"> Yes</button>
           </div>  
          </div>    
        </div>
     </div>
   </div>
 </div>

  @endsection
 