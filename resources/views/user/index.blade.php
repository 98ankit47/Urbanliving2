@extends('layouts.user')
  @section('content')
    <div class="card" style="width: 70rem;">
      <div class="card-body">

        <div class="card" style="width: 20rem; background-color: lightgray;">
          <div class="card-body">
            <h3>Seach Development</h3><br>
            <form action="/search" class="form-inline my-2 my-lg-0" method="get">
              <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
            </form>
          </div> 
        </div>
      <a href="/all" class="btn btn-outline-info">All Development</a>

      </div>
    </div>
  @endsection
 

