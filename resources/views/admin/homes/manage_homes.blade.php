@extends('layouts.admin')
@section('content')
<style>
.details {
  text-align: left;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}
/* .card-img {
  margin-left: 20px;
} */
.tabss {
  margin-left: 20px;
}
.feature-row {
  margin-left: 0px;
}
table {
  font-family: Open Sans, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .thumb {
        height: 150px;
        width: 200px;
    }

    .add-new {
      text-align:right;
    }

    .tabsss {
      text-align:left;
    }
    /* .w3-bottombar {
      width: 500px;
    } */
    .card-details {
      margin-left:10px;
      margin-right:10px;
      margin-top:20px;
    }
    .w3-third:hover {
      background-color:#347AB8;
    }
</style>
</head>

<div class="w3-container">
<br>
<div class="row" style="font-family: Open Sans, sans-serif;">
<div class="col-md-5">
<a type="button" href="/admin/homes" style="color: white; background-color:#00BCD4; font-family: Open Sans, sans-serif;" class="btn">Go Back</a>
</div>
<div class="col-md-7 tabsss">
<h4 style="color: black;"><strong>Home Detail</strong></h4>
</div>
</div><hr>
<br>
<div class="w3-row tabss">
    <a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, 'homes');">
      <div class="w3-third tablink w3-bottombar w3-padding" style="text-align: center; color:black; font-family: Open Sans, sans-serif;"><b>Home</b></div>
    </a>
    <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'features');">
      <div class="w3-third tablink w3-bottombar w3-padding" style="text-align: center; color:black; font-family: Open Sans, sans-serif;"><b>Features</b></div>
    </a>
    <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'gallery');">
      <div class="w3-third tablink w3-bottombar w3-padding" style="text-align: center; color:black; font-family: Open Sans, sans-serif;"><b>Gallery</b></div>
    </a>
    <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Availability');">
      <div class="w3-third tablink w3-bottombar w3-padding" style="text-align: center; color:black; font-family: Open Sans, sans-serif;"><b>Availability</b></div>
    </a>
  </div>

  <div id="homes" class="w3-container city active" style="display:block">
 <br><br>
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
    <td><strong>Community Name</strong></td>
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
        
          <div class="column" style="text-align:center; margin-bottom: 20px;">
            <a type="button" href="/admin/home/edit/{{$home->id}}" style="width: 40%; font-family: Open Sans, sans-serif;color:white;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn">Edit</a>
          </div>
      </div>
</div><br>


<!-- Gallery -->


<div id="gallery" class="w3-container city row" style="display:none; font-family: Open Sans, sans-serif;"><br>
    
</div> 


<div id="Availability" class="w3-container city" style="display:none; font-family: Open Sans, sans-serif;"><br>
  <div class="container">
      <div class="container add-new">
        <a type="button" onclick="loadmap()" style="color:white; background-color:#2DCC70; font-family: Open Sans, sans-serif;font-weight:bold" class="btn">Add Location</a>
      </div>
    <br><br>
    <div class="row" style="text-align: center; font-family: Open Sans, sans-serif;" id="homeAvial" >
                         
    </div>  
    </div>
  </div>


  <div class="modal" id="Mapshow">
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
            <button type="submit" style="color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100">Sumbit</button>
            <button type="button" style="color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<div id="features" class="w3-container city" style="display:none; font-family: Open Sans, sans-serif;"><br>
  <div class="container">
      <div class="container add-new">
        <a type="button" onclick="addFeature()" style="color:white; background-color:#2DCC70; font-family: Open Sans, sans-serif;font-weight:bold" class="btn">Add Feature</a>
      </div>
    <br><br>
    <div class="row" style="text-align: center; font-family: Open Sans, sans-serif;">
                        <div class="col-md-4">
                            <span><strong>FEATURE IMAGE</strong></span><br>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <span><strong>FEATURE NAME</strong></span><br>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <span><strong>ACTIVITY</strong></span>
                            <hr>
                        </div>
                    </div>  
    <br>
    <div class="feature-row" id="feature_list">
              
      

    </div>
 
   
          

    <div class="modal fade" id="Editfeature" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="font-family: Open Sans, sans-serif;">
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
              <input type="text" class="form-control" id="edit_title" name="title" placeholder="" required>
              @foreach($homes as $home)
              <input type="hidden" class="form-control" id="home_id" name="home_id" placeholder="" value="{{$home->id}}" required>
          @endforeach
            </div>
            <div class="form-group">
            <div class="row">
             
              <div class="col-md-6">
            <label for="img">Select image:</label>
            <input type="file" id="image" name="featured-image" accept="image/*">
            </div>
          </form>
          </div>
          <div class="modal-footer" style="font-family: Open Sans, sans-serif;">
            <button type="button" style=" color:white; background-color:#F6454F; font-family: Open Sans, sans-serif;;font-weight:bold" class="btn w3-100" data-dismiss="modal">Close</button>
            <button type="submit" style="font-family: Open Sans, sans-serif;color:white;width:120px;text-align:center;font-weight:bold; background-color:#2DCC70;" class="btn w3-100">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  


<!-- Modal -->
  <div class="modal fade" id="AddFeatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="font-family: Open Sans, sans-serif;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Features</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="addFeature">
          <div class="form-group">
            @csrf
            <label for="inputProperty">Feature Name</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="">
            @foreach($homes as $home)
            <input type="hidden" class="form-control" id="home_id" name="home_id" placeholder="" value="{{$home->id}}">
        @endforeach
          </div>
          <div class="form-group">
          <div class="row">
            <div class="col-md-6">
            <form action="/action_page.php">
          <label for="img">Select image:</label>
          <input type="file" id="image" name="featured-image" accept="image/*">
          </form>
          </div>
        </form>
        </div><br>
        <div class="modal-footer" style="font-family: Times New Roman;">
          <button type="button"  style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100" data-dismiss="modal">Close</button>
          <button type="submit" style="font-family: Open Sans, sans-serif;color:white;width:120px;text-align:center;font-weight:bold; background-color:#2DCC70;" class="btn w3-100">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- Modal -->
 <!--delet Modal-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="helloo" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="font-family: Open Sans, sans-serif;">
      <div class="modal-header">
        <h5>Delete Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-left:10px;">
          <h6 class="delete_heading">Are you sure, you want to delete this Feature ?</h6>
          <div class="clearfix"></div>
          <div class="m-auto" style="font-family: Times New Roman;">
            <button type="button" style="font-family: Open Sans, sans-serif;color:white;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100" data-dismiss="modal"> No </button>
            <button type="submit"  style=" color:white; background-color:#2DCC70; font-family: Open Sans, sans-serif;;font-weight:bold" class="btn w3-100" id="ys-btn"> Yes</button>
           </div>  
          </div>    
        </div>
     </div>
   </div>
 </div>
 

<div class="modal fade bd-example-modal-xl" id="deleteFeature" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="font-family: Open Sans, sans-serif;">
      <div class="modal-header">
        <h5>Delete Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-left:10px;">
          <h6 class="delete_heading">Are you sure, you want to delete this Feature ?</h6>
          <div class="clearfix"></div>
          <div class="m-auto" style="font-family: Times New Roman;">
            <button type="button" style="font-family: Open Sans, sans-serif;color:white;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn w3-100" data-dismiss="modal"> No </button>
            <button type="submit"  style=" color:white; background-color:#2DCC70; font-family: Open Sans, sans-serif;;font-weight:bold" class="btn w3-100" id="ys-btn"> Yes</button>
           </div>  
          </div>    
        </div>
     </div>
   </div>
 </div>


 

<script>
$(document).on('click', '#galleryModal' function(ev) {
  $('#exampleModal').modal('show'); 
    });   
</script>

<script>
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
@endsection