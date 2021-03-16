<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_admin'])){
        
        $delete_admin = $_GET['delete_admin'];
        
        $delete_cat = "delete from admin where admin_id='$delete_admin'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Admin Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_admin','_self')</script>";
            
        }
        
    }

?>




<?php } ?>