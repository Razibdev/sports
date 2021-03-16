<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

         if($admin_type == "supper" || $admin_type == "volleyball"){



?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Volleyball Tournament
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Volleyball Tournament
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID </th>
                                <th> Team </th>
                                <th> Tournament </th>
                                <th> Date </th>
                                <th> Time </th>
                                <th> result </th>
                                <th> Delete Team </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_cats = "select * from volleyball";
          
                                $run_cats = mysqli_query($con,$get_cats);
          
                                while($row_cats=mysqli_fetch_array($run_cats)){
                                    
                                    $vol_id = $row_cats['vol_id'];
                                    
                                    $vol_name = $row_cats['vol_team'];
                                    
                                    $vol_date = $row_cats['vol_date'];
                                    $dates = $row_cats['dates'];
                                    $times = $row_cats['times'];
                                    $vol_result = $row_cats['vol_result'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $vol_name; ?> </td>
                                <td > <?php echo $vol_date; ?> </td>
                                <td > <?php echo $dates; ?> </td>
                                <td > <?php echo date('g:i A', strtotime($times)); ?> </td>
                                <td> 
                                    <?php echo $vol_result; ?>
                                </td>
                                <td> 
                                    <a href="index.php?delete_volleyball= <?php echo $vol_id; ?> ">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php  

 

}else{
    echo "<script>alert('Your are not supper admin or volleyball')</script>";
    echo "<script>window.open('index.php?insert_playerlist','_self')</script>";
}


 } ?>