@extends('layouts.admin')
@section('content')
<style>
.pull-up{
   margin-left: 20px;
   margin-right: 20px;
   width: 100%;
}

.a_dash {
   margin-left: 40%;
   font-family: "Times New Roman";
}

.cards-row {
   margin-left: 3%;
}

.col-6 {
   margin-left: 40px;
}

.pull-up:hover {
  transform: scale(1.1); 
}

</style>
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
         <h4 class="a_dash"><br><strong>Admin Dashboard</strong></h4>
      </div>
<hr><br>
      <div id="crypto-stats-3" class="row cards-row" style="font-family: Times New Roman;">
         
         <div class="col-xl-5 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href="/admin/homes">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <span class="info" style="color:black;"><strong>counts</strong></span>&nbsp;&nbsp;<span style="color:green;"><b>8</b></span><br><br>
                                 <h5 style="color:black;"><strong>Homes</strong></h5>
                              </div>
                              <div>
                                 <i class="fa fa-home float-right" style="font-size: 50px; color: green;"></i>
                              </div>
                        </div>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-xl-5 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href=" ">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <span class="danger" style="color:black;"><strong>counts</strong></span>&nbsp;&nbsp;<span style="color:#DC143C;"><b>3</b></span><br><br>
                                 <h5 style="color:black;"><strong>Enquiry</strong></h5>
                              </div>
                              <div>
                                 <i class="fa fa-bell float-right" style="font-size: 50px; color: #DC143C;"></i>
                              </div>
                        </div>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-5 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href=" ">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <span class="success" style="color:black;"><strong>counts</strong></span>&nbsp;&nbsp;<span style="color:#4e4eff;"><b>5</b></span><br><br>
                                 <h5 style="color:black;"><strong>Selling Requests</strong></h5>
                              </div>
                              <div>
                                 <i class="fa fa-check-square float-right" style="font-size: 50px; color:#4e4eff;"></i>
                              </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 65%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-5 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href=" ">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <span class="danger" style="color:black;"><strong>counts</strong></span>&nbsp;&nbsp;<span style="color:#0080ff;"><b>7</b></span><br><br>
                                 <h5 style="color:black;"><strong>Lending Requests</strong></h5>
                              </div>
                              <div>
                                 <i class="fa fa-inbox float-right" style="font-size: 50px; color:#0080ff;"></i>
                              </div>
                        </div>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>   <br>


      <div class="card mb-4">
         <div class="card-body">
            <div class="table-responsive" id="custom_table">
                  
                  <!-- <div class="alert alert-success alert-dismissible" style="margin-top:18px;">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                      <strong>Success!</strong>
                  </div> -->
               <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th style="width:40px">S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th style="width:60px">Action</th>
                     </tr>
                  </thead>
                  <tbody id="userdash">
                    
                  </tbody>
               </table>
            </div>
         </div>
      </div>

   </div>


   @endsection