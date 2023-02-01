<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">የጋብቻ ትምህርት የጨረሱ </h6>
  </div>

  <div class="card-body">

  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=' ')
     {
       echo '<h2 class= "bg-primary text-white">'.$_SESSION['success'].'</h2>';
       unset($_SESSION['success']);
     }
     if(isset($_SESSION['status']) && $_SESSION['status'] !=' ')
     {
       echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
       unset($_SESSION['status']);
     }

  ?>

    <div class="table-responsive">

    <?php
$connection = mysqli_connect("localhost","root","","snv");
       if(isset($_POST['ef_btn']))
{
    $rq_id = $_POST['ef_id'];
    $query = "SELECT * FROM req WHERE rq_id='$rq_id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST">
<input type="hidden" name="ef_id" value="<?php echo $row['rq_id']?>">
            
             


            <div class="col-sm-3">
                <label> የአጽዳቂው ስም </label>
                <input type="text" name="ef_name" value="<?php echo $row['name']?>"class="form-control" placeholder="#">
            </div>

            <div class="form-group">
                        <label >ቀን</label>
                        
                        <input type="date"  name="ef_tekcbaydate" class="form-control" placeholder="DATE">
                    </div> 
            
       
                 
           
            <a href="chureq.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="UNT" class="btn btn-primary">SAVE</button>
               </form>
            <?php

}

}
?>
</div>
</div>
</div>
</div>










<?php
include('includes/scripts.php');
include('includes/footer.php');
?>