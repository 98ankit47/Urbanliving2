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
      width: 25%;
    }
</style>

<div class="container" style="font-family: Open Sans, sans-serif;">
<div class="card">
    <div class="wrapper avatar-img" style="height:314px;background-color:#fd5e5e;">
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
            <a href="javascript:void(0)" onclick="openActivity(event, 'Address');">
                <div style="color:white;" class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><b>MY ADDRESS</b></div>
            </a>
        </div>
    </div>
        
    <div class="card-body" style="height:500px;">
        <div id="Recent" class="w3-container city active" style="display:none"><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="text-align:center;background-color:#91a6f4;">
                        <span>12</span><br>
                        <span>YOUR ENQUIRIES</span>
                    </div>
                </div>
                <div class="col-md-8">

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
            <h3><b>My Profile</b></h3><br><br>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName">UserName</label>
                            <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" placeholder="Enter UserName">
                            <small id="NameHelp" class="form-text text-muted">Change Your UserName !</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Change Your Email !</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone">Phone No.</label>
                            <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="numberHelp" placeholder="Enter number">
                            <small id="numberHelp" class="form-text text-muted">Change Your Phone No. !</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Current Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="New Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Passowrd</button>
                    </form>
                </div>  
            </div>
        </div>

        <div id="Address" class="w3-container city" style="display:none"><br>
            <h3><b>My Address</b></h3><br><br>
            <form>
                <div class="form-group">
                    <label for="exampleInputAddress">Address</label>
                    <input type="text" class="form-control" id="exampleInputAddress" aria-describedby="addressHelp" placeholder="Street Address1">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputAddress1">Address 2</label>
                            <input type="text" class="form-control" id="exampleInputAddress1" aria-describedby="addressHelp1" placeholder="Street Address2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputCity">Town/City</label>
                            <input type="text" class="form-control" id="exampleInputCity" aria-describedby="cityHelp" placeholder="Town/City">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputCity">State</label>
                        <select class="form-control">
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputZip">PostalCode/Zip</label>
                        <input type="text" class="form-control" id="exampleInputZip" aria-describedby="zioHelp" placeholder="Zip">
                    </div>
                </div><br>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div><br><br>

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