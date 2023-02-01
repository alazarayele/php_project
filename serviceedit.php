<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Service
            

</h6>
</div>
<div class="card-body">





<?php
$connection = mysqli_connect("localhost","root","","snv");
       if(isset($_POST['editservice']))
{
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM service WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
<div class="form-group">


                <label> phonenumber </label>
                <input type="text" name="edit_username"  value="<?php echo $row['phonenumber']?>" class="form-control" placeholder="Enter Username">
            </div>
       
                    
            <div class="col-sm-3">
                        <label for="inputmn">አገልግሎት</label>
                        <select name="type"  class="form-control"  >
                <option value="">  </option>
                <option value="half" <?php  if($row["type"]=='half'){echo "selected";}?> >ግማሽ ጊዜ </option>
                <option value="full" <?php  if($row["type"]=='full'){echo "selected";}?> >ሙሉ ጊዜ </option>
                <option value="none" <?php  if($row["type"]=='none'){echo "selected";}?> >ምንም </option>
              
                </select>
                         </div>
                    <div class="col-sm-3">
                    <label for="inputState">አገልግሎት</label>
                    <label>  ስም</label>
                        <select name="servicename"  class="form-control"  >
                <option value="">  </option>
                <option value="quwayr" <?php  if($row["name"]=='quwayr'){echo "selected";}?> > ዝማሬ   </option>
                <option value="evagelist" <?php  if($row["name"]=='evagelist'){echo "selected";}?> > ወንጌላዊ   </option>
                <option value="asher" <?php  if($row["name"]=='asher'){echo "selected";}?> > ዲያቆን   </option>
                <option value="Paster" <?php  if($row["name"]=='Paster'){echo "selected";}?> > ፓስተር   </option>
                <option value="musicandsound" <?php  if($row["name"]=='musicandsound'){echo "selected";}?> > ሙዚቃ ተጫዋችእና ሳዉንድ ሲስተም    </option>
                <option value="guard" <?php  if($row["name"]=='guard'){echo "selected";}?> > ጥበቃ   </option>
                <option value="teacher" <?php  if($row["name"]=='teacher'){echo "selected";}?> > አስተማሪ   </option>
                <option value="natanim" <?php  if($row["name"]=='natanim'){echo "selected";}?> > ናታኒም   </option>
                <option value="felloleader" <?php  if($row["name"]=='felloleader'){echo "selected";}?> > ህብረት መሪ    </option>
              
                
                </select>
                         </div>
                      
                  
                    <?php

$fell = "SELECT * FROM felloship";
$fell_run = mysqli_query($connection,$fell);

if(mysqli_num_rows($fell_run) > 0)
{
  ?>
  <div class="col-sm-3" >
<label class="radio-inline">ህብረት
                            </label>&nbsp;&ensp;

                            <select name="felloship"  class="form-control"  >
                            <option >  </option>

<?php
foreach($fell_run as $row)
{
 ?>
 
              
 <option value="<?php echo $row['id']; ?>"><?php echo $row['name'];?> </option>
 <?php
}
?>
</select>

</div>
<?php
}
 else{
   echo"no record";
 }

  ?>


            
               <a href="servicelist.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="UPDATEserivce" class="btn btn-primary">UPDATE</button>
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