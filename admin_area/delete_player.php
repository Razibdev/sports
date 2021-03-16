<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_player'])){
        
        $delete_p = $_GET['delete_player'];
        
        $delete_p = "delete from register where id='$delete_p'";
        
        $run_delete = mysqli_query($con,$delete_p);
        
        if($run_delete){
            
            echo "<script>alert('If you want to delete the player details.')</script>";
            
            echo "<script>window.open('index.php?view_playerlists','_self')</script>";
            
        }
        
    }

?>




<?php } ?>