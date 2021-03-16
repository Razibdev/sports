<?php  
 //filter.php  
 if(isset($_POST["from_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "gbsports");  
      $output = '';  
      $query = "  
           SELECT * FROM badminton  
           WHERE bad_date = '".$_POST["from_date"]."' LIMIT 10
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="badminton-table">  
                <tr>  
                     <th>Match</th>  
                     <th>Team</th>  
                     <th>Date</th>  
                     <th>Time</th>  
                     <th>Result</th>   
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["bad_id"] .'</td>  
                          <td>'. $row["bad_team"] .'</td>  
                          <td>'. $row["dates"] .'</td>  
                          <td>'. date('g:i A', strtotime($row["times"])) .'</td>  
                          <td> '. $row["bad_result"] .'</td>   
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>