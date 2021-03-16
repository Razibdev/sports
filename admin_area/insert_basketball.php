<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

       if($admin_type == "supper" || $admin_type == "basketball"){

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Basketball Tournament
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Insert Basketball Tournament
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                           First Team Name 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <select id="departments" name="department[]" class="form-control">
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
                        
                           Second Team Name 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <select id="departments" name="department[]" class="form-control">
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
                        
                            Tournament
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                           <select id="tournament" name="tournament" class="form-control">
                        <option disabled selected value="Select Tournament">Select Tournament</option>
                          <?php 

                            $tournament = "SELECT * FROM tournament";
                            $tournament = mysqli_query($con, $tournament);

                            while($row_department = mysqli_fetch_array($tournament)){
                                 $tou_id = $row_department['tou_id'];
                                 $tou_name = $row_department['tou_name'];

                                  echo "
                                  
                                  <option value='$tou_name'> $tou_name </option>
                                  
                                  ";

                            }

                         ?>

                    </select>
                            
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 2 finish -->


                      <div class="form-group"><!-- form-group 2 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Dates
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="dates" type="date" class="form-control">
                            
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 2 finish -->




                     <div class="form-group"><!-- form-group 2 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Time
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="times" type="time"  class="form-control">
                            
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 2 finish -->

                    <div class="form-group"><!-- form-group 3 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Result
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="text" name="result" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 3 finish -->
                    
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
              
              $team_name = $_POST['department'];

              $team = implode(" VS ", $team_name);
              
              $tournament = $_POST['tournament'];
              $dates = $_POST['dates'];
              $times = $_POST['times'];

               $result = $_POST['result'];
              
              
              $insert_cat = "insert into basketball (bas_team,bas_date,bas_result, dates, times) values ('$team','$tournament','$result', '$dates', '$times')";
              
              $run_cat = mysqli_query($con,$insert_cat);
              
              if($run_cat){
                  
                  echo "<script>alert('New Update has been successfully done')</script>";
                  
                  echo "<script>window.open('index.php?view_basketball','_self')</script>";
                  
              }
              
          }

?>

<?php 
 

}else{
  echo "<script>alert('Your are not supper admin or basketball')</script>";
  echo "<script>window.open('index.php?insert_playerlist','_self')</script>";
}

} ?>