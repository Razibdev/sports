<?php require_once('include/header.php'); ?>



<?php 


if(isset($_POST['submit'])){

    $erro = array();

        if(empty($_POST['name'])){

            $erro['name'] = "Please Enter Your name!";
        }else{
            $player_name = mysqli_real_escape_string($con, $_POST['name']);
        }

        

        if(empty( $_POST['department'])){
            $erro['department'] = "Please Select Your Department";
        }else{
            $player_department = mysqli_real_escape_string($con, $_POST['department']);
        }

        

        if(empty($_POST['batch'])){
            $erro['batch'] = "Please Enter Your Batch";
        }else{
            $player_batch = mysqli_real_escape_string($con, $_POST['batch']);
        }

        

        if(empty($_POST['roll'])){
            $erro['roll'] = "Please Enter Your Department";
        }else{
            $player_roll = mysqli_real_escape_string($con, $_POST['roll']);
        }

        

        if(empty($_POST['gender'])){
            $erro['gender'] = "Please Select Your Gender";
        }else{
            $player_gender = mysqli_real_escape_string($con, $_POST['gender']);
        }

        

        if(empty($_POST['phone'])){
            $erro['phone'] = "Please Enter Your Phone number";
        }else{
            $player_phone = mysqli_real_escape_string($con, $_POST['phone']);
        }

       

        if(empty($_POST['sports'])){
            $erro['sports'] = "Please Select Your  Sports";
        }else{
             $sports =  $_POST['sports'];
             $sports_p = implode(',', $sports);
        }

        if(empty($_POST['terms'])){
            $erro['sports'] = "Please Select Terms and Conditions";
        }else{
            $terms = $_POST['terms'];
        }



    }

 ?>

 



    <!-- Join Section -->

    <section class="join-section">
    <div class="row heading-title">
              <h1>Registration form</h1>
         </div>
        <div class="row">
            <div class="join-wrapper">
                <p>Register with us by filling out the form bellow.</p>
                
                <form action="" class="join-form" method="POST" onsubmit="return validate()">

                    <label for="name">Name</label>
                    <input type="text" name="name"><span class="erro"><?php if(isset($erro['name'])){echo $erro['name'];} ?></span>
                    <label for="department">Department</label>
                    

                    <select id="departments" name="department" class=" select">
                        <option disabled selected value="Select Department">Select Department</option>
                          <?php 

                            $department = "SELECT * FROM department";
                            $run_department = mysqli_query($con, $department);

                            while($row_department = mysqli_fetch_array($run_department)){
                                 $dept_id = $row_department['dep_id'];
                                 $dept_name = $row_department['names'];

                                  echo "
                                  
                                  <option value='$dept_name'> $dept_name </option>
                                  
                                  ";

                            }

                         ?>

                    </select>
                    <span class="erro"><?php if(isset($erro['department'])){echo $erro['department'];} ?></span>
                    <label for="batch">Batch</label>
                    <input type="text" name="batch">
                    <span class="erro"><?php if(isset($erro['batch'])){echo $erro['batch'];} ?></span>

                    <label for="roll">Exam Roll</label>
                    <input type="number" name="roll">
                    <span class="erro"><?php if(isset($erro['roll'])){echo $erro['roll'];} ?></span>

                    <label for="gender">Gender</label>
                    <label class="radio-container">
                        <input type="radio" checked="checked" name="gender" value="Boy"> Boy
                        <span class="radio-checkmark"></span>
                    </label>
                    <label class="radio-container">
                        <input type="radio" name="gender" value="Girl"> Girl
                        <span class="radio-checkmark"></span>
                    </label>
                    <label for="phone">Phone</label>
                    <input type="number" name="phone">
                    <span class="erro"><?php if(isset($erro['department'])){echo $erro['department'];} ?></span>


                    <label for="sports">Select Sports  <i class="fa fa-info"></i></label>
                    
                   <?php 
                 
                          $sports = "SELECT * FROM sports";
                          $run_sports = mysqli_query($con, $sports);
                 
                          while($row_sports = mysqli_fetch_array($run_sports)){
                               $sports_id = $row_sports['sports_id'];
                               $sports_name = $row_sports['sports_name'];
                 
                                echo "
                 
                                <label class='check-container'>
                                
                                <input type='checkbox' name='sports[]' value='$sports_name'> $sports_name
                                  <span class='checkmark'></span>
                                </label>
                                ";
                 
                          }
                 
                       ?> 
                       <span class="erro"><?php if(isset($erro['sports'])){echo $erro['sports'];} ?></span>

             
                    <label class="check-container">
                        <input type="checkbox" name="terms" value="ok"> I accept the <a href="#">Terms and Conditions</a>
                        <span class="checkmark"></span>
                    </label> 
                    <input type="submit" name="submit" value="Register">
                </form>
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

    <?php 


if(isset($_POST['submit'])){


        if(!empty($_POST['name']) && !empty($_POST['department']) && !empty($_POST['batch']) && !empty($_POST['roll']) && !empty($_POST['gender']) && !empty($_POST['phone']) && !empty($_POST['sports']) && !empty($_POST['terms'])){


if(count($_POST['sports']) <=3){

        $sql = "INSERT INTO register(player_name, player_department, player_batch, player_roll, player_gender, sports, player_phone,terms) VAlUES('$player_name', '$player_department', '$player_batch', '$player_roll', '$player_gender', '$sports_p', '$player_phone', '$terms')";

        $run_sql = mysqli_query($con, $sql);

        if($run_sql){

            echo '<script>alert("Your Registration Successfully done!")</script>';
        }
    }else{
        echo '<script>alert("Your Chose of sports at most 3! not registration")</script>';
    }

    
}









    }






     ?>

   <?php require_once('include/footer.php'); ?>