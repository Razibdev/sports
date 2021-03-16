<?php require_once('include/header.php'); ?>


<?php
     $connect = mysqli_connect('localhost', 'root', '', 'gbsports');
     $query = "SELECT * FROM department ORDER BY names ASC";
     $result = mysqli_query($connect, $query);




?>


    <!-- Player Section -->

    <section class="player-list clearfix">
          <div class="row heading-title">
              <h1>player list</h1>
         </div>
        <div class="row player-wrapper">  
            <table id="mytable">
                <thead>
                         <tr>
                              <th>Name</th>
                              <th>gender</th>
                              <th><select name="category" id="category" class="form-control"><option value="">Department</option>
                                   <?php
                                        while($row = mysqli_fetch_array($result)){
                                             echo '<option value="'.$row["names"].'">'.$row["names"].'</option>';
                                        }
                                   ?>
                              </select></th>
                              <th>Batch</th>
                              <th>Roll</th>
                              <th>sports</th>
                         </tr>
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

    <script>

     $(document).ready(function(){
          load_data();
         function load_data(is_category){
              var dataTable = $('#mytable').DataTable({
                    "processing":true,
                    "serverSide":true,
                    "order":[],
                    "ajax":{
                      url:"fetch.php",
                      type:"POST",
                      data:{is_category:is_category}
                    },
                      
                    "columnDefs":[{
                         "targets":[2],
                         "orderable":false,

                    },]
              });
         }

         $(document).on('change', '#category', function(){
               var category = $(this).val();
               $('#mytable').DataTable().destroy();
               if(category != '')
               {
               load_data(category);
               }
               else
               {
               load_data();
               }
          });
     });

</script>

    <?php  require_once('include/footer.php'); ?>

