<?php 
$link = mysqli_connect("localhost","root","","incubation");

if (mysqli_connect_error()){
    
    die("Cannot connect to database. Sorry!");
}

if (array_key_exists("email",$_POST) and (array_key_exists("password",$_POST))){
    
    $query = "select * from `mentors` where `email` ='".mysqli_real_escape_string($link,$_POST["email"])."'limit 1";
    
    $result=mysqli_query($link,$query);

//$query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' limit 1";
                
                    //$result = mysqli_query($link, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) {
                        
                        $hashedPassword = $_POST['password'];
                        
                        if ($hashedPassword == $row['password']) {
                            
                            

                            header("Location: index.html");
                                
                        } else {
                            
                            $error = "That email/password combination could not be found.";
                            
                        }
                        
                    } else {
                        
                        $error = "That email/password combination could not be found.";
                        
                    }



                }



?>