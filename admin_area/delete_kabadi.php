<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_kabadi'])){
        
        $delete_kabadi = $_GET['delete_kabadi'];
        
        $delete_cat = "delete from kabadi where kabadi_id='$delete_kabadi'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Kabadi tournament Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_Kabadi','_self')</script>";
            
        }
        
    }

?>




<?php } ?>