@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
.floor-contain {
    margin-left:20px;
}
.floor-card {
  margin-left: 30px;
  margin-right: 30px;
}
.card-body{
  height: 80px;
}
.home-contain {
  margin-left: 40%;
}

.dropbtn {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
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

<div class="container">
<br>
    <div class="row">
        <div class="col-md-9 floor-contain">
            <h4>Floor</h4>
        </div>
        <div class="col-md-2">
            <button onclick="addFloor()" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-Success">Add New</button>
        </div>
    </div>
<hr>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Select Floor</button>
  <div id="myDropdown" class="dropdown-content">
    <a class="tablinks" onclick="openHome(event, 'home1')">Home 1</a>
    <a class="tablinks" onclick="openHome(event, 'home2')">Home 2</a>
    <a class="tablinks" onclick="openHome(event, 'home3')">Home 3</a>
  </div>
</div>

<br><br>

<div id="home1" class="tabcontent"><br>
<span class="floor-card"><strong>HOME 1</strong></span><br><br>
<div class="row">
<div class="col-md-4">
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
      <div class="card-body">
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editFloor">Edit</button>  -->
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button> 
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
</div>
</div>

<div id="home2" class="tabcontent"><br>
<span class="floor-card"><strong>HOME 2</strong></span><br><br>
<div class="row">
<div class="col-md-4">
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
      <div class="card-body">
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
</div>
</div>

<div id="home3" class="tabcontent"><br>
<span class="floor-card"><strong>HOME 3</strong></span><br><br>
<div class="row">
<div class="col-md-4">
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" class="btn btn-warning">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
</div>
</div>

<br>
<hr>


<!-- Add NEW FLOOR MODAL -->

<div class="modal fade" id="AddNewFloor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Floor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="FloorAddForm">
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
              <input type="text" class="form-control" id="bedroom" placeholder="No Of Bedroom">
            </div>
            <div class="form-group col-md-4">
              <label for="inputAddress">Bathroom</label>
              <input type="text" class="form-control" id="bathroom" placeholder="No Of Bedroom">
            </div>
            
          </div>

        <div class="form-row">
          
          <div class="form-group col-md-4">
            <label for="inputDivision">Dinning</label>
            <input type="text" class="form-control" id="dining" placeholder="No Of Dining">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Kitchen</label>
            <input type="text" class="form-control" id="kitchen" placeholder="No Of Kitchen">
          </div>
          <div class="form-group col-md-4">
            <label for="inputArea">Garage</label>
            <input type="text" class="form-control" id="garage" placeholder="No Of Garage">
          </div>
        </div>
        <div class="form-row">
          <div class="form-grroup col-md-6">
            <div class="image-upload">
              <p>Floor Image</p>
              <p><input type="file"  name="image" id="image"  onchange="loadFile(event)" ></p>
            </div>
          </div>
            <div class="form-group col-md-6">  
              <p><label for="file" style="cursor: pointer;">Choose File</label></p>
              <p><img id="output"/></p>
            </div>
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

<!--EDIT FLOOR MODAL-->

  <div class="modal fade" id="EditFloor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <div class="form-group col-md-12">
                <label for="inputEmail4">Select Home</label>
                <select id="Edit_home_id" class="form-control">
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4">Floor No</label>
                <select id="Edit_floor_no" class="form-control">
                  <option selected>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputEmail4">Bedroom</label>
                <input type="text" class="form-control" id="Edit_bedroom" placeholder="No Of Bedroom">
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress">Bathroom</label>
                <input type="text" class="form-control" id="Edit_bathroom" placeholder="No Of Bedroom">
              </div>
              
            </div>
  
          <div class="form-row">
            
            <div class="form-group col-md-4">
              <label for="inputDivision">Dinning</label>
              <input type="text" class="form-control" id="Edit_dining" placeholder="No Of Dining">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCity">Kitchen</label>
              <input type="text" class="form-control" id="Edit_kitchen" placeholder="No Of Kitchen">
            </div>
            <div class="form-group col-md-4">
              <label for="inputArea">Garage</label>
              <input type="text" class="form-control" id="Edit_garage" placeholder="No Of Garage">
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
       
      </div>
    </div>
</div>
</div>


<!--VIEW FLOOR MODAL-->

<div class="modal fade" id="viewFloor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FLOOR DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <span><strong>NO. OF BEDROOMS   :</strong></span>
              </div>
              <div class="col-md-2">
                <span>&nbsp;4</span>
              </div>
              <div class="col-md-4">
                <button type="button" class="btn btn-success">CLICK HERE</button> 
              </div>
            </div><br>
            
            <div class="row">
              <div class="col-md-6">
                <span><strong>NO. OF BATHROOMS   :</strong></span>
              </div>
              <div class="col-md-2">
                <span>&nbsp;4</span>
              </div>
              <div class="col-md-4">
                <button type="button" class="btn btn-success">CLICK HERE</button> 
              </div>
            </div><br>

            <div class="row">
              <div class="col-md-6">
                <span><strong>NO. OF GARAGE   :</strong></span>
              </div>
              <div class="col-md-2">
                <span>&nbsp;4</span>
              </div>
              <div class="col-md-4">
                <button type="button" class="btn btn-success">CLICK HERE</button> 
              </div>
            </div>
            <br>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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

document.getElementById('files').addEventListener('change', handleFileSelect, false);



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
function openHome(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@endsection
