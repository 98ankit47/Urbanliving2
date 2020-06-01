@extends('layouts.admin')
@section('content')
<style>
    .a_dash {
      font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;
    }
    .tabs {
        margin-left:20px;
        width:90%;
    }
    .tablink {
  background-color: white;
  color: black;
  float: left;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width:100%; 
  text-align:left;
  border:1px solid;
  border-color: gray;
}

.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

</style>

<div class="container-fluid" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
  <h2 class="a_dash"><br><strong>Settings</strong></h2>
<hr><br>

<div class="container tabs"> 
    <a class="tablink" type="button" data-toggle="modal" data-target="#logoModal">
    <div class="bs-callout-danger callout-transparent mt-1">
      <div class="media align-items-stretch">
        <div class="media-left media-middle bg-danger position-relative callout-arrow-left p-2  d-flex align-items-center">
          <i class="la la-hand-o-right white font-medium-5"></i>
        </div>
        <div class="media-body p-1">
          <strong>Click Here!</strong>
          <p>Change your Logo and set new Logo</p>
        </div>
      </div>
    </div>
    </a>
</div>

<div class="container tabs"> 
    <a class="tablink" type="button" data-toggle="modal" data-target="#changepass">
      <div class="bs-callout-primary callout-transparent">
        <div class="media align-items-stretch">
          <div class="media-left media-middle bg-primary position-relative callout-arrow-left p-2  d-flex align-items-center">
            <i class="la la-send-o fa-lg white font-medium-5"></i>
          </div>
          <div class="media-body p-1">
            <strong>Click Here!</strong>
            <p>Change your Password, and set new password.</p>
          </div>
        </div>
      </div>
    </a>
</div>

</div>

<!--Change Logo Modal-->

<div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="logoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Add Logo</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form id="Logo">  
      <div class="modal-body">
        <div class="card">
            <div class="image-upload">
                <p style="text-align:center; margin-top:10px;"><input type="file" name="files[]" id="files"  onchange="loadFile(event)" required></p><br>
                <p style="text-align:center;"><img id="output" width="400px" height="300px" /></p>
            </div>
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


<!--Change Password Modal-->

<div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="changepass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Reset Password</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="details-containerr">
            <div class="form-group">
                <label for="inputTitle">Current Password</label>
            <input type="hidden"  class="form-control" id="id" value="{{Auth::user()->id}}" required>
                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" id="current" required>
            </div>
            <div class="form-group">
                <label for="inputTitle">New Password</label>
                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" id="newpass" required>
            </div>
            <div class="form-group">
                <label for="inputTitle">Confirm New Pasword</label>
                <input type="password"  class="form-control" id="Confirmpass" required>
            </div>
        <button type="button" style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
        <button type="submit" style="color:white;width:120px;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
    </form>
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