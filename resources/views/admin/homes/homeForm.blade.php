@extends('layouts.admin')
@section('content')
<style>
.details-containerr {
  margin-left: 25px;
  margin-right: 25px;
}

.hm-contain {
  margin-left: 45%;
}

.input-icons i { 
            position: absolute; 
            text-align:right;
        } 
          
        .input-icons { 
            width: 100%; 
            margin-bottom: 10px; 
        } 
          
        .icon { 
            padding: 10px; 
            min-width: 40px; 
        } 
          
        .input-field { 
            width: 100%; 
            padding: 10px; 
            text-align: center; 
        } 
</style>

<div class="container details-container" >
<br>
  <div class="row" style="font-family: Open Sans, sans-serif;">
  <div class="col-md-4 hm-contain">
  <h4 style="color: black;"><strong>Home</strong></h4>
  </div>
  <div class="col-md-2">
  <a type="button" href="/admin/homes" style="color: white; background-color:#00BCD4;font-family: Open Sans, sans-serif;" class="btn">Go Back</a>
  </div>
  </div><hr>
  <br>
  <div class="card">
  <br>
<form class="details-containerr" style="font-family: Open Sans, sans-serif;">
  <div class="form-row "> 
    <div class="form-group col-md-4">
      <label for="inputTitle">Title</label>
      <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="title" required>
    </div>
    
  
  <div class="form-group col-md-4">
    <label for="community">Community</label>
    <select id="community_list"  class="form-control" >
    </select>
  </div>

  <div class="form-group col-md-4">
    <label for="inputDescription">Description</label>
    <textarea name="" pattern="^[a-zA-Z][\sa-zA-Z]*" required id="description" cols="30" rows="2" class="w-100 form-control"></textarea>
  </div> 
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputBedroom">Bedroom</label>
    <input type="number" min="1" max="20" class="form-control" id="bedroom"  onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
  </div>
  <div class="form-group col-md-4">
    <label for="inputBathroom">bathroom</label>
    <input type="number" min="1" max="20" class="form-control" id="bathroom" onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
  </div>
  <div class="form-group col-md-4">
    <label for="inputGarage">Garage</label>
    <input type="number" min="1" max="10" class="form-control" id="garage" onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputStories">Stories</label>
    <input type="number" min="1" max="8" class="form-control" id="stories" onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
  </div>
  <div class="form-group col-md-4">
    <label for="inputMls">Type</label>
    <select class="form-control" id="mls">
      <option value="single">Single Family</option>
      <option value="mid">Mid High Rise</option>
      <option value="town">Town House</option>
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="inputArea">Area</label>
    <input type="number" class="form-control" id="area"  onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Builder</label>
      <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="builder" required>
    </div>
     
    <div class="form-group col-md-4">
      <label for="inputState">Status</label>
      <select id="status" class="form-control" >
       
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCity">Price</label>
      <input type="number" min="1" max="100000" class="form-control" id="price" onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
    </div>  
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="image-upload">
        <p>Featured Image</p>
        <p><input type="file"  name="image" id="file" accept="image/*"  onchange="loadFile(event)" required></p>
        <p><img id="output" /></p>
      </div>
    </div>
  <div class="col-md-6">
  <div class="image-upload">
  <p>Image Gallery</p>
    <input type="file" id="files" name="files[]" multiple required accept="image/*" />
    <br><br>
  <output id="list" width="200px" height="200px"></output>
    </div>
  </div>
  </div>
  <div class="form-row">
    <div class="col-md-12">
    <label for="inputLocation">Add Location</label><br>
    <a type="button" data-toggle="modal" data-target="#myModal" style="color: white;width:100%;font-family: Open Sans, sans-serif;" class="btn btn-dark"><i class='fas fa-map-marker-alt'></i>&nbsp;&nbsp;&nbsp;Add</a>
    <input type="hidden" class="form-control" id="lat" required>
    <input type="hidden" class="form-control" id="lng" required>
  </div>
  </div>
  <br><br>
  <div class="row" style="font-family: Open Sans, sans-serif;">
    <div class="col-md-2">
      <button type="submit"  style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
    </div>
    <div class="col-md-2">
      <button style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-warning mr-1"><i class="ft-x"></i> Cancel</button>
    </div>
  </div>
</form>
<br>
</div>


<!--Add Location Modal-->

<div class="modal" id="myModal">
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
          span.innerHTML = ['<img class="thumb" width="200px" height="200px" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>&nbsp;&nbsp;&nbsp;&nbsp;'].join('');
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

@endsection