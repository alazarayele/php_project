<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


    


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">ACADEMIcS
          


    </h6>
  </div>

  <div class="card-body">

  <?php
   if(isset($_SESSION['success'])&& $_SESSION['success']  !='')
   {
     echo '<h2>'.$_SESSION['success'].' </h2>';
     unset($_SESSION['success']);
    
   }


   if(isset($_SESSION['status'])&& $_SESSION['status']  !='')
   {
     echo '<h2>'.$_SESSION['status'].' </h2>';
     unset($_SESSION['status']);
    
   }
  ?>
<div class="table-responsive">
   

     
        
     

           
            
                <form action="code.php" method="post">
  <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#deleteadminprofile">
            Begin New Years Of Gifts
  </button>
                  
                </form>

                <div class="modal fade" id="deleteadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
       
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> ARE YOU SURE YOU WANT TO start New year Data</label>
                           </div>
           
         
        </div>
        <div class="modal-footer">
       
                  <button type="submit" name="newyeargift_btn" class="btn btn-danger"> DELETE</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
        </div>
      </form>

    </div>
  </div>
</div>
           
            



        
        

        

    </div>
    <div class="table-responsive">
  

     
       

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>