@extends('layouts.admin')
@section('content')

<style>
/* .floor-card {
  margin-left: 30px;
  margin-right: 30px;
} */
</style>

<div class="container-fluid" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
<br>
    <div class="row">
      <div class="col-md-6" style="text-align:left;">
        <h2><strong>Floor Components</strong></h2>
      </div>
      <div class="col-md-6" style="text-align:right;">
        <a href="/admin/floor" style="color:white;" class="btn btn-secondary"><i class="la la-chevron-circle-left"></i> Go Back</a> 
      </div>
    </div>
<hr>

<div class="row" id="floorComponent_list" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
 
</div>

</div>
<!--MODAL-->

<div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="AddNewFloorComponent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Floor Component</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="ComponentAddForm">
        <div class="form-group">
      <label class="custom-required"for="inputEmail4">Name:</label>
      <input type="text" pattern="^[a-zA-Z][\sa-zA-Z]*" class="form-control" id="name" placeholder="title" required>
    </div>
    <div class="form-group">
      <label class="custom-required" for="inputEmail4">Component Number:</label>
      <input type="number" class="form-control" id="cno" onkeydown="javascript: return event.keyCode == 69 ? false : true"  placeholder="title" required>
    </div>
   
  <div class="form-group">
  <div class="image-upload">
<p class="custom-required"><strong>Image</strong></p>
  <input type="file" id="image" name="files[]" multiple required/>
  <br><br>
<output id="list" width="200px" height="200px"></output>
  </div>
   </div>

  </div>
  <div class="ml-2 mt-2 mb-1">
    <span class="custom-required"></span><span>All are mandatory fields.</span>
   </div>
  <div class="modal-footer">
    <button type="button" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
    <button type="submit" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
  </div>
</form>
      </div>
     
    </div>
  </div>


  

  <div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="editfloorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Floor Component</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="EditComponentForm">
          <div class="form-group">
        <label class="custom-required for="inputEmail4">Name:</label>
        <input type="text" class="form-control" pattern="^[a-zA-Z][\sa-zA-Z]*" id="edit_name" placeholder="title" required>
      </div>
      <div class="form-group">
        <label class="custom-required"for="inputEmail4">Component Number:</label>
        <input type="number" class="form-control" id="edit_cno" onkeydown="javascript: return event.keyCode == 69 ? false : true"  placeholder="title" required>
      </div>
     
    <div class="form-group">
    <div class="image-upload">
      <p class="custom-required"><strong>Image</strong></p>
    <input type="file" id="image" name="file" />
    <br><br>
  <output id="list" width="200px" height="200px"></output>
    </div>
     </div>
  
    </div>
    <div class="modal-footer">
      <button type="button" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
      <button type="submit" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
    </div>
  </form>
        </div>
       
      </div>
    </div>

  <div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="deleteFloorComponent" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
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
            <h6 class="delete_heading">Are you sure, you want to delete this Component ?</h6>
            <div class="clearfix"></div>
            <div class="m-auto">
              <button type="button" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary" data-dismiss="modal"> No </button>
              <button type="submit" style="color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" id="ys-floor-component-btn"> Yes</button>
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