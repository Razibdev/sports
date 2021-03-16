<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_department'])){
        
        $delete_department = $_GET['delete_department'];
        
        $delete_cat = "delete from department where dep_id='$delete_department'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the department Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_department','_self')</script>";
            
        }
        
    }

?>




<?php } ?>