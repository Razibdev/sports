<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Final Result
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Insert Final Result
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Winner
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <select id="departments" name="champion" class="form-control">
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
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Runners Up 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <select id="departments" name="runners_up" class="form-control">
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
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->


                    
                    <div class="form-group"><!-- form-group 2 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Year
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="year" type="number" class="form-control">
                            
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 2 finish -->



                    <div class="form-group">
                      <label class="col-md-3 control-label">Sports</label>
                      <div class="col-md-6">
                        <select id="departments" name="sports" class="form-control">
                        <option disabled selected value="Select Department">Select Department</option>
                          <?php 

                            $department = "SELECT * FROM sports";
                            $run_department = mysqli_query($con, $department);

                            while($row_department = mysqli_fetch_array($run_department)){
                                 $dept_id = $row_department['sports_id'];
                                 $dept_name = $row_department['sports_name'];

                                  echo "
                                  
                                  <option value='$dept_name'> $dept_name </option>
                                  
                                  ";

                            }

                         ?>

                    </select>
                      </div>
                    </div>
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Submit Category" name="submit" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['submit'])){
              
              $cham_team = $_POST['champion'];

              $runners_up = $_POST['runners_up'];
              
              $year = $_POST['year'];
              $sport = $_POST['sports'];
              
              
              $insert_cat = "insert into champions (cham_name,runners_up,dates,sports) values ('$cham_team','$runners_up','$year', '$sport')";
              
              $run_cat = mysqli_query($con,$insert_cat);
              
              if($run_cat){
                  
                  echo "<script>alert('New Update has been successfully done')</script>";
                  
                  echo "<script>window.open('index.php?view_champions','_self')</script>";
                  
              }
              
          }

?>

<?php } ?>