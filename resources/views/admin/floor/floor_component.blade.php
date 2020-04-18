@extends('layouts.admin')
@section('content')

<style>
.floor-card {
  margin-left: 30px;
  margin-right: 30px;
}

.card-body{
  height: 100px;
}

.card-img-top {
  height: 300px;
}

.contain-bath {
    margin-left: 20px;
}

/* .floor-contain {
  margin-left: 20%;
} */
</style>
<br>

<div class="container contain-bath">
<br>
    <div class="row" style="font-family: Times New Roman;">
        <div class="col-md-2">
          <a href="http://127.0.0.1:8000/admin/floor" style="background-color:#00BCD4;font-family: Open Sans, sans-serif;" class="btn">Back</a> 
        </div>
        <div class="col-md-8 floor-contain">
            <h4 style="text-align: center; font-family: Open Sans, sans-serif;"><strong>Floor Component</strong></h4>
        </div>
        <div class="col-md-2">
        <button onclick="addFloorComponent()" style="font-size: 15px; width:100px;color:white; background-color:#2DCC70; font-family: Open Sans, sans-serif;font-weight:bold" class="btn">Add New</button> 
        </div>
    </div>
    </div>
<hr>

<div class="row" id="floorComponent_list">
 
</div>


<!--MODAL-->

<div class="modal fade" id="AddNewFloorComponent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="font-family: Open Sans, sans-serif;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Floor Component</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="ComponentAddForm">
        <div class="form-group">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="name" placeholder="title" required>
    </div>
    <div class="form-group">
      <label for="inputEmail4">Component Number</label>
      <input type="number" class="form-control" id="Cno" placeholder="title" required>
    </div>
   
  <div class="form-group">
  <div class="image-upload">
<p><strong>Image</strong></p>
  <input type="file" id="image" name="files[]" multiple required/>
  <br><br>
<output id="list" width="200px" height="200px"></output>
  </div>
   </div>

  </div>
  <div class="modal-footer" style="font-family: Times New Roman;">
    <button type="button" style=" color:white; background-color:#F6454F; font-family: Open Sans, sans-serif;font-weight:bold" class="btn w3-100" data-dismiss="modal">Close</button>
    <button type="submit" style="font-family: Open Sans, sans-serif;color:white;text-align:center;font-weight:bold; background-color:#2DCC70;" class="btn w3-100">Save changes</button>
  </div>
</form>
      </div>
     
    </div>
  </div>


  

  <div class="modal fade" id="editfloorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="font-family: Open Sans, sans-serif;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Floor Component</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="EditComponentForm">
          <div class="form-group">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" id="edit_name" placeholder="title" required>
      </div>
      <div class="form-group">
        <label for="inputEmail4">Component Number</label>
        <input type="number" class="form-control" id="edit_cno" placeholder="title" required>
      </div>
     
    <div class="form-group">
    <div class="image-upload">
  <p><strong>Image</strong></p>
    <input type="file" id="image" name="files[]" multiple required/>
    <br><br>
  <output id="list" width="200px" height="200px"></output>
    </div>
     </div>
  
    </div>
    <div class="modal-footer">
      <button type="button" style=" color:white; background-color:#F6454F; font-family: Open Sans, sans-serif;font-weight:bold" class="btn w3-100" data-dismiss="modal">Close</button>
      <button type="submit" style="font-family: Open Sans, sans-serif;color:white;text-align:center;font-weight:bold; background-color:#2DCC70;" class="btn w3-100">Save changes</button>
    </div>
  </form>
        </div>
       
      </div>
    </div>

  <div class="modal fade bd-example-modal-xl" id="deleteFloorComponent" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="font-family: Times New Roman;">
        <div class="modal-header">
          <h5>Delete Confirm Action</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row" style="margin-left:10px;">
            <h6 class="delete_heading" style="font-family: Open Sans, sans-serif;">Are you sure, you want to delete this Home ?</h6>
            <div class="clearfix"></div>
            <div class="m-auto">
              <button type="button" style="font-family: Open Sans, sans-serif;color:white;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100" data-dismiss="modal"> No </button>
              <button type="submit" style=" color:white; background-color:#2DCC70; font-family: Open Sans, sans-serif;;font-weight:bold" class="btn w3-100" id="ys-floor-component-btn"> Yes</button>
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