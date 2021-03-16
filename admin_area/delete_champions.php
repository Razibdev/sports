<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_champions'])){
        
        $delete_champions = $_GET['delete_champions'];
        
        $delete_cat = "delete from champions where cham_id='$delete_champions'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the  Final Result Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_champions','_self')</script>";
            
        }
        
    }

?>




<?php } ?>