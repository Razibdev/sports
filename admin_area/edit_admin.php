<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_admin'])){
        
        $edit_admin = $_GET['edit_admin'];
        
        $get_p = "select * from admin where admin_id='$edit_admin'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_cats = mysqli_fetch_array($run_edit);

         $admin_id = $row_cats['admin_id'];
                                    
        $admin_name = $row_cats['admin_name'];
        
        $admin_email = $row_cats['admin_email'];
        $admin_password = $row_cats['admin_password'];
        $admin_type = $row_cats['type'];
                                    


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit Admin </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Admin
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit Admin
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="admin_name" type="text" class="form-control" value="<?php echo $admin_name; ?>" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin Email</label> 
                      
                      <div class="col-md-6" ><!-- col-md-6 Begin -->
                          
                          <input type="email" name="admin_email" class="form-control" value="<?php echo $admin_email; ?>" required >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin Password</label> 
                      
                      <div class="col-md-6" ><!-- col-md-6 Begin -->
                          
                          <input type="password" name="admin_password" class="form-control" value="<?php echo $admin_password; ?>" required >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin type</label> 
                      
                      <div class="col-md-6" ><!-- col-md-6 Begin -->
                          
                          <select name="type" id="" class="form-control">

                            <option selected value="<?php echo $admin_type; ?>"> <?php echo $admin_type; ?> </option>
                            
                            <?php 

                             $get_p = "select * from ad_type";
        
                              $run_edit = mysqli_query($con,$get_p);

                              while($row_cats = mysqli_fetch_array($run_edit)){
                                $admin_type = $row_cats['type'];
                                echo '<option value="'.$admin_type.'">'.$admin_type.'</option>';

                              }


                             ?>
                             
                           
                          </select>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                

                   <div class="form-group">
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                       <input type="submit" name="update" class="btn btn-primary" value="Insert Cleaning Service">
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


if(isset($_POST['update'])){


    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $admin_type = $_POST['type'];
       

        $sql = "UPDATE admin SET admin_name = '$admin_name', admin_email = '$admin_email', admin_password = '$admin_password', type = '$admin_type' WHERE admin_id = '$edit_admin'";

        $run_sql = mysqli_query($con, $sql);

        if($run_sql){

            echo '<script>alert("Admin Account has been Updated Successfully done!")</script>';
             echo "<script>window.open('index.php?view_admin','_self')</script>";
        }



}


     ?>


<?php } ?>