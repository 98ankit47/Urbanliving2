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
.card-img {
  margin-left: 20px;
  margin-right:5px;
}
.tabss {
  margin-left: 20px;
}
.feature-row {
  margin-left: 0px;
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
      margin-left: 80%;
    }

    .tabsss {
      margin-left: 45%;
    }
    /* .w3-bottombar {
      width: 500px;
    } */
</style>
</head>

<div class="w3-container">
<br>
<div class="row" style="font-family: Times New Roman;">
<div class="col-md-4 tabsss">
<h4 style="color: black;"><strong>Home Detail</strong></h4>
</div>
<div class="col-md-2">
<a type="button" href="/admin/homes" style="color: white;" class="btn btn-info">Go Back</a>
</div>
</div><hr>
<br>
<div class="w3-row tabss">
    <a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, 'homes');">
      <div class="w3-third tablink w3-bottombar w3-hover-blue-grey w3-padding" style="text-align: center; color:black;"><b>Home</b></div>
    </a>
    <a href="javascript:void(0)" class="tavlinks" onclick="openCity(event, 'features');">
      <div class="w3-third tablink w3-bottombar w3-hover-blue-grey w3-padding" style="text-align: center; color:black;"><b>Features</b></div>
    </a>
  </div>

  <div id="homes" class="w3-container city active" style="display:block">
 <br><br>
 <div class="card">
 <br>
 <div class="row card-details" style="font-family: Times New Roman;">
   @foreach($homes as $home)
      <div class="col-md-3 card-img">
        <div class="card ">
        <img class="card-img-top" src="/uploads/homes/{{$home->featured_image}}" alt="">
        </div>
      </div>
 
        <div class="col-md-6">
          <div class="container details">
          <div class="row">
          <div class="col-md-4">
          <span><strong>NAME :</strong></span>
          </div>
          <div class="col-md-6">
          <span><strong id=''>&nbsp;{{$home->title}}</strong></span>
          </div><br>
          <div class="col-md-4">
          <span><strong>DESCRIPTION :</strong></span>
          </div>
          <div class="col-md-6">
          <span style="font-size: 12px;" id='description'>&nbsp;{{$home->description}}</span>
          </div><br>
          <div class="col-md-4">
          <span><strong>AREA :</strong></span>
          </div>
          <div class="col-md-6">
          <span style="font-size: 12px;" id='area'>&nbsp;{{$home->area}}</span>
          </div><br>
          <div class="col-md-4">
          <span><strong>BUILDER :</strong></span>
          </div>
          <div class="col-md-6">
          <span style="font-size: 12px;" id='builder'>&nbsp;{{$home->builder}}</span>
          </div><br>
          <div class="col-md-4">
            <span><strong>No Of Bedroom :</strong></span>
            </div>
            <div class="col-md-6">
            <span style="font-size: 12px;" id='builder'>&nbsp;{{$home->bedroom}}</span>
            </div><br>
            <div class="col-md-4">
              <span><strong>No Of Bathroom :</strong></span>
              </div>
              <div class="col-md-6">
              <span style="font-size: 12px;" id='builder'>&nbsp;{{$home->bathroom}}</span>
            </div><br>
              <div class="col-md-4">
                <span><strong>No Of Garage :</strong></span>
                </div>
                <div class="col-md-6">
                <span style="font-size: 12px;" id='builder'>&nbsp;{{$home->garage}}</span>
              </div><br>
          <div class="col-md-4">
          <span><strong>STATUS :</strong></span>
          </div>
          <div class="col-md-6">
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
          <span style="font-size: 15px;font-weight:bolder;color:<?php echo $color ?>" id='builder'>&nbsp;{{$status->status}}</span>
          @endforeach
          </div>
          </div><br>
          </div>
        </div>
        <div class="col-md-2"><br><br><br>
        <a type="button" href="/admin/home/edit/{{$home->id}}" style="font-size: 15px;" class="btn btn-success edit-hm-detail">Edit</a>
        </div>
        @endforeach
      </div>
</div>
</div><br>

<div id="features" class="w3-container city" style="display:none; font-family: Times New Roman;"><br>
  <div class="container">
      <div class="col">
      <a type="button" onclick="addFeature()" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-Success add-new">Add New Feature</a>
      </div>
    <br>
    <div class="row">
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
        <div class="modal-content" style="font-family: Times New Roman;">
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
              <input type="text" class="form-control" id="edit_title" name="title" placeholder="">
              @foreach($homes as $home)
              <input type="hidden" class="form-control" id="home_id" name="home_id" placeholder="" value="{{$home->id}}">
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
          <div class="modal-footer" style="font-family: Times New Roman;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  


<!-- Modal -->
  <div class="modal fade" id="AddFeatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="font-family: Times New Roman;">
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
        </div>
        <div class="modal-footer" style="font-family: Times New Roman;">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- Modal -->
 <!--delet Moadal-->

 

<div class="modal fade bd-example-modal-xl" id="deleteFeature" tabindex="-1" role="dialog" aria-labelledby="addNewCommunityTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content" style="font-family: Times New Roman;">
      <div class="modal-header">
        <h5>Delete Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <h6 class="delete_heading">Are you sure, you want to delete this Home ?</h6>
          <div class="clearfix"></div>
          <div class="m-auto" style="font-family: Times New Roman;">
            <button type="button" data-dismiss="modal" class="btn btn-primary"> No </button>
            <button type="submit" id="ys-btn" class="btn btn-danger"> Yes</button>
           </div>  
          </div>    
        </div>
     </div>
   </div>
 </div>
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
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}


</script>

@endsection