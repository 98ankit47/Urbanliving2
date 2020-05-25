@extends('layouts.admin')
@section('content')
<style>
.pull-up{
   width: 100%;
}

.cards-row {
   text-align:center;
}

.pull-up:hover {
  transform: scale(1.03); 
}
 

</style>



                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-user-md font-large-2 success"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Today's Visit</h5>
                                            <h3 class="text-bold-600">122</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-user-plus font-large-2 warning"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">New Users</h5>
                                            <h3 class="text-bold-600">34</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-calendar-check-o font-large-2 info"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Today's Inquiry</h5>
                                            <h3 class="text-bold-600">3.5K</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-bed font-large-2 danger"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Selling Requests</h5>
                                            <h3 class="text-bold-600">179</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                  <!-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Appointment</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body chartjs">
                                    <canvas id="combo-bar-line" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div> -->
               
                  <div class="row match-height">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Components</h4>
                            </div>
                            <div class="card-content">
                              <div class="card" style="background-color:#283949; margin-left:10px;margin-right:10px;">
                                 <a href="/admin/homes">
                                    <div class="card-body">
                                       <div class="row">
                                          <div class="col-md-6" style="text-align:left;">
                                             <div>
                                                <i class="la la-home" style="font-size: 30px; color: white;"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-6" style="text-align:right;">
                                             <span style="color:white;"><b>50</b></span><br><br>
                                             <span style="color:white;"><b>Home</b></span>
                                          </div>            
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="card" style="background-color:#855fbd; margin-left:10px;margin-right:10px;">
                                 <a href="/admin/community">
                                    <div class="card-body">
                                       <div class="row">
                                          <div class="col-md-6" style="text-align:left;">
                                             <div>
                                                <i class="la la-home" style="font-size: 30px; color: white;"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-6" style="text-align:right;">
                                             <span style="color:white;"><b>23</b></span><br><br>
                                             <span style="color:white;"><b>Community</b></span>
                                          </div>            
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="card" style="background-color:#7158f1; margin-left:10px;margin-right:10px;">
                                 <a href="/admin/floor">
                                    <div class="card-body">
                                       <div class="row">
                                          <div class="col-md-6" style="text-align:left;">
                                             <div>
                                                <i class="la la-bars" style="font-size: 30px; color: white;"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-6" style="text-align:right;">
                                             <span style="color:white;"><b>12</b></span><br><br>
                                             <span style="color:white;"><b>Floor</b></span>
                                          </div>            
                                       </div>
                                    </div>
                                 </a>
                              </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="recent-appointments" class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="#" target="_blank">View all</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content mt-1">
                                <div class="table-responsive" id="custom_table">
                                    <table id="recent-orders-doctors dataTable" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">S.No.</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Status</th>
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
                
        
    <!-- END: Content-->




   @endsection