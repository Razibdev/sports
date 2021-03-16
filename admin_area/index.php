<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admin where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        $admin_type = $row_admin['type'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['insert_playerlist'])){
                        
                        include("insert_playerlist.php");
                        
                }if(isset($_GET['view_playerlists'])){
                        
                        include("view_playerlists.php ");
                        
                }if(isset($_GET['delete_player'])){
                        
                        include("delete_player.php ");
                        
                }if(isset($_GET['insert_football'])){
                        
                        include("insert_football.php");
                        
                }if(isset($_GET['view_football'])){
                        
                        include("view_football.php");
                        
                }if(isset($_GET['delete_football'])){
                        
                        include("delete_football.php");
                        
                }if(isset($_GET['insert_cricket'])){
                        
                        include("insert_cricket.php");
                        
                }if(isset($_GET['view_cricket'])){
                        
                        include("view_cricket.php");
                        
                }if(isset($_GET['delete_cricket'])){
                        
                        include("delete_cricket.php");
                        
                }if(isset($_GET['insert_basketball'])){
                        
                        include("insert_basketball.php");
                        
                }if(isset($_GET['view_basketball'])){
                        
                        include("view_basketball.php");
                        
                }if(isset($_GET['delete_basketball'])){
                        
                        include("delete_basketball.php");
                        
                }if(isset($_GET['insert_volleyball'])){
                        
                        include("insert_volleyball.php");
                        
                }if(isset($_GET['view_volleyball'])){
                        
                        include("view_volleyball.php");
                        
                }if(isset($_GET['delete_volleyball'])){
                        
                        include("delete_volleyball.php");
                        
                }if(isset($_GET['insert_badminton'])){
                        
                        include("insert_badminton.php");
                        
                }if(isset($_GET['view_badminton'])){
                        
                        include("view_badminton.php");
                        
                }if(isset($_GET['delete_badminton'])){
                        
                        include("delete_badminton.php");
                        
                }if(isset($_GET['insert_Kabadi'])){
                        
                        include("insert_Kabadi.php");
                        
                }if(isset($_GET['view_Kabadi'])){
                        
                        include("view_Kabadi.php");
                        
                }if(isset($_GET['delete_kabadi'])){
                        
                        include("delete_kabadi.php");
                        
                }if(isset($_GET['insert_champion'])){
                        
                        include("insert_champion.php");
                        
                }if(isset($_GET['view_champions'])){
                        
                        include("view_champions.php");
                        
                }if(isset($_GET['delete_champions'])){
                        
                        include("delete_champions.php");
                        
                }if(isset($_GET['insert_slider'])){
                        
                        include("insert_slider.php");
                        
                }if(isset($_GET['insert_department'])){
                        
                        include("insert_department.php");
                        
                }
                if(isset($_GET['view_department'])){
                        
                        include("view_department.php");
                        
                }if(isset($_GET['delete_department'])){
                        
                        include("delete_department.php");
                        
                }if(isset($_GET['insert_tournament'])){
                        
                        include("insert_tournament.php");
                        
                }if(isset($_GET['view_tournament'])){
                        
                        include("view_tournament.php");
                        
                }if(isset($_GET['delete_tournament'])){
                        
                        include("delete_tournament.php");
                        
                }










                if(isset($_GET['live'])){
                        
                        include("live.php");
                        
                }if(isset($_GET['insert_admin'])){
                        
                        include("insert_admin.php");
                        
                }if(isset($_GET['view_admin'])){
                        
                        include("view_admin.php");
                        
                }if(isset($_GET['delete_admin'])){
                        
                        include("delete_admin.php");
                        
                }if(isset($_GET['edit_admin'])){
                        
                        include("edit_admin.php");
                        
                }





                  
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>       
</body>
</html>


<?php } ?>