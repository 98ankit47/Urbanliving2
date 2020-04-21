@extends('layouts.user')
  @section('content')
    <div class="row">
      <div class="card col-md-6"  >
        <div class="card-body">
          <div class="card" style=" background-color: lightgray;">
            <div class="card-body">
              <h3>Seach Development</h3><br>
              <form action="/search" class="form-inline my-2 my-lg-0" method="get">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
              </form>
            </div> 
            <a href="/all-development" class="btn btn-outline-info ">All Development</a>
          </div>
        </div>
      </div>
      <div class="card-body col-md-6">
          <div class="card" style=" background-color: lightgray;">
            <div class="card-body">
              <h3>Seach Home Map Location</h3><br>
               
            </div> 
            <a href="/home-map" class="btn btn-outline-info ">Open Map</a>
          </div>
        </div>
    </div>
  @endsection
 

