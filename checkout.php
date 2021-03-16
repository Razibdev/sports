<?php


 require_once('include/header.php');


  ?>


  <div class="col-md-12"><!--col-md-12 begin-->
            <?php 

                if(!isset($_SESSION['player_email'])){
                    include('signin.php');
                }else{
                    include('playerlist.php');
                }

             ?>
            
        </div><!--col-md-12 finish-->









 <?php require_once('include/footer.php'); ?>