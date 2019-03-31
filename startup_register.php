<?php

$link = mysqli_connect("localhost","root","","incubation");

if (mysqli_connect_error()){
    
    die("Cannot connect to database. Sorry!");
}

if (array_key_exists("email",$_POST) and (array_key_exists("password",$_POST))){
    
    $query = "select * from `incubation` where `email` ='".mysqli_real_escape_string($link,$_POST["email"])."'";
    
    $result=mysqli_query($link,$query);



    if (mysqli_num_rows($result)>0){

echo "This email is alredy registered";

}else{

$query = "insert into `incubation`(`email`,`password`
,`comp_name`,`idea`,`number`,`dipp`,`financial`,
`manpower`) values ('".$_POST['email']."','".mysqli_real_escape_string($link,$_POST["password"])."','".mysqli_real_escape_string($link,$_POST["comp_name"])."','".mysqli_real_escape_string($link,$_POST["idea"])."','".mysqli_real_escape_string($link,$_POST["number"])."','".mysqli_real_escape_string($link,$_POST["dipp"])."','".mysqli_real_escape_string($link,$_POST["financial"])."','".mysqli_real_escape_string($link,$_POST["manpower"])."')";

mysqli_query($link, $query);

   
        
    
    
    
    
    header("Location: startuplogin.php");
}}





?>