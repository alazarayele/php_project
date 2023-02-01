<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit department
            

</h6>
</div>
<div class="card-body">





<?php

       if(isset($_POST['deletegift']))
{
    $id = $_POST['duedelete'];
    $query = "SELECT * FROM gift WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    
<form action="code.php" method="POST"  enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
<div class="form-group">


                <label><h1> Are You Sure to Delete </h1> </label>
                <input type="text" name="edit_name"  value="<?php echo $row['id']?>" class="form-control" placeholder="Enter Username">
            </div>
           
            
               <a href="departments.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="deptUPDATEBTN" class="btn btn-primary">UPDATE</button>
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