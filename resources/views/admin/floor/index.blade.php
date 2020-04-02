@extends('layouts.admin')
@section('content')
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
            <button onclick="addFloor()" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-Success">Add New</button>
        </div>
    </div>
<hr>

<button onclick="editfloor(1)" style="font-size: 15px;" class="btn btn-warning">Edit</button>


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
