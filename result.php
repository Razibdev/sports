<?php require_once('include/header.php'); ?>


    <!-- Result Section -->

    <section class="result-section clearfix">
        <div class="row heading-title">
              <h1>champions</h1>
         </div>
        <div class="row result-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Sports</th>
                        <th>Champions</th>
                        <th>Runners Up</th>
                        <th>Year</th>
                    </tr>

             <?php 
            
                $i=0;

                $get_cats = "select * from champions ORDER BY cham_id DESC LIMIT 5";

                $run_cats = mysqli_query($con,$get_cats);

                while($row_cats=mysqli_fetch_array($run_cats)){
                    
                    $cham_id = $row_cats['cham_id'];
                    
                    $cham_name = $row_cats['cham_name'];
                    
                    $runners_up = $row_cats['runners_up'];
                    $dates = $row_cats['dates'];
                    $sports = $row_cats['sports'];


                    
                    $i++;
            
            ?>
                    <tr>
                        <td><?php echo $sports; ?></td>
                        <td><?php echo $cham_name; ?></td>
                        <td><?php echo $runners_up; ?></td>
                        <td><?php echo $dates; ?></td>
                    </tr>
                     <?php } ?>
                </thead>
            </table>
        </div>
    </section>

    <!-- fixed-icon Section -->
    
    <section class="fixed-icon-section">
        <div class="fixed-icon clearfix">
            <a href="#"><img src="img/facebook.png" alt="facebook"></a>
            <a href="#"><img src="img/twitter.png" alt="twitter"></a>
            <a href="#"><img src="img/google.png" alt="google plus"></a>
            <a href="#"><img src="img/linkedin.png" alt="linkedin"></a>
        </div>
    </section>

    <?php  require_once('include/footer.php'); ?>