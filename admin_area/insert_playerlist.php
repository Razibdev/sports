<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Player LIst </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Playerlist
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert PlayerList 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="name" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Department </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                           <select id="departments" name="department" class="form-control">
                            <option disabled selected value="Select Department">Select Department</option>
                              <?php 

                                $department = "SELECT * FROM department";
                                $run_department = mysqli_query($con, $department);

                                while($row_department = mysqli_fetch_array($run_department)){
                                     $dept_id = $row_department['dep_id'];
                                     $dept_name = $row_department['names'];

                                      echo "
                                      
                                      <option value='$dept_name'> $dept_name </option>
                                      
                                      ";

                                }

                             ?>

                    </select>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Batch</label> 
                      
                      <div class="col-md-6" ><!-- col-md-6 Begin -->
                          
                          <input type="text" name="batch" class="form-control" required >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Exam Roll </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input type="number" name="roll" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Gender </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                        <label class="radio-container">
                        <input type="radio" checked="checked" name="gender" value="Boy"> Boy
                        <span class="radio-checkmark"></span>
                        </label>
                        <label class="radio-container">
                            <input type="radio" name="gender" value="Girl" > Girl
                            <span class="radio-checkmark"></span>
                        </label>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> phone </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          <input type="number" name="phone" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> select sports </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <?php 
                 
                          $sports = "SELECT * FROM sports";
                          $run_sports = mysqli_query($con, $sports);
                 
                          while($row_sports = mysqli_fetch_array($run_sports)){
                               $sports_id = $row_sports['sports_id'];
                               $sports_name = $row_sports['sports_name'];
                 
                                echo "
                 
                                <label class='check-container'>
                                
                                <input type='checkbox' name='sports[]' value='$sports_name'> $sports_name
                                  <span class='checkmark'></span>
                                </label>
                                ";
                 
                          }
                 
                       ?> 
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group">
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                       <input type="submit" name="submit" value="Insert Player List">
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


    $name = $_POST['name'];
    $department = $_POST['department'];
    $batch = $_POST['batch'];
    $roll = $_POST['roll'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $sp = $_POST['sports'];
    $sports = implode(", ", $sp);

           

        $sql = "INSERT INTO register(player_name, player_department, player_batch, player_roll, player_gender, sports, player_phone) VAlUES('$name', '$department', '$batch', '$roll', '$gender', '$sports', '$phone')";

        $run_sql = mysqli_query($con, $sql);

        if($run_sql){

            echo '<script>alert("Your Registration Successfully done!")</script>';
        }




}


     ?>


<?php } ?>