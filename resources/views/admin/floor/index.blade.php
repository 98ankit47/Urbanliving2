@extends('layouts.admin')
@section('content')
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<style>
.dropbtn {
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  font-weight:bolder;
  cursor: pointer;
  text-align: center;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}
.tabcontent {
  display: none;
  border-top: none;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.tabcols {
  padding-left: 5px;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.card-img-top {
  height: 300px;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

<div class="container-fluid" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
<br>
    <div class="row">
        <div class="col-md-12" style="text-align:left;">
            <h2><strong>Floor</strong></h2>
        </div>
        
    </div>
<hr>

<div class="dropdown" style="width:100%;">
  <button onclick="myFunction()" class="dropbtn " style="height:30px; background-color:#009688;">Select Home&nbsp;&nbsp;<i class="la la-angle-double-down"></i></button>
  <div id="myDropdown" class="dropdown-content" style="width:100%;">
  
  </div>
</div>

<br><br>


  <div id="homeFloor" class="row" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
    <div class="col-md-4"><br>
      <a  style="text-decoration:none" data-toggle="modal" data-target="#galleryModal" onclick="addFloor()" >
        <div class="card addcard" style="border:2px dotted #666666; background-color:#e4e4e4; height:278px;">
          <img class="card-img-top" style="height:120px;margin-top:20%;width:120px;margin-left:31%;" src="https://cdn3.iconfinder.com/data/icons/houses-11/64/131-Houses-Original_house-home-new-add-512.png">
          <div class="card-body">
              <h4 style="text-align:center;margin-top:30px;font-weight:bold;color:darkgray"> ADD NEW FLOOR</h4>
          </div>
        </div>
      </a>
    </div>
  </div>
 
</div>
 
 


<!-- Add NEW FLOOR MODAL -->


<div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="AddNewFloor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Floor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="FloorAddForm" name="AddFloor">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Select Home</label>
              <select id="home_id" class="form-control">
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4">Floor No</label>
              <select id="floor_no" class="form-control">
                <option selected>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputEmail4">Bedroom</label>
              <input type="number" class="form-control" onkeydown="javascript: return event.keyCode == 69 ? false : true"  id="bedroom" placeholder="No Of Bedroom" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputAddress">Bathroom</label>
              <input type="number" class="form-control" onkeydown="javascript: return event.keyCode == 69 ? false : true"  id="bathroom" placeholder="No Of Bedroom" required>
            </div>
            
          </div>

        <div class="form-row">
          
          <div class="form-group col-md-4">
            <label for="inputDivision">Dinning</label>
            <input type="number" class="form-control" id="dining" placeholder="No Of Dining" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Kitchen</label>
            <input type="number" class="form-control" onkeydown="javascript: return event.keyCode == 69 ? false : true" id="kitchen" placeholder="No Of Kitchen" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputArea">Garage</label>
            <input type="number" class="form-control" onkeydown="javascript: return event.keyCode == 69 ? false : true" id="garage" placeholder="No Of Garage" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <div class="image-upload">
              <p><strong>Floor Image</strong></p>
              <p><input type="file"  name="image" id="image"  onchange="loadFile(event)" required></p>
              <p><img id="output" width="130px" height="130px" /></p>
            </div>
          </div>   
              <!-- <p><label for="file" style="cursor: pointer;">Choose File</label></p> -->
              
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" style="color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
          <button type="submit" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
        </div>
      </form>
      </div>
     
    </div>
  </div>
<!--EDIT FLOOR MODAL-->

  <div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="EditFloor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Floor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="EditForm">
          <div class="modal-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Bedroom</label>
                <input type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true"  class="form-control" id="Edit_bedroom" placeholder="No Of Bedroom" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress">Bathroom</label>
                <input type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true" class="form-control" id="Edit_bathroom" placeholder="No Of Bedroom" required>
              </div>
              
            </div>
  
          <div class="form-row">
            
            <div class="form-group col-md-4">
              <label for="inputDivision">Dinning</label>
              <input type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true" class="form-control" id="Edit_dining" placeholder="No Of Dining" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputCity">Kitchen</label>
              <input type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true" class="form-control" id="Edit_kitchen" placeholder="No Of Kitchen" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputArea">Garage</label>
              <input type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true" class="form-control" id="Edit_garage" placeholder="No Of Garage" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-grroup col-md-6">
              <div class="image-upload">
                <p>Floor Image</p>
                <p><input type="file"  name="image" id="Edit_image"  onchange="loadFile(event)" ></p>
              </div>
            </div>
              <div class="form-group col-md-6">  
                <p><label for="file" style="cursor: pointer;">Choose File</label></p>
                <p><img id="output"/></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" class="btn" data-dismiss="modal"><i class="ft-x"></i> Close</button>
            <button type="submit" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
          </div>
        </form>
        </div>
       
      </div>
    </div>
</div>
</div>


<!--VIEW FLOOR MODAL-->

<div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="viewFloor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FLOOR DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="floorContent">
         
      </div>

      
  </div>
</div>
</div>

<div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="deleteFloor" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="font-family: Open Sans, sans-serif;">
      <div class="modal-header">
        <h5>Delete Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-left:10px;">
          <h6 class="delete_heading">Are you sure, you want to delete this Floor ?</h6>
          <div class="clearfix"></div>
          <div class="m-auto">
            <button type="button" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary" data-dismiss="modal"> No </button>
            <button type="submit" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" id="ys-floor-btn"> Yes</button>
           </div>  
          </div>    
        </div>
     </div>
   </div>
 </div>



<script>
function handleFileSelect(evt) {
  var files = evt.target.files; // FileList object

  // Loop through the FileList and render image files as thumbnails.
  for (var i = 0, f; f = files[i]; i++) {

    // Only process image files.
    if (!f.type.match('image.*')) {
      continue;
    }

    var reader = new FileReader();

    // Closure to capture the file information.
    reader.onload = (function(theFile) {
      return function(e) {
        // Render thumbnail.
        var span = document.createElement('span');
        span.innerHTML = ['<img class="thumb" width="120px" height="120px" src="', e.target.result,
                          '" title="', escape(theFile.name), '"/>'].join('');
        document.getElementById('list').insertBefore(span, null);
      };
    })(f);

    // Read in the image file as a data URL.
    reader.readAsDataURL(f);
  }
}




var loadFile = function(event) {
var image = document.getElementById('output');
image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function openHome(evt, homeid) {
  var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
    loadFloorList();
      function loadFloorList(){
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/floor-home/'+homeid,
          success: function(result){
          $('#homeFloor').html(result);
          }   
      });
  }
  evt.currentTarget.className += " active";
}
</script>
@endsection
