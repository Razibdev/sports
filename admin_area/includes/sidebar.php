<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div><!-- navbar-header finish -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->
        
        <li class="dropdown"><!-- dropdown begin -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i> <?php echo $admin_name;  ?> <b class="caret"></b>
                
            </a><!-- dropdown-toggle finish -->





            
        </li><!-- dropdown finish -->
        
    </ul><!-- nav navbar-right top-nav finish -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
           
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#playerlist"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Player list
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="playerlist" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_playerlist"> Insert Player List </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_playerlists"> View Player List </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#football"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-star"></i> Football
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="football" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_football"> Insert Football Tournament </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_football"> View Football Tournament </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-edit"></i> Cricket
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="p_cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_cricket"> Insert Cricket Tournament </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_cricket"> View Cricket Tournament</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-book"></i> Basketball
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_basketball"> Insert Basketball Tournament</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_basketball"> View Basketball Tournament</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Volleyball
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_volleyball"> Insert Volleyball Tournament </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_volleyball"> View Volleyball Tournament </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#boxes"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dropbox"></i> Badminton
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="boxes" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_badminton"> Insert Badminton Tournament </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_badminton"> View Badminton Tournament </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

             <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#kabadi"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dropbox"></i> Kabadi
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="kabadi" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_Kabadi"> Insert Kabadi Tournament </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_Kabadi"> View Kabadi Tournament </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#terms"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-table"></i> Champions
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="terms" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_champion"> Insert Champions Team </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_champions"> View Champions Team </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->


            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#deprtment"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Department
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="deprtment" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_department"> Insert Department </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_department"> View Department </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->



             <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#tournament"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Tournament
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="tournament" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_tournament"> Insert Tournament </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_tournament"> View Tournament </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->


             <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#sports"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Admin
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="sports" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_admin"> Insert Admin </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_admin"> View Admin </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->



            
            <li><!-- li begin -->
                <a href="index.php?live"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> Live
                </a><!-- a href finish -->
            </li><!-- li finish -->
            

            
            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->


<?php } ?>