<?php

session_start();
 include('include/db.php'); 

$get_live = "select * from live ORDER BY live_id DESC LIMIT 1";
        
        $run_admin = mysqli_query($con,$get_live);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $url = $row_admin['url'];


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GB Sports</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

   
  

</head>
<body>  
    <!-- Header Section -->

    <header class="header-section clearfix">
        <nav>
            <div class="row">
                <div class="col span_1_of_4 logo-icon">
                    <a href="index.php">
                    <img class="icon" src="img/gb-favicon.png" alt="gb">
                    <span class="logo">GB SPORTS</span>
                    </a>
                    <p class="title">একটি ব্যতিক্রমধর্মী শিক্ষাপ্রতিষ্ঠান</p>    
                </div>
                <div class="col span_2_of_4">    
                    <ul class="main-nav">
                        <li><a class="act" href="index.php">home</a></li>
                        <li><a href="playerlist.php">player list</a></li>
                        <li>
                            <a href="#">tournaments <i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <a href="football.php">Football</a>
                                <a href="cricket.php">Cricket</a>
                                <a href="basketball.php">Basketball</a>
                                <a href="volleyball.php">Volleyball</a>
                                <a href="badminton.php">Badminton</a>
                                <a style="border-bottom: none;" href="kabadi.php">Kabadi</a>
                            </div>
                        </li>
                        <li><a href="result.php">champions</a></li>
                        <li><a href="<?php echo $url; ?>">Live</a></li>
                    </ul>
                </div>   
                <div class="col span_1_of_4">
                    <a class="join" href="join.php">join</a>
                </div>
            </div>
        </nav>
    </header>