@extends('layouts.admin') 
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Pages </h3>
                    </div>  
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Featured Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="pages_list">
                            
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    @endsection