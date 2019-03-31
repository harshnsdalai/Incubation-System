<?php

$id = $_GET['id'];
$from= $_GET["email"];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "incubation";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM mentors WHERE id = $id";

// sql to delete a record

$result = mysqli_query($conn, $sql);
 

if ($result) {
    $row = mysqli_fetch_array($result);
    if (array_key_exists("body",$_POST)){

    $to      = $row['email'];
    $subject = 'the subject';
    $message = $_POST["body"];
    $headers = 'From:'.$from.  "\r\n" .
    'Reply-To: sudocoders@codeutsava.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)){

        header('Location: admin.php'); //If book.php is your main page where you list your all records




        
    }else{
        echo 'Error in mailing.';
    };


    mysqli_close($conn);
    
    exit;
} else {
    
}}
?>

<?php include "bootstrap.php"?>
<div class="container">
<form method="POST" action="index.php?id=<?php echo $_GET['sid'] ?>"> 
  
  
  
  <div class="form-group text-center">
    <label for="exampleFormControlTextarea1"><h2 class="display-4">Write the letter to Mentor</h2></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="15"></textarea>
  </div>
  <input type="submit" class="btn btn-primary" style="position:relative;left:500px;" onclick="alert('Mail Sent succesfully')">
</form>

</div>


</body>

