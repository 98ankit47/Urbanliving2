@extends('layouts.admin')
@section('content')

<style>
.floor-card {
  margin-left: 30px;
  margin-right: 30px;
}

.card-body{
  height: 80px;
}

.card-img-top {
  height: 300px;
}

.contain-bath {
    margin-left: 20px;
}
</style>
<br>

<div class="container contain-bath">
<br>
    <div class="row" style="font-family: Times New Roman;">
        <div class="col-md-4 floor-contain">
            <h4>Bathroom</h4>
        </div>
        <div class="col-md-2">
        <button type="button" data-toggle="modal"  data-target="#editComponentModal" class="btn btn-info">Add New</button> 
        </div>
    </div>
    </div>
<hr>

<div class="row" style="font-family: Times New Roman;">
<div class="col-md-4">
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
      <div class="card-body">
        <button type="button" onclick="editfloor(1)" style="background-color: #7AAB41;" class="btn">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" style="background-color: #7AAB41;" class="btn">Edit</button>  
        <button type="button" class="btn btn-danger">Delete</button> 
      </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card floor-card">
    <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
    <div class="card-body">
        <button type="button" onclick="editfloor(1)" style="background-color: #7AAB41;" class="btn">Edit</button>  
        <button type="button" style="background-color:  #F44336;" class="btn">Delete</button> 
      </div>
  </div>
</div>
</div>


<!--MODAL-->

<div class="modal fade" id="editComponentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="font-family: Times New Roman;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bathroom</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="Communityform">
<div class="form-group">
      <label class="custom-required"for="inputEmail4">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="title">
    </div>
  <div class="form-group">
  <label class="custom-required" for="inputState">Type:</label>
      <select id="country" class="form-control">
        <option selected>Choose...</option>
        <option>Bedroom</option>
        <option>Bathroom</option>
        <option>Kitchen</option>
        <option>Garage</option>
      </select>
  </div>
  <div class="form-group">
  <div class="image-upload">
<p class="custom-required"><strong>Image</strong></p>
  <input type="file" id="files" name="files[]" multiple />
  <br><br>
<output id="list" width="200px" height="200px"></output>
  </div>
   </div>

  </div>
  <div class="ml-2 mt-2 mb-1">
            <span class="custom-required"></span><span>All are mandatory fields.</span>
          </div>
  <div class="modal-footer">
    <button type="button" style="background-color:#F44336;" class="btn" data-dismiss="modal">Close</button>
    <button type="submit" style="background-color:#00BCD4;" class="btn">Save changes</button>
  </div>
</form>
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