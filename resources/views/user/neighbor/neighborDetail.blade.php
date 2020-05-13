@extends('layouts.user') 
@section('content')

<div class="container">
<a href="/neighbor"><i style="font-size:25px;color:gray;" class="fa fa-arrow-left"></i></a>
<div class="row" id="overview" style="font-family: Open Sans, sans-serif;">
        <div class="col-md-8"><br>
            <div class="card" style="height:34.6rem; text-align:center;">
                <div class="row inner">
                    <div class="col-md-8">      
                        <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU" style="height:553px; width:100%;">
                    </div>
                    <div class="col-md-4" style="text-align:left;"><br><br>
                        <h4>BALLAIRE</h4><br>
                        <span style="font-size:15px;color:gray;">BELLAIRE IS A SUBURB OF HOUSTON WITH A POPULATION OF 18,479. BELLAIRE IS 
                                IN HARRIS COUNTY AND IS ONE OF THE BEST PLACES TO LIVE IN TEXAS. LIVING IN BELLAIRE OFFERS RESIDENTS 
                                A SUBURBAN FEEL AND MOST RESIDENTS OWN THEIR HOMES. IN BELLAIRE THERE ARE A LOT OF RESTAURANTS, 
                                COFFEE SHOPS, AND PARKS.
                        </span><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"><br>
        <div class="card" style="height:34.6rem;">
            <div class="card-body" style="text-align:center;">
                <h4>Contact Us</h4><br>
                <form id="enquiry" style="font-family: Open Sans, sans-serif; text-align:left;">                
                        <div class="form-group">
                            <label for="inputTitle">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="mail" required>
                        </div>
                         
                        <div class="form-group">
                            <label for="inputTitle">Phone No.</label>
                            <input type="text" class="form-control" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Message</label><br>
                            <textarea name="message" id="message" cols="41" rows="2" class="form-control"></textarea>
                        </div><br>
                        <button type="submit" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn w-100">SEND</button> 
                     <div class="row">
                        <div class="col-md-6"> <br>
                            <button type="button" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:gray;" class="btn w-100">CHAT</button> 
                        </div>
                        <div class="col-md-6"> <br>
                            <button type="button" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:gray;" class="btn w-100">EMAIL</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
</div>

@endsection