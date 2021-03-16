<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Player List
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View PlayerList
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Player ID: </th>
                                <th> Player name: </th>
                                <th> Player Department: </th>
                                <th> Player Batch: </th>
                                <th> Player Roll: </th>
                                <th> Player Gender: </th>
                                <th> Player Phone: </th>
                                <th> Player Sports: </th>
                                <th> Player Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_pro = "select * from register";
                                
                                $run_pro = mysqli_query($con,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $p_id = $row_pro['id'];
                                    
                                    $p_name = $row_pro['player_name'];
                                    
                                    $p_department = $row_pro['player_department'];
                                    
                                    $p_batch = $row_pro['player_batch'];
                                    
                                    $p_roll = $row_pro['player_roll'];
                                    
                                    $p_gender = $row_pro['player_gender'];
                                    $p_sports = $row_pro['sports'];
                                    $p_phone = $row_pro['player_phone'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>

                                <td> <?php echo $p_name; ?> </td>
                                <td> <?php echo $p_department; ?></td>
                                <td> $ <?php echo $p_batch; ?> </td>
                                <td> <?php 
                                    
                                        echo $p_roll;
                                     ?> 
                                </td>
                                <td> <?php echo $p_gender; ?> </td>
                                <td> <?php echo $p_phone; ?> </td>
                                <td> <?php echo $p_sports ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_player=<?php echo $p_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>