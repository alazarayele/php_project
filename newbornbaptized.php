<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile 
            

</h6>
</div>
<div class="card-body">





<?php
$connection = mysqli_connect("localhost","root","","snv");
       if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM newbornagiann WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
<div class="form-group">


<label class="">ተጠመቀ
                            </label>&nbsp;&ensp;
                    
                    <input type="radio" name="gender" value="yes"/>አዎ 
                      <input type="radio"  name="gender" value="no"/>አይ 
                          
                    </div>
            </div>
           
               <a href="newbornrecords.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="UPDATEbap" class="btn btn-primary">UPDATE</button>
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