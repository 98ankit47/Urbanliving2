@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
 <style>
.details {
  text-align: left;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* .tabss {
  margin-left: 20px;
} */

table {
  font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.thumb {
        height: 150px;
        width: 200px;
    }

    .add-new {
      text-align:right;
    }

    .home-contain {
      text-align:left;
    }
    .w3-bottombar {
      width: 20%;
    }

    .card-details {
      margin-left:10px;
      margin-right:10px;
      margin-top:20px;
    }

    .w3-third:hover {
      background-color:#347AB8;
    }

    .container-gall {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: #D3D3D3;
}

.container-gall:hover .overlay {
  opacity: 0.5;
}

.icon {
  color: black;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.la-trash:hover {
  color: red;
}
</style>

<div class="container-fluid" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
<br>
  <div class="row">
    <div class="col-md-6" style="text-align:left">
      <h2 style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"><strong>Home Details</strong></h2>
    </div>
    <div class="col-md-6" style="text-align:right;">
      <a type="button" href="/admin/homes" style="color: white;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" class="btn btn-secondary"><i class="la la-chevron-circle-left"></i> Go Back</a>
    </div>
  </div>
<hr>
<br>

<div class=" container w3-row tabss" style="font-family: 'Quicksand', Georgia, 'Times New Roman',
 Times, serif;">
    <a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, 'homes');">
      <div class="w3-third tablink w3-bottombar w3-padding" type="button" style="text-align: center; color:black; font-size:15px;"><b>Home</b></div>
    </a>
    <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'features');">
      <div class="w3-third tablink w3-bottombar w3-padding" type="button" style="text-align: center; color:black; font-size:15px;"><b>Features</b></div>
    </a>
    <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'gallery');">
      <div class="w3-third tablink w3-bottombar w3-padding" type="button" style="text-align: center; color:black; font-size:15px;"><b>Gallery</b></div>
    </a>
    <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Availability');">
      <div class="w3-third tablink w3-bottombar w3-padding" type="button" style="text-align: center; color:black; font-size:15px;"><b>Availability</b></div>
    </a>
    <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Broucher');">
      <div class="w3-third tablink w3-bottombar w3-padding" type="button" style="text-align: center; color:black; font-size:15px;"><b>Broucher</b></div>
    </a>
</div>

  <div id="homes" class="w3-container city active" style="display:block;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"><br><br>
    <div class="card">
      <div class="row card-details" style="font-family: Open Sans, sans-serif;">
       @foreach($homes as $home)
        <div class="col-md-6 card-img">
          <div class="card ">
            <img class="card-img-top" style="height: 350px;" src="/uploads/homes/{{$home->featured_image}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <table>
            <tr>
              <td><strong>NAME</strong></td>
              <td id=''>{{$home->title}}</td>
            </tr>
            <tr>
              <td><strong>DESCRIPTION</strong></td>
              <td id="description">{{$home->description}}</td>
            </tr>
            <tr>
              <td><strong>AREA</strong></td>
              <td id="area">{{$home->area}}</td>
            </tr>
            <tr>
              <td><strong>BUILDER</strong></td>
              <td id="builder">{{$home->builder}}</td>
            </tr>
            <tr>
              <td><strong>NO. OF BEDROOM</strong></td>
              <td id="bedroom">{{$home->bedroom}}</td>
            </tr>
            <tr>
              <td><strong>NO. OF BATHROOM</strong></td>
              <td id="bathroom">{{$home->bathroom}}</td>
            </tr>
            <tr>
              <td><strong>NO. OF GARAGE</strong></td>
              <td id="garage">{{$home->garage}}</td> 
            </tr>
            <tr>
              <td><strong>Location Name</strong></td>
              @foreach ($community as $com)
              <td id="community">{{$com->title}}</td>
              @endforeach  
            </tr>
            <tr>
              <td><strong>STATUS</strong></td>
              @foreach($statuses as $status)
              <?php
              $color;
              if($status->status=="Available")
            {
              $color="green";
            }
            else if($status->status=="Hold")
            {
              $color="Pink";
            }
            else if($status->status=="Sold")
            {
              $color="Red";
            }
            else if($status->status=="Under Construction")
            {
              $color="Yellow";
            }
            ?>
              <td style="font-size: 15px;font-weight:bolder;color:<?php echo $color ?>" id='status'>
              {{$status->status}}
              </td>
              @endforeach
            </tr>
          </table>
         <br>         
        </div>
      </div>
        @endforeach
        <div class="column" style="text-align:center; margin-bottom: 20px;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
          <a type="button" href="/admin/home/edit/{{$home->id}}" style="width: 40%;color:white;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn">Edit</a>
        </div>
    </div>
</div><br>

<div id="features" class="w3-container city" style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"><br>
  
    <br>
  <div class="feature-row row" id="feature_list">
              
  </div>
</div>

<!-- Gallery -->

<div id="gallery" class="w3-container city row" style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"><br>
    
</div> 


<div id="Availability" class="w3-container city" style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"><br>
  <div class="container">
    
    <div class="row" style="text-align: center;" id="homeAvial">
                         
    </div>  
  </div>
</div>

<div id="Broucher" class="w3-container city" style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"><br>
  <div class="container">
    <div class="heading-elements">
     
    </div>
    <div class="row" style="text-align: center;" id="pdfShow">
                         
    </div>  
  </div>
</div>

</div> 
<!-- EDIT FEATURE MODAL-->

<div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="Editfeature" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Features</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form id="editFeature">
            <div class="form-group">
              @csrf
              <label for="inputProperty">Feature Name</label>
              <input type="text" class="form-control" id="edit_title" name="title" placeholder="" pattern="^[a-zA-Z][\sa-zA-Z]*" required>
              @foreach($homes as $home)
              <input type="hidden" class="form-control" id="home_id" name="home_id" placeholder="" value="{{$home->id}}" required>
          @endforeach
            </div>
            <div class="form-group">
            <div class="row">
              <div class="col-md-6">
            <label for="img">Select image:</label>
            <input type="file" id="image" name="featured-image"  accept="image/*">
            </div>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
            <button type="submit" style="color:white;width:120px;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

<!-- ADD FEATURE Modal -->

<div class="modal fade" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="AddFeatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Features</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="addFeature" name="AddFeature" >
          <div class="form-group">
            @csrf
            <label for="inputProperty">Feature Name</label>
            <input type="text" class="form-control" id="title" required pattern="^[a-zA-Z][\sa-zA-Z]*" name="title" placeholder="">
            @foreach($homes as $home)
            <input type="hidden" class="form-control" id="home_id" name="home_id" placeholder="" value="{{$home->id}}">
        @endforeach
          </div>
          <div class="form-group">
          <div class="row">
            <div class="col-md-6">
            <form action="/action_page.php">
          <label for="img">Select image:</label>
          <input type="file" id="image" name="featured-image" required accept="image/*">
          </form>
          </div>
        </form>
        </div><br>
        <div class="modal-footer">
          <button type="button"  style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
          <button type="submit" style="color:white;width:120px;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--DELETE FEATURE MODAL--> 

<div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 
'Times New Roman', Times, serif;" id="deletePdf" tabindex="-1" role="dialog" 
aria-labelledby="" aria-hidden="true">
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
          <h6 class="delete_heading">Are you sure, you want to delete this Pdf ?</h6>
            <div class="clearfix">
            </div>
          <div class="m-auto">
            <button type="button" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary" data-dismiss="modal"> No </button>
            <button type="submit"  style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" id="ys-pdf"> Yes</button>
          </div>  
        </div>    
      </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="deleteFeature" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
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
          <h6 class="delete_heading">Are you sure, you want to delete this Feature ?</h6>
            <div class="clearfix">
            </div>
          <div class="m-auto">
            <button type="button" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary" data-dismiss="modal"> No </button>
            <button type="submit"  style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" id="ys-btn"> Yes</button>
          </div>  
        </div>    
      </div>
    </div>
  </div>
</div>

 <!-- GALLERY Modal -->

<div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="deleteGallery" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Delete Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-left:10px;">
          <h6 class="delete_heading">Are you sure, you want to delete this Gallery Image ?</h6>
            <div class="clearfix">
            </div>
          <div class="m-auto">
            <button type="button" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary" data-dismiss="modal"> No </button>
            <button type="submit"  style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" id="ys-gal-btn"> Yes</button>
          </div>     
        </div>
      </div>
    </div>
  </div>
</div>

<!--AVAILABLE DELETE MODAL-->

 <div class="modal fade bd-example-modal-xl" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="deleteAvail" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
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
          <h6 class="delete_heading">Are you sure, you want to delete this Home Availability ?</h6>
          <div class="clearfix"></div>
          <div class="m-auto">
            <button type="button" style="color:white;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary" data-dismiss="modal"> No </button>
            <button type="submit"  style=" color:white;font-weight:bold" class="btn w3-100 btn-warning mr-1" id="ys-Avail-btn"> Yes</button>
          </div>  
        </div>    
      </div>
     </div>
   </div>
 </div>


 <div class="modal fade" style="font-family: 'Quicksand', Georgia,
  'Times New Roman', Times, serif;" id="galleryModal" tabindex="-1" role="dialog"
   aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Add Multiple Gallery Image</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form id="galleryupdate" name="gallery1">  
      <div class="modal-body">
            <div class="image-upload">
              <input type="file" id="files" name="files[]" multiple  required/>
              <br><br>
              <output id="list" width="220px" height="220px"></output>
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

<!--MAP SHOW MODAL-->

  <div class="modal" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;" id="Mapshow">
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
        <form id="latlngAvb">
          <input type="hidden" id="lat">
          <input type="hidden" id="lng">
          <div class="modal-footer">
            <button type="submit" style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-primary"><i class="la la-check-square-o"></i> Save</button>
            <button type="button" style="color:white;width:100px;text-align:center;font-weight:bold;" class="btn w3-100 btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<!--BROUCHER MODAL-->
<div class="modal fade" id="myBroucher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD BROUCHER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="pdfUpload">
        <div class="modal-body">
          <span><b>UPLOAD PDF FILE HERE :</b></span><br><br>
            <input type="file" id="pdf" name="pdf">
            <!-- <input type="submit"> -->
        </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i class="ft-x"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="la la-check-square-o"></i> Save</button>
      </form>
      </div>
    </div>
  </div>
</div>

<script>


$("#pdf").change(function() {
    processPdf(this);
  });


// Tabs
$('#deleteFeature').on('show.bs.modal', function (e) {
    var $trigger = $(e.relatedTarget);
    var id=$trigger.data('id');
    $('#ys-btn').click(function()
    {
      $('#deleteFeature').modal('hide');
      $('.modal-backdrop').css('display','none');
        deleteFeature(id);

    });
});

$('#deleteGallery').on('show.bs.modal', function (e) {
    var $trigger = $(e.relatedTarget);
    var id=$trigger.data('id');
    $('#ys-gal-btn').click(function()
    {
      $('#deleteGallery').modal('hide');
      $('.modal-backdrop').css('display','none');
      deleteGallery(id)
    });
});

$('#deleteAvail').on('show.bs.modal', function (e) {
    var $trigger = $(e.relatedTarget);
    var id=$trigger.data('id');
    $('#ys-Avail-btn').click(function()
    {
      $('#deleteAvail').modal('hide');
      $('.modal-backdrop').css('display','none');
        deleteAvail(id);

    });
});
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}


</script>


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
            span.innerHTML = ['<img class="thumb" width="250px" height="250px" src="', e.target.result,
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