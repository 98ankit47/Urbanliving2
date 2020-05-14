@extends('layouts.user') 
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.avatar {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}

.avatar-img {
  text-align:center;
}

.w3-bottombar {
      width: 33.33%;
    }
</style>

<div class="container" style="font-family: Open Sans, sans-serif;">
<div class="card">
    <div class="wrapper avatar-img" style="height:350px;background-color:#fd5e5e;">
    <div class="back" style="text-align:left;margin-left:15px;margin-top:15px;" >
    <a href="#"><i style="font-size:25px;color:white;" class="fa fa-arrow-left"></i></a>
    </div>
        <img style="margin-top:7%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTloAqJtQ5buNfQE58fMkIhGZJlcoh1cEgHbIIFh13r2TkYNM_E&usqp=CAU" alt="Avatar" class="avatar">
        <br><br><br>
        <div class="w3-row">
            <a href="javascript:void(0)" class="tablinks active" onclick="openActivity(event, 'Recent');">
                <div style="color:white;" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding active"><b>RECENT ACTIVITY</b></div>
            </a>
            <a href="javascript:void(0)" onclick="openActivity(event, 'Favorite');">
                <div style="color:white;" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><b>FAVORITES</b></div>
            </a>
            <a href="javascript:void(0)" onclick="openActivity(event, 'Account');">
                <div style="color:white;" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><b>MY ACCOUNT</b></div>
            </a>
        </div>
    </div>
        
    <div class="card-body" >
        <div id="Recent" class="w3-container city active" style="display:none"><br><br>
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="text-align:center;background-color:#91a6f4;color:white;height:70px;">
                        <span style="font-size:20px;"><b>3</b></span>
                        <span style="font-size:20px;">MY ENQUIRIES</span>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card accordion" id="accordionExample">
                        <div class="card-header" id="headingOne" style="height:70px;">
                            <div class="row" id="tour">
                                
                            </div>
                            <div class="row showbtn" style="text-align:center;">
                                <div class="col-md-12">
                                    <button class="btn btn-link" style="color:black;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        See More &nbsp;<i class="fa fa-arrow-down" aria-hidden="true"></i>
                                    </button>
                                 </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card">
                                <div class="card-body">
                                    Second Message sent by the user will be displayed here.
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    Third Message sent by the user will be displayed here.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><hr><br>
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="text-align:center;background-color:#91a6f4;color:white;height:120px;">
                        <br><span style="font-size:20px;"><b>1</b></span><br>
                        <span style="font-size:20px;">MY Selling Request</span>
                    </div>
                </div> 
                <div class="col-md-9">
                    <div class="row" id="sellrequest">
                        <div class="col-md-4">
                            <div class="card" style="">
                                <img class="card-img-top" style="height:120px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU">
                                <div class="card-body">
                                    <span>Forest House</span><br><br>
                                    <button style="color:white;width:100%;text-align:center;font-weight:bold; background-color:#2DCC70;" class="btn">VIEW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <div id="Favorite" class="w3-container city" style="display:none"><br>
        <h3><b>My Favorites</b></h3><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" style="height:200px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU">
                        <div class="card-body">
                            <button style="color:white;width:100%;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn">Remove From Favorite</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" style="height:200px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6FKg7LOZ32716WR_CzKNDh-DtZSKHNnWFwTxoxYjxms-SbBhU&usqp=CAU">
                        <div class="card-body">
                            <button style="color:white;width:100%;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn">Remove From Favorite</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" style="height:200px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT0SD6h1f2t6g5HreAWg9zv2FV2BIZ-i39EcmfJ9VQCKSz_YgBm&usqp=CAU">
                        <div class="card-body">
                            <button style="color:white;width:100%;text-align:center;font-weight:bold; background-color:#F6454F;" class="btn">Remove From Favorite</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Account" class="w3-container city" style="display:none"><br>
            <div id="success"></div>
            <h3><b>My Profile</b></h3><br>
            <div class="row">
                <div class="col-md-6">
                    <form id="userdetail">
                        <div class="form-group">
                            <label for="exampleInputName">UserName</label>
                            <input type="text" class="form-control" id="username" aria-describedby="NameHelp" value="{{ Auth::user()->name }}">
                            <small id="username" class="form-text text-muted">Change Your UserName !</small>
                        </div>
                        <input type="hidden" class="form-control" id="id" value="{{Auth::user()->id}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" 
                            aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                            <small id="emailHelp" class="form-text text-muted">Change Your Email !</small>
                        </div>
                        <div class="updatebtn" style="text-align:center;">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form id="changepass">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Current Password</label>
                            <input type="password" class="form-control" id="current" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">New Password</label>
                            <input type="password" class="form-control" id="newpass" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">New Password</label>
                            <input type="password" class="form-control" id="Confirmpass" placeholder="Confirm Password">
                        <input type="hidden" class="form-control" id="id" value="{{Auth::user()->id}}">
                        </div>
                        <div class="updatebtn" style="text-align:center;">
                            <button type="submit" class="btn btn-primary">Update Passowrd</button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
 
    </div>
</div>

</div>

<script>
function openActivity(evt, cityName) {
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
