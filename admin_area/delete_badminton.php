<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_badminton'])){
        
        $delete_badminton = $_GET['delete_badminton'];
        
        $delete_cat = "delete from badminton where bad_id='$delete_badminton'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the volleyball tournament Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_badminton','_self')</script>";
            
        }
        
    }

?>




<?php } ?>