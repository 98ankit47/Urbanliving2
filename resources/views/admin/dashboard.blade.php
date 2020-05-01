@extends('layouts.admin')
@section('content')
<style>
.pull-up{
   width: 100%;
}

.a_dash {
   margin-left: 40%;
   font-family: Open Sans, sans-serif;
}

.cards-row {
   text-align:center;
}

.pull-up:hover {
  transform: scale(1.1); 
}

#card1 {
   border-radius: 25px;
  /* border: 2px solid #29b17f; */
  
}

#card2 {
   border-radius: 25px;
  /* border: 2px solid #fe425f; */
  
}

</style>

<body style="font-family: Open Sans, sans-serif;">
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
         <h4 class="a_dash"><br><strong>Admin Dashboard</strong></h4>
      </div>
<hr><br>

<div class="container" style="text-align:center;">
   <div class="row">
      <div class="col-md-4">
         <div class="card" style="background-color: #ee4f4c; color:white;">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-4" style="text-align:left;">
                     <div>
                        <i class="fa fa-address-card" style="font-size: 30px; color: white;"></i>
                     </div>
                  </div>
                  <div class="col-md-8" style="text-align:right;">
                     <span><b>188</b></span><br>
                     <span><b>Today's Visits</b></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card" style="background-color: #7158f1;color:white;">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6" style="text-align:left;">
                     <div>
                        <i class="fa fa-user-plus" style="font-size: 30px; color: white;"></i>
                     </div>
                  </div>
                  <div class="col-md-6" style="text-align:right;">
                     <span><b>45</b></span><br>
                     <span><b>New Users</b></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card" style="background-color:#09d99f;color:white;">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6" style="text-align:left;">
                     <div>
                        <i class="fa fa-shopping-bag" style="font-size: 30px; color: white;"></i>
                     </div>
                  </div>
                  <div class="col-md-6" style="text-align:right;">
                     <span><b>1008</b></span><br>
                     <span><b>Total sale</b></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<br><br>
      <div id="crypto-stats-3" class="container">
         <div class="row">
         <div class="col-md-4">
         
            <div class="card pull-up" id="card1" style="background-color:#283949 ;">
               <div class="card-content">
                  <a href="/admin/homes">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <span class="info" style="color:white;"><strong>counts</strong></span>&nbsp;&nbsp;<span style="color:white;"><b>8</b></span><br><br>
                                 <h5 style="color:white;"><strong>Homes</strong></h5>
                              </div>
                              <div>
                                 <i class="fa fa-home float-right" style="font-size: 40px; color: white;"></i>
                              </div>
                        </div>
                     </div>
                  </a>
               </div>
         </div>
         
            <div class="card pull-up" id="card2" style="background-color: #855fbd;">
               <div class="card-content">
                  <a href="/admin/community">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <span class="danger" style="color:white;"><strong>counts</strong></span>&nbsp;&nbsp;<span style="color:white;"><b>3</b></span><br><br>
                                 <h5 style="color:white;"><strong>Community</strong></h5>
                              </div>
                              <div>
                                 <i class="fa fa-home float-right" style="font-size: 40px; color: white;"></i>
                              </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="card pull-up" id="card2" style="background-color: #fbb836;">
               <div class="card-content">
                  <a href="/admin/floor">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <span class="danger" style="color:white;"><strong>counts</strong></span>&nbsp;&nbsp;<span style="color:white;"><b>3</b></span><br><br>
                                 <h5 style="color:white;"><strong>Floor</strong></h5>
                              </div>
                              <div>
                                 <i class="fa fa-terminal float-right" style="font-size: 40px; color: white;"></i>
                              </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         
      <div class="col-md-8">
      <div class="card" style="margin-left:10px; margin-right:10px;">
         
            <div class="table-responsive" id="custom_table">
                  
                  <!-- <div class="alert alert-success alert-dismissible" style="margin-top:18px;">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                      <strong>Success!</strong>
                  </div> -->
               <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th style="width:40px;background-color:#30394c;color:white;">S.No.</th>
                        <th style="background-color:#30394c;color:white;">Name</th>
                        <th style="background-color:#30394c;color:white;">Email</th>
                        <th style="background-color:#30394c;color:white;">Status</th>
                        <th style="width:60px;background-color:#30394c;color:white;">Action</th>
                     </tr>
                  </thead>
                  <tbody id="userdash">
                    
                  </tbody>
               </table>
            </div>
         </div>
         </div>
      </div>
      </div>
</body>

   @endsection