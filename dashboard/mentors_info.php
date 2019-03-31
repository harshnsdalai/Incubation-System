<?php 

include "bootstrap.php";


$con=mysqli_connect("localhost","root","","incubation");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM mentors");

    ?>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1 class="display-4">Available Mentors</h1></a>
  
 
</nav>
  





<div class="text-center container"  id="" style="position:relative;top:150px">

<?php 
while($row = mysqli_fetch_array($result))

{?>
<div class="card" style="width: 18rem;padding:10px;margin-left:35%;margin-bottom:20px;" >
  <img src="mentors.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name'] ?></h5>
    <p class="card-text">To add speciality</p>
    <a href='mail.php?id=<?php echo $row["id"]?>&email=<?php echo $row["email"]?>&sid=<?php echo $_GET['sid']; ?>' class="btn btn-primary">Mail the mentor</a>
  </div>
</div>


          
      
<?php
}
      mysqli_close($con);
?>
</div>
</body>
</html>