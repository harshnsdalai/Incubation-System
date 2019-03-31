
<?php 




$con=mysqli_connect("localhost","root","","incubation");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM incubation");
      echo('<div class="accordion" id="accordionExample">');
    while($row = mysqli_fetch_array($result))

      {

        echo ('
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                '.$row['comp_name'].'
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            Idea : <br>
              '.$row['idea'].'
            </div>
          </div>


          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            Contact : <br>'.
            $row['number'].'
            </div></div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            DIPP Number : <br>'.
            $row['dipp'].'
            </div></div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            Financial Time : <br>'.
            $row['financial'].'
            </div></div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            Man Power Need : <br>'.
            $row['manpower'].'
            </div>
          </div>
        ');
      //echo "Start Up Name : ".$row['startup_name'] . "</br> " ."idea : ". $row['idea'];
      //echo "</br>Work Space : ".$row['work_space'] . "</br> " ."Financial Support : ". $row['financial_support'];</button>
      
      //echo "</br>Man Power Needed: ".$row['man_power'] . "</br> " ."location: ". $row['location']."</br>"."Contact :".$row['contact']; //these are the fields that you have stored in your database table employee
      //echo "</br></br>";
      //}
      //echo "<tr>";
      //echo "<td>".$row['email']."</td>";
      //echo "<td>".$row['startup_name']."</td>";
      //echo "<td>".$row['idea']."</td>";
      //echo "<td>".$row['work_space']."</td>";

      echo "<a href='delete.php?id=".$row['id']."'>Reject Startup</a><br>";
      echo "<a href='send_email.php?id=".$row['id']."'>Accept Startup and Send Confirmation Email</a>"; //if you want to delete based on staff_id
      //echo "</tr>";
      }// end while loop
      echo('</div>');
      
    mysqli_close($con);
?>