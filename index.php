<?php

include('security.php');

include('includes/header.php');
include('includes/navbar.php');


 ?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TOTAL REGISTERD ADMIN</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                   
                       <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM admintables ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                              echo 'Toal Admin = '.$row;
                                 
  ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">?????? ???????????? ?????????</div>
                        

                      
                      <?php
                  require 'dbconfig.php';
             $query = "SELECT id FROM records where leavestatus='no' && alive='yes' ORDER BY id";
             $query_run = mysqli_query($connection,$query);
             $row = mysqli_num_rows($query_run);
                 ?>
           <div class="h6 mb-0 font-weight-bold text-gray-800"> <?php  echo '?????? ???????????? ????????? = '.$row;
 ?>
                                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">?????? ?????? ???????????? ?????????????????? ???????????? ?????????</div>
   


   <?php
      require 'dbconfig.php';
      $query = "SELECT id FROM records where leavestatus='yes' && alive='yes'  ORDER BY id";
      $query_run = mysqli_query($connection,$query);
             $row = mysqli_num_rows($query_run);
             ?>
             <div class="h8 mb-0 font-weight-bold text-gray-800"> <?php   echo '?????? ???????????? ?????????????????? = '.$row;
                 ?></div>
 

                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">?????? ?????? ?????????  ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          

                          <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='no'  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '?????? ?????? ????????? = '.$row;
                                    ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->





          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> ??????????????? ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                         



                          
                          <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && gender='male' ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '???????????? = '.$row;
                                    ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

   





            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">???????????? ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          

                          <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && gender='female' ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????? = '.$row;
                                    ?></div>

                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????? ?????? ??????????????? ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM service  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '??????????????? = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">???????????? ????????? ????????? ????????? ??????????????? </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM newbornagiann ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????? ????????? ???????????????= '.$row;
                                    ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>













 <!-- Earnings (Monthly) Card Example -->
 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">??? ??????  ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && wstatus='married' ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '??? ?????? ???????????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>









<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????????  ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && wstatus='single' ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '???????????? ???????????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>










<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">?????????????????? ???????????? ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && levelofschool='certificate' ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '?????????????????? ????????????  ????????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>







<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????? ????????????  ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && levelofschool='degree' ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????? ????????????  ????????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



               

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">??????????????? ????????????  ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && levelofschool='masters' ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '??????????????? ????????????  ????????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>









<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">??????????????? ????????????  ??????????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && levelofschool='doctrate' ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '??????????????? ????????????  ????????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




                 





<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????????  ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM family  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????????  ?????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



         

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">???????????? ?????? ???????????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM child  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '???????????? ?????? ???????????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">???????????? ?????????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM gift  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '???????????? ?????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


   

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">???????????? ????????? </div>
              
                      
                      <?php
                  require 'dbconfig.php';
                  
             $query = "SELECT id FROM felloship  ORDER BY id";
             $query_run = mysqli_query($connection,$query);
             $row = mysqli_num_rows($query_run);
                 ?>
           <div class="h6 mb-0 font-weight-bold text-gray-800"> <?php  echo '???????????? ?????????  = '.$row;
 ?>
                                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>






<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????? ??????????????? ??????????????? ??????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM newbornagiann where baptized='no'  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????? ??????????????? ??????????????? ?????? = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????? ??????????????? ??????</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM mer where statuse='learning'  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????? ??????????????? ?????? = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????? ???/??? ???????????? </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM mer where statuse='FINISHED'  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????? ???/??? ????????????  = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????? ???????????? ??????????????? ?????? </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM bap where statuse='learning'  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????? ???????????? ??????????????? ?????? = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                        
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">????????? ???????????? ??????????????? </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <?php
                         require 'dbconfig.php';
                         $query = "SELECT id FROM bap where statuse='BAPTISM'  ORDER BY id";
                         $query_run = mysqli_query($connection,$query);
                                $row = mysqli_num_rows($query_run);
                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php   echo '????????? ???????????? ??????????????? = '.$row;
                                    ?></div>
                          
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">??????  ??????????????? ????????????</div>
                        

                      
                      <?php
                  require 'dbconfig.php';
             $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && work='nojobs' ORDER BY id";
             $query_run = mysqli_query($connection,$query);
             $row = mysqli_num_rows($query_run);
                 ?>
           <div class="h6 mb-0 font-weight-bold text-gray-800"> <?php  echo '??????  ??????????????? ???????????? = '.$row;
 ?>
                                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">??? 20 ????????? ?????????</div>
                        

                      
                      <?php
                  require 'dbconfig.php';
                  
             $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && age<20 ORDER BY id";
             $query_run = mysqli_query($connection,$query);
             $row = mysqli_num_rows($query_run);
                 ?>
           <div class="h6 mb-0 font-weight-bold text-gray-800"> <?php  echo '??? 20 ????????? ????????? = '.$row;
 ?>
                                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">????????? ???????????? ????????? ????????? </div>
               

                      
                      <?php
                  require 'dbconfig.php';
                  
             $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && address='KolfeKeranio' ORDER BY id";
             $query_run = mysqli_query($connection,$query);
             $row = mysqli_num_rows($query_run);
                 ?>
           <div class="h6 mb-0 font-weight-bold text-gray-800"> <?php  echo '????????? ???????????? ????????? ?????????  = '.$row;
 ?>
                                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">????????? ????????? ????????? ?????????  </div>
              
                      
                      <?php
                  require 'dbconfig.php';
                  
             $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && address='AddisKetema' ORDER BY id";
             $query_run = mysqli_query($connection,$query);
             $row = mysqli_num_rows($query_run);
                 ?>
           <div class="h6 mb-0 font-weight-bold text-gray-800"> <?php  echo '????????? ????????? ????????? ?????????  = '.$row;
 ?>
                                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          
            

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">????????? ????????? ?????????   </div>
                   

                      
                      <?php
                  require 'dbconfig.php';
                  
             $query = "SELECT id FROM records where leavestatus='no' && alive='yes' && address='Gullele' ORDER BY id";
             $query_run = mysqli_query($connection,$query);
             $row = mysqli_num_rows($query_run);
                 ?>
           <div class="h6 mb-0 font-weight-bold text-gray-800"> <?php  echo '????????? ????????? ?????????  = '.$row;
 ?>
                                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>

        </div>
        <!-- /.container-fluid -->

       <!-- End of Main Content -->

    <?php  
    
      include('includes/scripts.php');
      include('includes/footer.php');
     
     ?>





 

