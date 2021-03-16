<?php require_once('include/header.php'); ?>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "gbsports");  
 $query = "SELECT * FROM badminton ORDER BY bad_id desc LIMIT 10";  
 $result = mysqli_query($connect, $query);  
 ?> 


    <!-- Volleyball Section -->

    <section class="badminton-section clearfix">
          <div class="row heading-title">
              <h1>badminton details</h1>
         </div>
          <div class="row badminton-wrapper">


            
                <label for="badminton">Badminton : </label>
                
                <select id="from_date" name="from_date" class="form-control">
                        <option disabled selected value="Select Tournament">Select Tournament</option>
                          <?php 

                            $tournament = "SELECT * FROM tournament";
                            $tournament = mysqli_query($con, $tournament);

                            while($row_department = mysqli_fetch_array($tournament)){
                                 $tou_id = $row_department['tou_id'];
                                 $tou_name = $row_department['tou_name'];

                                  echo "
                                  
                                  <option value='$tou_name'> $tou_name </option>
                                  
                                  ";

                            }

                         ?>

                    </select>
                    <br>

                 <input type="button" name="filter" id="filter" value="Show" class="btn btn-info show" /> 
                <div class="badminton-summary">
                    <table class="badminton-table">
                        <thead>
                            <tr>
                                <th>Match</th>
                                <th>Team vs Team</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Result</th>
                            </tr>
                           <?php  
                         while($row = mysqli_fetch_array($result))  
                         {  
                         ?>  
                              <tr>  
                                   <td><?php echo $row["bad_id"]; ?></td>  
                                   <td><?php echo $row["bad_team"]; ?></td>  
                                   <td><?php echo $row["dates"]; ?></td>  
                                   <td><?php echo date('g:i A', strtotime($row["times"])); ?></td>  
                                   <td> <?php echo $row["bad_result"]; ?></td>  
                              </tr>  
                         <?php  
                         }  
                         ?>  
                        </thead>
                    </table>
                </div>
           
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

     <script>

$(document).ready(function(){  
            

           $(function(){  
                $("#from_date").val();   
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                if(from_date != '')  
                {  
                     $.ajax({  
                          url:"spfile/badminton.php",  
                          method:"POST",  
                          data:{from_date:from_date},  
                          success:function(data)  
                          {  
                               $('.badminton-summary').html(data);
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
    </script>

  <?php  require_once('include/footer.php'); ?>