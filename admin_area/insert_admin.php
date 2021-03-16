<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{


       if($admin_type != "supper"){
            echo "<script>alert('Your are not supper admin')</script>";
            echo "<script>window.open('index.php?insert_playerlist','_self')</script>";
        }else if($admin_type == "supper"){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Admin </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Admin
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Admin
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="admin_name" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin Email</label> 
                      
                      <div class="col-md-6" ><!-- col-md-6 Begin -->
                          
                          <input type="email" name="admin_email" class="form-control" required >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin Password</label> 
                      
                      <div class="col-md-6" ><!-- col-md-6 Begin -->
                          
                          <input type="password" name="admin_password" class="form-control" required >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin Type</label> 
                      
                      <div class="col-md-6" ><!-- col-md-6 Begin -->
                          
                          <select name="type" class="form-control">
                            <option value="" selected disabled>Select Your Chose</option>
                            <option value="supper">Supper</option>
                            <option value="cricket">Cricket</option>
                            <option value="basketball">Basketball</option>
                            <option value="football">Football</option>
                            <option value="badminton">Badminton</option>
                            <option value="volleyball">Volleyball</option>
                            <option value="kabadi">Kabadi</option>
                          </select>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                

                   <div class="form-group">
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                       <input type="submit" name="submit" class="btn btn-primary" value="Insert Cleaning Service">
                     </div>
                   </div>
                   
                   
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
</body>
</html>


 <?php 


if(isset($_POST['submit'])){


    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $type = $_POST['type'];
       

        $sql = "INSERT INTO admin(admin_name,  admin_email, admin_password, type) VAlUES('$admin_name', '$admin_email', '$admin_password', '$type')";

        $run_sql = mysqli_query($con, $sql);

        if($run_sql){

            echo '<script>alert("Admin Account has been create Successfully done!")</script>';
             echo "<script>window.open('index.php?view_admin','_self')</script>";
        }




}


     ?>


<?php } } ?>