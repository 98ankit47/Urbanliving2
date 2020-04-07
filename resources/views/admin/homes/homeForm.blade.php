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
</style>

<div class="container details-container" >
<br>
  <div class="row" style="font-family: Times New Roman;">
  <div class="col-md-4 hm-contain">
  <h4 style="color: black;"><strong>Home</strong></h4>
  </div>
  <div class="col-md-2">
  <a type="button" href="/admin/homes" style="color: white; background-color:#00BCD4;" class="btn">Go Back</a>
  </div>
  </div><hr>
  <br>
  <div class="card">
  <br>
<form class="details-containerr" style="font-family: Times New Roman;">
  <div class="form-row "> 
    <div class="form-group col-md-4">
      <label for="inputTitle">Title</label>
      <input type="text" class="form-control" id="title" required>
    </div>
  <div class="form-group col-md-4">
    <label for="inputDescription">Description</label>
    <input type="text" class="form-control" id="description" required>
  </div>
  <div class="form-group col-md-4">
    <label for="community">Community</label>
    <select id="community_list" class="form-control">
    </select>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputBedroom">Bedroom</label>
    <input type="text" class="form-control" id="bedroom" required>
  </div>
  <div class="form-group col-md-4">
    <label for="inputBathroom">bathroom</label>
    <input type="text" class="form-control" id="bathroom" required>
  </div>
  <div class="form-group col-md-4">
    <label for="inputGarage">Garage</label>
    <input type="text" class="form-control" id="garage" required>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputStories">Stories</label>
    <input type="text" class="form-control" id="stories" required>
  </div>
  <div class="form-group col-md-4">
    <label for="inputMls">Mls</label>
    <input type="text" class="form-control" id="mls" required>
  </div>
  <div class="form-group col-md-4">
    <label for="inputArea">Area</label>
    <input type="text" class="form-control" id="area" required>
  </div>
  </div>
<div class="row">
  <div class="col-md-6">
    <div class="image-upload">
      <p>Featured Image</p>
      <p><input type="file"  name="image" id="file"  onchange="loadFile(event)" required></p>
      <p><label for="file" style="cursor: pointer;">Choose File</label></p>
      <p><img id="output" width="200px" height="200px" /></p>
    </div>
  </div>
<div class="col-md-6">
<div class="image-upload">
<p>Image Gallery</p>
  <input type="file" id="files" name="files[]" multiple />
  <br><br><br><br>
<output id="list" width="200px" height="200px"></output>
  </div>
</div>
</div>
  <br><br>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">Builder</label>
      <input type="text" class="form-control" id="builder" required>
    </div>
    <!-- <div class="form-group col-md-3">
    <label for="inputDescription">Meta Description</label>
      <input type="text" class="form-control" id="meta_description">
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputMetatitle">Meta Title</label>
      <input type="text" class="form-control" id="meta_title">
    </div> -->
    <div class="form-group col-md-3">
      <label for="inputState">Status</label>
      <select id="status" class="form-control">
       
      </select>
    </div>
  </div>
  <div class="row" style="font-family: Times New Roman;">
  <div class="col-md-2">
  <button type="submit" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F#2DCC70;" class="btn w3-100" class="btn">Save</button>
</div>
<div class="col-md-2">
  <button type="submit" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:;" class="btn w3-100">Cancel</button>
</div>
</div>
</form>
<br>
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

@endsection