<?php
include('security.php');


if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
      $usertype = $_POST['usertype'];
    $email_query = "SELECT * FROM admintables WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password == $cpassword)
        {
            $query = "INSERT INTO admintables (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}









if(isset($_POST['UPDATEBTN']))
{
    $id=$_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertype = $_POST['usertype'];

    $query = "UPDATE admintables SET username='$username',email='$email',password='$password',usertype='$usertype' WHERE id=$id";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
          $_SESSION['success']="YOUR DATA IS UPDATED";
          header('Location:register.php');
    }
    else{
        $_SESSION['status']="YOUR DATA IS NOT UPDATED";
        header('Location:register.php');
    }
}











if(isset($_POST['delete_btn']))
{
    $id = $_POST['id'];
    $query = "DELETE  FROM admintables WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:register.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:register.php');
    }
}




if(isset($_POST['login_btn']))
{
    $email_login = $_POST['name'];
    
    $password_login = $_POST['password'];
    $query="SELECT * FROM `admintables` WHERE `email`='$email_login' AND `password`='$password_login'";
    
    $query_run = mysqli_query($connection,$query);

    $usertype = mysqli_fetch_array($query_run);

       if($usertype['usertype'] == "admin")
       {
        $_SESSION['username']=$email_login;
        header('Location:index.php');
       }
       else if($usertype['usertype'] == "user")
       {
       // $_SESSION['username']=$email_login;
        header('Location:../Homepage.php');
       }
       else{
        $_SESSION['status']="YOUR EMAIL ID OR PASSWORD IS INCORRECT";
        header('Location:index.php');
       }
    }
    

















    if(isset($_POST['aboutus']))
    {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $links = $_POST['links'];
       
        $query = "INSERT INTO about (title,subtitle,description,links) VALUES ('$title','$subtitle','$description','$links')";
        $query_run = mysqli_query($connection, $query);
       
                
                if($query_run)
                {
                    // echo "Saved";
                    $_SESSION['status'] = "You Have Added News feed";
                    $_SESSION['status_code'] = "success";
                    header('Location: aboutus.php');
                }
                else 
                {
                    $_SESSION['status'] = "You Have NOT Added News feed";
                    $_SESSION['status_code'] = "error";
                    header('Location: aboutus.php');  
                }
           
           
  }
       
    
    
    








  if(isset($_POST['updateaboutus']))
  {
      $id=$_POST['edit_id'];
      $title = $_POST['edit_title'];
      $subtitle = $_POST['edit_subtitle'];
      $description = $_POST['description'];
      $link = $_POST['edit_link'];
  
      $query = "UPDATE about SET title='$title',subtitle='$subtitle',description='$description',links='$link' WHERE id=$id";
      $query_run = mysqli_query($connection,$query);
      if($query_run)
      {
            $_SESSION['success']="YOUR DATA IS UPDATED";
            header('Location:aboutus.php');
      }
      else{
          $_SESSION['status']="YOUR DATA IS NOT UPDATED";
          header('Location:aboutus.php');
      }
  }
  






  if(isset($_POST['deleteabout_btn']))
  {
      $id = $_POST['delete_id'];
      $query = "DELETE  FROM about WHERE id ='$id'";
      $query_run = mysqli_query($connection,$query);
  
  
      if($query_run)
      {
          $_SESSION['success']="YOUR DATA IS DELETED";
          header('Location:aboutus.php');
      }
      else
      {
          $_SESSION['status']="YOUR DATA IS NOT DELETED";
          header('Location:aboutus.php');
      }
  }





  if(isset($_POST['deleteleaves_btn']))
  {
      $id = $_POST['id'];
      $query = "DELETE  FROM records WHERE id ='$id'";
      $query_run = mysqli_query($connection,$query);
  
  
      if($query_run)
      {
          $_SESSION['success']="YOUR DATA IS DELETED";
          header('Location:leaves.php');
      }
      else
      {
          $_SESSION['status']="YOUR DATA IS NOT DELETED";
          header('Location:leaves.php');
      }
  }
  
  
  
  




  if(isset($_POST['faculity']))
  {
      $name = $_POST['name'];
      $desgination = $_POST['desgination'];
      $description = $_POST['description'];
      $file = $_FILES["file"]['name'];
     
     
            if(file_exists("upload/" .$_FILES["file"]["name"])){  
                $store = $_FILES["file"]["name"];
                $_SESSION['status'] = "image already exists . '$store'";
                header('Location:faculity.php');
            }
            
else{
            $query = "INSERT INTO faculity (name,desgination,description,file,visible) VALUES ('$name','$desgination','$description','$file','0')";
            $query_run = mysqli_query($connection, $query);
           
              if($query_run)
              {
                
                  move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
                  $_SESSION['status'] = "You Have Added new Faculity";
                  $_SESSION['status_code'] = "success";
                  header('Location: faculity.php');
              }
              else 
              {
                  $_SESSION['status'] = "You Have NOT Added Faculity";
                  $_SESSION['status_code'] = "error";
                  header('Location: faculity.php');  
              }
         
            }
}









if(isset($_POST['facuUPDATEBTN']))
{                
                     $id=$_POST['edit_id'];
    $name = $_POST['edit_name'];
    $desgination = $_POST['edit_desgination'];
    $description = $_POST['edit_description'];
    $files = $_FILES["file"]['name'];
   
   
         
          

          $query = "UPDATE faculity SET name='$name',desgination='$desgination',description='$description',file='$files' WHERE id='$id'";
          $query_run = mysqli_query($connection, $query);
         
            if($query_run)
            {
                // echo "Saved";

                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
                $_SESSION['status'] = "You Have updated";
                $_SESSION['status_code'] = "success";
                header('Location: faculity.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT updated Faculity";
                $_SESSION['status_code'] = "error";
                header('Location: faculity.php');  
            }
       
          
}










if(isset($_POST['deletefaculity_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE  FROM faculity WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:faculity.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:faculity.php');
    }
}






if(isset($_POST['search_data']))
{
    $id = $_POST['id'];
    $visible = $_POST['visible'];
    $query = "UPDATE faculity SET visible='$visible'  WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:faculity.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:faculity.php');
    }
}











if(isset($_POST['deletemultiple']))
{
    $id = "1";
  
    $query = "DELETE from faculity  WHERE visible ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:faculity.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:faculity.php');
    }
}




if(isset($_POST['deptssave']))
{
    $name = $_POST['deptname'];
    $description = $_POST['description'];
    $file = $_FILES["image"]['name'];
   
   
          if(file_exists("upload/department/" .$_FILES["image"]["name"])){  
              $store = $_FILES["image"]["name"];
              $_SESSION['status'] = "image already exists . '$store'";
              header('Location:departments.php');
          }
          
else{
          $query = "INSERT INTO department (name,description,image) VALUES ('$name','$description','$file')";
          $query_run = mysqli_query($connection, $query);
         
            if($query_run)
            {
                // echo "Saved";

                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/department/".$_FILES["image"]["name"]);
                $_SESSION['status'] = "You Have Added new department";
                $_SESSION['status_code'] = "success";
                header('Location: departments.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Added department";
                $_SESSION['status_code'] = "error";
                header('Location: departments.php');  
            }
       
          }
}


if(isset($_POST['deptUPDATEBTN']))
{
    $edit_id = $_POST['edit_id'];
    $edit_name = $_POST['edit_name'];
    $edit_description = $_POST['edit_description'];
    $edit_image = $_POST["edit_file"]['name'];

    $query = "UPDATE department SET name='$edit_name',description='$edit_description',image='$edit_image' WHERE id='$edit_id'";
    $query_run = mysqli_query($connection, $query);
    
    
    if($query_run)
    {
        move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/department/".$_FILES["edit_image"]["name"]);
       
        $_SESSION['success'] = "departments updated";
        header('Location:departments.php');
    }
    else{
        $_SESSION['status'] = "departments is not updated";
        header('Location:departments.php');
    }
}





if(isset($_POST['deleterecords']))
{
   
    $id = $_POST['id'];
    $query = "DELETE  FROM records WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:recordlist.php');
    }
    else
    {
        echo  mysqli_error($connection);
       // $_SESSION['status']="YOUR DATA IS NOT DELETED";
       // header('Location:recordlist.php');
    }
}
if(isset($_POST['deletedep_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE  FROM department WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:departments.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:departments.php');
    }
}












if(isset($_POST['listsave']))
{
    $dep_list_id = $_POST['dep_list_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $section = $_POST['section'];
   
    $query = "INSERT INTO deptlist (depid,name,description,section) VALUES ('$dep_list_id','$name','$description','$section')";
    $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "You Have Added DP LIST";
                $_SESSION['status_code'] = "success";
                header('Location: departmentslist.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT AddedDEPT LIST";
                $_SESSION['status_code'] = "error";
                header('Location: departmentslist.php');  
            }
       
       
}
   
 



if(isset($_POST['insertrecord']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $mdate = $_POST['mdate'];

    $mtype = $_POST['mtype'];
    $file = $_FILES["image"]['name'];
    $gender = $_POST['gender'];
    $nchildren = $_POST['nchildren'];
    $service = $_POST['service'];
    $bplace = $_POST['bplace'];
    $dbirth = $_POST['dbirth'];
    
    $alive = $_POST['alive'];
    $leave = $_POST['leave'];
    $felloship = $_POST['felloship'];
    $address = $_POST['address'];
    $work = $_POST['work'];
   
    $house = $_POST['house'];
    $pnumber = $_POST['pnumber'];
    $wstate = $_POST['wstate'];
    $wdate = $_POST['wdate'];

    $schooltype = $_POST['schooltype'];
    $levelofschool = $_POST['levelofschool'];
    $dayspermonth = $_POST['dayspermonth'];
    $age = $_POST['age'];
    $addressofstreet = $_POST['addressofstreet'];
   
    $economic = $_POST['economic'];
    $emergency = $_POST['emergency'];
    $emergencyphonenumber = $_POST['emergencyphonenumber'];
 

    
    
     $query = "INSERT INTO records (fname,mname,lname,gender,bdate,bplace,address,phonenumber,work,house,mdate,wstatus,wdate,nochildren,service,mtype,leavestatus,photo,alive,felloship,levelofschool,schooltype,dayspermonth,age,addressofstreet,economic,emergency,emergencyphonenumber) VALUES ('$fname','$mname','$lname','$gender','$dbirth','$bplace','$address','$pnumber','$work','$house','$mdate','$wstate','$wdate','$nchildren','$service','$mtype','$leave','$file','$alive','$felloship','$levelofschool','$schooltype','$dayspermonth','$age','$addressofstreet','$economic','$emergency','$emergencyphonenumber')";
   
   
    $queryy = "INSERT INTO records (fname,mname,lname,gender,bdate,bplace,address,phonenumber,work,house,mdate,wstatus,wdate,nochildren,service,mtype,leavestatus,photo,alive,felloship) VALUES ('$fname','$mname','$lname','$gender','$dbirth','$bplace','$address','$pnumber','$work','$house','$mdate','$wstate','$wdate','$nchildren','$service','$mtype','$leave','$alive','$felloship')";
    $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";

                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/department/".$_FILES["image"]["name"]);
            
          

                $_SESSION['success'] = "You Have Added A New Member";
                $_SESSION['status_code'] = "success";
                header('Location: insert.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Added A New Member";
                $_SESSION['status_code'] = "success";
                header('Location: insert.php');
                echo  mysqli_error($connection);
            }
       
       
}






if(isset($_POST['insertservice']))
{
   
    $dep_list_id = $_POST['dep_list_id'];
    $service = $_POST['service'];
    $servicename = $_POST['servicename'];
    $sdate = $_POST['sdate'];
    $felloship = $_POST['felloship'];
    $pnumber = $_POST['pnumber'];
    
    $query = "INSERT INTO service (type,name,date,fellow,phonenumber,mid) VALUES ('$service','$servicename','$sdate','$felloship','$pnumber','$dep_list_id')";
    $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "You Have Added NEW DATA";
                $_SESSION['status_code'] = "success";
                header('Location: service.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT A DATA";
                $_SESSION['status_code'] = "error";
                header('Location: service.php');  
            }
       
       
}


if(isset($_POST['InsertFellow']))
{
    $fname = $_POST['fname'];
    $fdate = $_POST['fdate'];
    $ftime = $_POST['ftime'];
    $ftype = $_POST['ftype'];
    $fplace = $_POST['fplace'];
    $fleader = $_POST['fleader'];
    $fnumber = $_POST['fnumber'];
    $query = "INSERT INTO felloship (leader,type,name,time,date,place,numberofpeople) VALUES ('$fleader','$ftype','$fname','$ftime','$fdate','$fplace','$fnumber')";
    $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "You Have Added NEW DATA";
                $_SESSION['status_code'] = "success";
                header('Location: felloship.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT A DATA";
                $_SESSION['status_code'] = "error";
             
                header('Location: felloship.php');  
                echo  mysqli_error($connection);
            }
       
       
}



if(isset($_POST['insertalive']))
{
    $alive = $_POST['alive'];
    $id = $_POST['IDD'];

    $query = "UPDATE records SET  alive = '$alive' WHERE id=$id";
   
    $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "You Have updated DATA";
                $_SESSION['status_code'] = "success";
                header('Location: leave.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Updated A DATA";
                $_SESSION['status_code'] = "error";
                echo  mysqli_error($connection);
            
                
            }
       
       
}



if(isset($_POST['insertleave']))
{
    $leave = $_POST['leave'];
    $id = $_POST['ID'];
    $query = "UPDATE records SET leavestatus='$leave' WHERE id=$id";
    $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "You Have updated DATA";
                $_SESSION['status_code'] = "success";
                header('Location: leave.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Updated A DATA";
                $_SESSION['status_code'] = "error";
                echo  mysqli_error($connection);
                
                
            }
       
       
}







if(isset($_POST['fellUPDATEBTN']))
{
    $edit_id = $_POST['edit_id'];
    $edit_name = $_POST['edit_name'];
    $edit_date = $_POST['edit_date'];
    $edit_time = $_POST['edit_time'];
    $edit_type = $_POST['edit_type'];
    $edit_place = $_POST['edit_place'];
    $edit_leader = $_POST['edit_leader'];
    $edit_number = $_POST['edit_number'];
    
    $query = "UPDATE felloship SET name='$edit_name',date='$edit_date',time='$edit_time',type='$edit_type',place='$edit_place',leader='$edit_leader',numberofpeople='$edit_number' WHERE id='$edit_id'";
    $query_run = mysqli_query($connection, $query);
    
    
    if($query_run)
    {
       
       
        $_SESSION['success'] = "Fellowship is updated";
        header('Location:felloship.php');
    }
    else{
        $_SESSION['status'] = "fellowship is not updated";
        header('Location:felloship.php');
    }
}




if(isset($_POST['deletefelloship_btn']))
{
    $id = $_POST['id'];
    $query = "DELETE  FROM felloship WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:felloship.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:felloship.php');
    }
}




if(isset($_POST['insertnewborn']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $mdate = $_POST['mdate'];
    $house = $_POST['house'];
    $dbirth = $_POST['dbirth'];
    
    $address = $_POST['address'];
    $work = $_POST['work'];
    $pnumber = $_POST['pnumber'];
    $wstate = $_POST['wstate'];
    $addressofstreet = $_POST['addressofstreet'];
    
    $emergencyphonenumber = $_POST['emergencyphonenumber'];
    $gender = $_POST['gender'];
    $baptized = $_POST['baptized'];
    
    
$query = "INSERT INTO newbornagiann (fname,mname,lname,newborndate,gender,date,address,job,phonenumber,maritialstatus ,street,ephone,house,baptized) VALUES ('$fname','$mname','$lname','$mdate','$gender','$dbirth','$address','$work','$pnumber','$wstate','$addressofstreet','$emergencyphonenumber','$house','$baptized')";
   
$query_run = mysqli_query($connection, $query);
   

if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "You Have Added A New born again";
                $_SESSION['status_code'] = "success";
                header('Location: newbornagain.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Added A New Data";
                $_SESSION['status_code'] = "success";
                echo  mysqli_error($connection);
              
            }
       
       
}



if(isset($_POST['deletenewborn_btn']))
{
    $id = $_POST['id'];
    $query = "DELETE  FROM newbornagiann WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:newbornrecords.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:newbornrecords.php');
    }
}




if(isset($_POST['UPDATEbap']))
{
    $id=$_POST['edit_id'];
    $baptized = $_POST['gender'];
    

    $query = "UPDATE newbornagiann SET baptized='$baptized' WHERE id=$id";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
          $_SESSION['success']="YOUR DATA IS UPDATED";
          header('Location:newbornrecords.php');
    }
    else{
        $_SESSION['status']="YOUR DATA IS NOT UPDATED";
        echo  mysqli_error($connection);
        header('Location:newbornrecords.php');
    }
}

if(isset($_POST['insertgift']))
{
    $mid = $_POST['mid'];
    $september = $_POST['september'];
    $october = $_POST['october'];
    $november = $_POST['november'];

    $december = $_POST['december'];
  
    $january = $_POST['january'];
    $february = $_POST['february'];
    $march = $_POST['march'];
    $april = $_POST['april'];
    $may = $_POST['may'];
   
    $june = $_POST['june'];
    $july = $_POST['july'];
    $august = $_POST['august'];
    $restore = $_POST['restore'];

    
 

    
    
     $query = "INSERT INTO gift (mid,s,oc,no,de,ja,fe,ma,ap,may,jun,jul,aug,restore) VALUES 
     ('$mid','$september','$october','$november','$december','$january','$february','$march','$april','$may','$june','$july','$august','$restore')";
   
   
       $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";

               

                $_SESSION['success'] = "You Have Added A New Member";
                $_SESSION['status_code'] = "success";
                header('Location: asrat.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Added A New Member";
                $_SESSION['status_code'] = "success";
                header('Location: asrat.php');
                echo  mysqli_error($connection);
            }
       
       
}




if(isset($_POST['updategift']))
{
    $id = $_POST['id'];
    $september = $_POST['september'];
    $october = $_POST['october'];
    $november = $_POST['november'];

    $december = $_POST['december'];
  
    $january = $_POST['january'];
    $february = $_POST['february'];
    $march = $_POST['march'];
    $april = $_POST['april'];
    $may = $_POST['may'];
   
    $june = $_POST['june'];
    $july = $_POST['july'];
    $august = $_POST['august'];
  

    
 
    
    
    
     $query = "UPDATE gift SET s='$september',oc='$october',no='$november',de='$december',ja='$january',fe='$february',ma='$march',ap='$april',may='$may',jun='$june',jul='$july',aug='$august' WHERE id=$id";
   
   
       $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";

               

                $_SESSION['success'] = "You Have Added UPDATED THE DATA";
                $_SESSION['status_code'] = "success";
                header('Location: asratrecords.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Added Update The Data";
                $_SESSION['status_code'] = "success";
                header('Location: asratrecords.php');
                echo  mysqli_error($connection);
            }
       
       
}






if(isset($_POST['insertfamily']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['mname'];
    $first = $_POST['first'];
    $second = $_POST['second'];

    $third = $_POST['third'];
    $file = $_FILES["image"]['name'];
    $fourth = $_POST['fourth'];
    $fiveth = $_POST['fiveth'];
    $sixth = $_POST['sixth'];
    $seventh = $_POST['seventh'];
    $eight = $_POST['eight'];
    
    $nine = $_POST['nine'];
    $ten = $_POST['ten'];
    $eleven = $_POST['eleven'];
    $twelve = $_POST['twelve'];
    
 



    
     $query = "INSERT INTO family (fname,lname,first,second,third,fourth,fiveth,sixth,seventh,eight,nine,ten,eleven,twelve,photo) VALUES ('$fname','$lname','$first','$second','$third','$fourth','$fiveth','$sixth','$seventh','$eight','$nine','$ten','$eleven','$twelve','$file')";
   
 
      $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";

                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/department/".$_FILES["image"]["name"]);
            
          

                $_SESSION['success'] = "You Have Added A New Family";
                $_SESSION['status_code'] = "success";
                header('Location: family.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Added A New Data";
                $_SESSION['status_code'] = "success";
               
              
                echo  mysqlI_error($connection);
            }
       
       
}




if(isset($_POST['updatefamily']))
{
    $id=$_POST['edit_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['mname'];
    $first = $_POST['first'];
    $second = $_POST['second'];

    $third = $_POST['third'];
  
    $fourth = $_POST['fourth'];
    $fiveth = $_POST['fiveth'];
    $sixth = $_POST['sixth'];
    $seventh = $_POST['seventh'];
    $eight = $_POST['eight'];
    
    $nine = $_POST['nine'];
    $ten = $_POST['ten'];
    $eleven = $_POST['eleven'];
    $twelve = $_POST['twelve'];



    


    $query = "UPDATE family SET fname='$fname',lname='$lname',first='$first',second='$second',third='$third',fourth='$fourth',fiveth='$fiveth',sixth='$sixth',seventh='$seventh',eight='$eight',nine='$nine',ten='$ten',eleven='$eleven',
    twelve='$twelve'
   
     WHERE id=$id";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
          $_SESSION['success']="YOUR DATA IS UPDATED";
          header('Location:familyrecords.php');
    }
    else{
        $_SESSION['status']="YOUR DATA IS NOT UPDATED";

        echo mysqli_error($connection);
       
    }
}



if(isset($_POST['deletefamily_btn']))
{
    $id = $_POST['id'];
    $query = "DELETE  FROM family WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:familyrecords.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:familyrecords.php');
    }
}






if(isset($_POST['insertvacancy']))
{
    $fname = $_POST['topic'];
    $mname = $_POST['description'];
 
    $file = $_FILES["image"]['name'];
    

    
 

    
    
     $query = "INSERT INTO vacancy (topic,title,image) VALUES ('$fname','$mname','$file')";
   
   
        $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";

                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/department/".$_FILES["image"]["name"]);
            
          

                $_SESSION['success'] = "You Have Added A New vacancy";
                $_SESSION['status_code'] = "success";
                header('Location: vacancy.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Added vacancy";
                $_SESSION['status_code'] = "success";
                header('Location: vacancy.php');
                echo  mysqli_error($connection);
            }
       
       
}


if(isset($_POST['deletevacancy']))
{
    $id = $_POST['id'];
    $query = "DELETE  FROM vacancy WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:vacancyrecords.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:vacancyrecords.php');
    }
}






      


if(isset($_POST['goodssubmit']))
{
    $itemname = $_POST['itemname'];
    $idesc = $_POST['idesc'];
    $qunantity = $_POST['qunantity'];
  
    $query = "INSERT INTO nibret (item,itemdesc,amonut) VALUES ('$itemname','$idesc','$qunantity','$qunantity')";
    $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "You Have Added NEW DATA";
                $_SESSION['status_code'] = "success";
                header("Refresh: 1; url=goods.php");
                header('Location: goods.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT A DATA";
                $_SESSION['status_code'] = "error";
                echo  mysqli_error($connection);
                
                echo  mysqli_error($connection);
            }
       
       
}





if(isset($_POST['brokensubmit']))

{
    $id=$_POST['id'];
    $broken = $_POST['broken'];
    $query = "UPDATE nibret SET isssued='$broken'  WHERE id=$id";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
             
          $_SESSION['success']="YOUR DATA IS UPDATED";
         
          header('Location:goods.php');
   
    }
    else{
        $_SESSION['status']="YOUR DATA IS NOT UPDATED";
        echo  mysqli_error($connection);
        header('Location:goods.php');
    }
}





if(isset($_POST['increased']))
{
    $id=$_POST['id'];
    $new = $_POST['increasednew'];
    

    $query = "UPDATE nibret SET increased='$new' WHERE id=$id";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
          $_SESSION['success']="YOUR DATA IS UPDATED";
         
          header('Location:goods.php');
         
    }
    else{
        $_SESSION['status']="YOUR DATA IS NOT UPDATED";
        echo  mysqli_error($connection);
        header("Refresh: 1; url=goods.php");
        header('Location:goods.php');
    }
}



if(isset($_POST['deletethings_btn']))
{
    $id = $_POST['id'];
    $query = "DELETE  FROM nibret WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:goods.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:goods.php');
    }
}




if(isset($_POST['deletegift']))
{

  
    $id = $_POST['id']; 
    $query = "DELETE  FROM gift WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:asratrecords.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:asratrecords.php');
    }
}


if(isset($_POST['newyeargift_btn']))
{
    
    $query = "DELETE  FROM gift WHERE restore ='no'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR BEGIN A NEW YEAR DATA";
        header('Location:asratrecords.php');
    }
    else
    {
        $_SESSION['status']="YOUR BEGIN A NEW YEAR DATA";
        header('Location:asratrecords.php');
    }
}

if(isset($_POST['UPDATEserivce']))
{
    $id = $_POST['edit_id'];
    $september = $_POST['edit_username'];
    $october = $_POST['type'];
    $november = $_POST['servicename'];

    $december = $_POST['felloship'];
  
  
    
 
    
    
    
     $query = "UPDATE service SET type='$october',name='$november',phonenumber='$september',fellow='$december' WHERE id=$id";
   
   
       $query_run = mysqli_query($connection, $query);
   
            
            if($query_run)
            {
                // echo "Saved";

               

                $_SESSION['success'] = "You Have Added UPDATED THE DATA";
                $_SESSION['status_code'] = "success";
                header('Location: servicelist.php');
            }
            else 
            {
                $_SESSION['status'] = "You Have NOT Added Update The Data";
                $_SESSION['status_code'] = "success";
                header('Location: servicelist.php');
                echo  mysqli_error($connection);
            }
       
       
}



if(isset($_POST['deleteserive_btn']))
{
    $id = $_POST['id'];
    $query = "DELETE  FROM  service WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:servicelist.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        echo  mysqli_error($connection);
    }
}


if(isset($_POST['updaterecords']))
{
    $edit_id = $_POST['edit_id'];

    $nchildren = $_POST['nchildren'];
    $service = $_POST['service'];
    $address = $_POST['address'];
    $work = $_POST['work'];
    $house = $_POST['house'];
    $pnumber = $_POST['pnumber'];
    $schooltype = $_POST['schooltype'];
    $wstate = $_POST['wstate'];
    $wdate = $_POST['wdate'];
    $levelofschool = $_POST['levelofschool'];
    $age = $_POST['age'];
    $addressofstreet = $_POST['addressofstreet'];
    $economic = $_POST['economic'];
    $emergency = $_POST['emergency'];
    $emergencyphonenumber = $_POST['emergencyphonenumber'];

    
    $query = "UPDATE records SET nochildren='$nchildren',service='$service',address='$address',work='$work',house='$house',phonenumber='$pnumber',schooltype='$schooltype',wstatus='$wstatus',wdate='$wdate',levelofschool='$levelofschool'
    ,age='$age',addressofstreet='$addressofstreet',economic='$economic',emergency='$emergency',emergencyphonenumber='$emergencyphonenumber' WHERE id='$edit_id'";
    $query_run = mysqli_query($connection, $query);
    
    
    if($query_run)
    {
       
       
        $_SESSION['success'] = "your data is updated";
        header('Location:recordlist.php');
    }
    else{
        $_SESSION['status'] = "your data is not updated";
        header('Location:recordlist.php');
    }
}


if(isset($_POST['child']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'] ;
    $sex = $_POST['sex'];
    $bdate = $_POST['bdate'];
    $hbret = $_POST['hbret'] ; 
    $yemenoria_sefer = $_POST['yemenoria_sefer'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $class = $_POST['class'] ; 
    $adega_teteri = $_POST['adega_teteri'];
    $adegateteri_slk = $_POST['adegateteri_slk'];
    $query = "INSERT INTO `child` ( `fname`, `mname`,`lname` ,`sex`, `bdate`,`hbret`,`yemenoria_sefer`,`phone`,`age`,`class`,`adega_teteri`,`adegateteri_slk`) VALUES ('$fname ','$mname','$lname', '$sex', '$bdate','$hbret','$yemenoria_sefer','$phone','$age',' $class','$adega_teteri', '$adegateteri_slk')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
     $_SESSION['success'] = "your data is inserted";
     header('location: child.php');
    }
    else{
      $_SESSION['status'] = "your data is not inserted";
      header('location: child.php');
  
    }
} 


if(isset($_POST['UBTN']))
{
    $id=$_POST['e_id'];
    $hbret = $_POST['e_hbret'];
    $yemenoria_sefer = $_POST['yemenoria_sefer'];
    $phone = $_POST['e_phone'];
    $class = $_POST['e_class'];

$query = "UPDATE child SET hbret='$hbret',yemenoria_sefer='$yemenoria_sefer',phone='$phone',class='$class' WHERE id=$id";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
          $_SESSION['success']="YOUR DATA IS UPDATED";
          header('Location:childreport.php');
    }
    else{
        $_SESSION['status']="YOUR DATA IS NOT UPDATED";
        header('Location:childreport.php');
    }
}


if(isset($_POST['marrige']))
{
    $male_fname = $_POST['male_fname'];
    $male_mname = $_POST['male_mname'];
    $male_lname = $_POST['male_lname'] ;
    $female_fname = $_POST['female_fname'];
    $female_mname = $_POST['female_mname'];
    $female_lname = $_POST['female_lname'] ;
    $male_age = $_POST['male_age'];
    $female_age = $_POST['female_age'];
    $male_where = $_POST['male_where'] ; 
    $female_where = $_POST['female_where'];
    $male_phone = $_POST['male_phone'];
    $female_phone = $_POST['female_phone'];
    $date = $_POST['date'] ; 
   
    $query = "INSERT INTO `mer` ( `male_fname`, `male_mname`,`male_lname` ,`female_fname`, `female_mname`,`female_lname`,`male_age`,`female_age`,`male_where`,`female_where`,`male_phone`,`female_phone`,`date`,`statuse`) VALUES('$male_fname','$male_mname','$male_lname', '$female_fname', '$female_mname','$female_lname','$male_age','$female_age','$male_where',' $female_where','$male_phone', '$female_phone','$date','learning')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
     $_SESSION['success'] = "your data is inserted";
     header('location: marrige.php');
    }
    else{
      $_SESSION['status'] = "your data is not inserted";
      header('location: marrige.php');
  
    }
}

if(isset($_POST['end_btn'])){
    $id=$_POST['id'];
    $query= "UPDATE mer SET statuse = 'FINISHED' WHERE id=$id";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS UPDATE";
        header('Location:marlearn.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT UPDATE";
        header('Location:marlearn.php');
    }
  }



  if(isset($_POST['bap']))
  {
      $fname = $_POST['fname'];
      $mname = $_POST['mname'];
      $lname = $_POST['lname'] ;
      $sex = $_POST['sex'];
      $bap_date = $_POST['bap_date'];
      $birth_date = $_POST['birth_date'] ; 
      $sefer = $_POST['sefer'];
      $phone = $_POST['phone'];
      $sira = $_POST['sira'];
      $meteria = $_POST['meteria'];
      $tech = $_POST['tech'] ; 
      $adega_teteri = $_POST['adega_teteri'];
      $adegateteri_slk = $_POST['adegateteri_slk'];
      $query = "INSERT INTO `bap` ( `fname`, `mname`,`lname` ,`sex`, `bap_date`,`birth_date`,`sefer`,`phone`,`sira`,`meteria`,`tech`,`adega_teteri`,`adegateteri_slk`,`statuse`) VALUES ('$fname ','$mname','$lname', '$sex', '$bap_date','$birth_date','$sefer','$phone','$sira','$meteria','$tech','$adega_teteri', '$adegateteri_slk','learning')";
      $query_run = mysqli_query($connection,$query);
      if($query_run)
      {
       $_SESSION['success'] = "your data is inserted";
       header('location: bap.php');
      }
      else{
        $_SESSION['status'] = "your data is not inserted";
        header('location: bap.php');
    
      }
  } 

  if(isset($_POST['de_btn']))
  {
    $id = $_POST['id'];
    $query = "DELETE FROM mer WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
     $_SESSION['success'] = "your data is deleted";
     header('location: marfin.php');
    }
    else{
      $_SESSION['status'] = "your data is not deleted";
      header('location: marfin.php');
  
    }
  }
  

  if(isset($_POST['d_btn']))
  {
    $id = $_POST['id'];
    $query = "DELETE FROM mer WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
     $_SESSION['success'] = "your data is deleted";
     header('location: marlearn.php');
    }
    else{
      $_SESSION['status'] = "your data is not deleted";
      header('location: marlearn.php');
  
    }
  }


  if(isset($_POST['bap_btn'])){
    $id=$_POST['id'];
    $query= "UPDATE bap SET statuse = 'BAPTISM' WHERE id=$id";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS UPDATE";
        header('Location:bapreport.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT UPDATE";
        header('Location:bapreport.php');
    }
  }



  
if(isset($_POST['UN']))
{
    $id=$_POST['ed_id'];
    $sefer = $_POST['sefer'];
    $phone = $_POST['ed_phone'];
    $sira = $_POST['sira'];
    $tech = $_POST['ed_tech'];

    $query = "UPDATE bap SET sefer='$sefer',phone='$phone',sira='$sira',tech='$tech' WHERE id=$id";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
          $_SESSION['success']="YOUR DATA IS UPDATED";
          header('Location:bapreport.php');
    }
    else{
        $_SESSION['status']="YOUR DATA IS NOT UPDATED";
        header('Location:bapreport.php');
    }
}



if(isset($_POST['delete_child']))
{
    $id = $_POST['id'];
    $query = "DELETE  FROM child WHERE id ='$id'";
    $query_run = mysqli_query($connection,$query);


    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS DELETED";
        header('Location:childreport.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('Location:childreport.php');
    }
}


if(isset($_POST['delbap_btn']))
{
  $id = $_POST['id'];
  $query = "DELETE FROM bap WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
   $_SESSION['success'] = "your data is deleted";
   header('location: bapreport.php');
  }
  else{
    $_SESSION['status'] = "your data is not deleted";
    header('location: bapreport.php');

  }
}


if(isset($_POST['requst']))
{
    $laki = $_POST['laki'];
    $request = $_POST['request'];
    $birr = $_POST['birr'] ; 
    $sdate = $_POST['sdate'];
    $query = "INSERT INTO `req` ( `rq_laki_id`,`rq_des` ,`birr`, `statuse`,`name`,date) VALUES ('$laki','$request', '$birr', 'pending','name','$sdate')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
     $_SESSION['success'] = "your data is inserted";
     header('location: req.php');
    }
    else{
      $_SESSION['status'] = "your data is not inserted";
      echo mysqli_error($connection);
        }
}


if(isset($_POST['new']))
{
  $id = $_POST['rq_id'];
 
  $query = "DELETE FROM req where tekcbay = 'no' ";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
   $_SESSION['success'] = "new year is started";

   header('location: req.php');
  }
  else{
    $_SESSION['status'] = "new year is not started";
    echo mysqli_error($connection);
   

  }
}




if(isset($_POST['reqsub']))
{
    $yetekefay_sm = $_POST['yetekefay_sm'];
    $yeagelglot_zerf = $_POST['yeagelglot_zerf'];
    $fdate = $_POST['fdate'];
    $ldate = $_POST['ldate'] ;
    $tesatafi_bzat = $_POST['tesatafi_bzat'];
    $andu_waga = $_POST['andu_waga'];
    $teklala_waga = $_POST['teklala_waga'] ; 
    $asteyayet = $_POST['asteyayet'];
    $ytewekay_one = $_POST['tewekay_one'];
    $tewekay_fone = $_POST['tewekay_fone'];
    $tewekay_two = $_POST['tewekay_two'];
    $tewekay_ftwo = $_POST['tewekay_ftwo'];
    $tewekay_three = $_POST['tewekay_three'] ; 
    $tewekay_fthree = $_POST['tewekay_fthree'] ; 
    $agelglot_drshaone  = $_POST['agelglot_drshaone'];
    $agelglot_drshatwo = $_POST['agelglot_drshatwo'];
    $agelglot_drshathree  = $_POST['agelglot_drshathree'];
    $query = "INSERT INTO `wechi` ( `yetekefay_sm`,`yeagelglot_zerf`, `fdate`,`ldate` ,`tesatafi_bzat`, `andu_waga`,`teklala_waga`,`asteyayet`,`tewekay_one`,`tewekay_fone`,`tewekay_two`,`tewekay_ftwo`,`tewekay_three`,`tewekay_fthree`,`agelglot_drshaone`,`agelglot_drshatwo`,`agelglot_drshathree`) VALUES ('$yetekefay_sm','$yeagelglot_zerf ','$fdate','$ldate', '$tesatafi_bzat', '$andu_waga',$tesatafi_bzat * $andu_waga,'$asteyayet','$ytewekay_one','$tewekay_fone','$tewekay_two','$tewekay_ftwo',' $tewekay_three','$tewekay_fthree', '$agelglot_drshaone', '$agelglot_drshatwo', '$agelglot_drshathree')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
     $_SESSION['success'] = "your data is inserted";
     header('location: a.php');
    }
    else{
      $_SESSION['status'] = "your data is not inserted";
      header('location: a.php');
  
    }
} 

if(isset($_POST['wnew']))
{
  $id = $_POST['rq_id'];
 
  $query = "DELETE FROM wechi where restore = 'no' ";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
   $_SESSION['success'] = "new year is started";
   header('location: req.php');
  }
  else{
    $_SESSION['status'] = "new year is not started";
    echo mysqli_error($connection);
   

  }
}



if(isset($_POST['UNT']))
{
    $rq_id=$_POST['ef_id'];
    $name = $_POST['ef_name'];
    $tekcbaydate = $_POST['ef_tekcbaydate'];
   

    $query = "UPDATE req SET name='$name',tekcbaydate='$tekcbaydate' WHERE rq_id=$rq_id";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
          $_SESSION['success']="YOUR DATA IS INSERTED";
          header('Location:chureq.php');
    }
    else{
        $_SESSION['status']="YOUR DATA IS NOT INSERTED";
        header('Location:chureq.php');
    }
}


if(isset($_POST['del']))
{
  $rq_id=$_POST['id'];
 
  $query = "UPDATE `req` SET `statuse` = 'REJECT'WHERE `rq_id` ='$rq_id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
   $_SESSION['success'] = "your data is REJECTED";
   header('location: chureq.php');
  }
  else{
    $_SESSION['status'] = "your data is not REJECTED";
    header('location: chureq.php');

  }
}



if(isset($_POST['accept'])){
    $rq_id=$_POST['id'];
    $query = "UPDATE `req` SET `statuse` = 'ACCEPT'WHERE `rq_id` ='$rq_id'";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        $_SESSION['success']="YOUR DATA IS ACCEPT";
        header('Location:chureq.php');
    }
    else
    {
        $_SESSION['status']="YOUR DATA IS NOT ACCEPT";
        header('Location:chureq.php');
    }
  }


if(isset($_POST['delba_btn']))
{
  $id = $_POST['id'];
  $query = "DELETE FROM bap WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
   $_SESSION['success'] = "your data is deleted";
   header('location: bapfin.php');
  }
  else{
    $_SESSION['status'] = "your data is not deleted";
    header('location: bapfin.php');

  }
}


?>