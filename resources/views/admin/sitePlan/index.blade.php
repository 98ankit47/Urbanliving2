@extends('layouts.admin')
@section('content')

<style>

</style>

<div class="container">
    <h2><strong>Site Plan</strong></h2>
    <hr>
    <div class="content-header-right col-md-6 col-12">
        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="card-bootstrap.html">Cards</a>
            <a class="dropdown-item" href="component-buttons-extended.html">Buttons</a>
        </div>
        </div>
    </div>
</div>

@endsection