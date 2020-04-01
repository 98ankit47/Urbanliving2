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
</style>
<div class="container">
<br>
    <div class="row">
        <div class="col-md-9 floor-contain">
            <h4>Floor</h4>
        </div>
        <div class="col-md-2">
            <a type="button" data-toggle="modal" data-target="#addFloorModal" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-Success">Add New</a>
        </div>
    </div>
<hr>

<a type="button" class="btn btn-success">EDIT</a>

<!-- Add NEW FLOOR MODAL -->

<div class="modal fade" id="addFloorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Floor Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="addFloorForm">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Floor</label>
                    <select id="floor" class="form-control">
                        <option selected>Choose...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputDivision">Bedroom</label>
                <input type="text" class="form-control" id="bedroom" placeholder="Bedroom">
            </div>
        </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputArea">Bathroom</label>
    <input type="text" class="form-control" id="bathroom" placeholder="Bathroom">
  </div>
  <div class="form-group col-md-4">
    <label for="inputDivision">Dining</label>
    <input type="text" class="form-control" id="dining" placeholder="Dining">
  </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Kitchen</label>
      <input type="text" class="form-control" id="kitchen" placeholder="Kitchen">
    </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Garage</label>
        <input type="text" class="form-control" id="garage" placeholder="Garage">
      </div>&nbsp;&nbsp;
    <div class="form-group col-md-4">
<div class="image-upload">
<p><strong>Featured Image</strong></p>
  <input type="file" id="files" name="files[]" multiple />
  <br><br>
<output id="list"></output>
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


@endsection