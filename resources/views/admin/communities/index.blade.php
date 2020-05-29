@extends('layouts.admin')
@section('content')

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

<div class="container" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
    <br>
    <h2><strong>Locations</strong></h2>
    <hr>
    <br>
  <div class="row" id="community_list" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
     
  </div>
</div>

<!--EDIT MODAL-->

  <div class="modal " style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="communityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabl" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Location Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="Communityform">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Title</label>
                <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="title" placeholder="title" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress ">Address</label>
                <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="address" placeholder="Address" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputArea">Area</label>
                <input type="text" class="form-control" id="area" placeholder="Area" required>
                <input type="hidden" class="form-control" id="editcomid" placeholder="Area" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputDivision">Subdivision</label>
                <input type="text" class="form-control" id="subdivission" placeholder="Subdivision" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="city" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputCity">state</label>
                <input type="text" class="form-control" id="state" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Country</label>
                <select id="country" class="form-control">
                  <option selected>Choose...</option>
                  <option>India</option>
                  <option>USA</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="zipcode" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputZip">Desciption</label>
                <textarea class="form-control" row="2" id="description" required></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12">
                <label for="inputLocation">Add Location</label><br>
                <a type="button" data-toggle="modal" data-target="#myMap" style="color: white;width:100%;font-family: Open Sans, sans-serif;" class="btn btn-dark"><i class='fas fa-map-marker-alt'></i>&nbsp;&nbsp;&nbsp;Add</a>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
              <button type="submit" style="color:white;width:120px;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
            </div>
          </form>
        </div>   
      </div>
    </div>
  </div>

<!-- ADD COMMUNITY Modal -->

<div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="AddcommunityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Location Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="Communityaddform" name="AddCommunity">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Title</label>
              <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="addtitle" placeholder="title" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress ">Address</label>
              <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="addaddress" placeholder="Address" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputArea">Area</label>
              <input type="number" class="form-control" id="addarea" placeholder="Area" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputDivision">Subdivision</label>
              <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="addsubdivission" placeholder="Subdivision" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputCity">City</label>
              <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="addcity" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputCity">state</label>
              <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="addstate" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Country</label>
              <select id="addcountry" class="form-control">
                <option selected>Choose...</option>
                <option>India</option>
                <option>USA</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">Zip</label>
              <input type="number" class="form-control" pattern="\d{5,5}(-\d{4,4})?" id="addzipcode" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputZip">Desciption</label>
              <textarea class="form-control" pattern="^[a-zA-Z][\sa-zA-Z]*"row="2" id="Adddescription" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12">
              <label for="inputLocation">Add Location</label><br>
              <a type="button" data-toggle="modal" data-target="#myMap" style="color: white;width:100%;font-family: Open Sans, sans-serif;" class="btn btn-dark"><i class='fas fa-map-marker-alt'></i>&nbsp;&nbsp;&nbsp;Add</a>
            </div>
          </div>
          <div class="modal-footer">
          <button type="button" style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
            <button type="submit" style="width: 120px;color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
          </div>
        </form>
      </div> 
    </div>
  </div>
</div>
 

<div class="modal" id="myMap">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Select Location</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
        <div id="mapshow" style="width:450px;height:400px"> 
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
      </div>

    </div>
  </div>
</div>


<!--DELETE COMMUNITY Moadal-->

<div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="deleteCommunity" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
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
          <h6 class="delete_heading">Are you sure, you want to delete this Location ?</h6>
          <div class="clearfix"></div>
          <div class="m-auto">
            <button type="button" data-dismiss="modal" style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"> No </button>
            <button type="submit" id="ys-comm-btn" style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-warning mr-1"> Yes</button>
          </div>  
        </div>    
      </div>
     </div>
   </div>
 </div>

  @endsection
 