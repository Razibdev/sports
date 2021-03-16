<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_basketball'])){
        
        $delete_basketball = $_GET['delete_basketball'];
        
        $delete_cat = "delete from basketball where bas_id='$delete_basketball'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Basketball tournament Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_basketball','_self')</script>";
            
        }
        
    }

?>




<?php } ?>