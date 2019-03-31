<?php

$link = mysqli_connect("localhost","root","","incubation");

if (mysqli_connect_error()){
    
    die("Cannot connect to database. Sorry!");
}

if (array_key_exists("email",$_POST) and (array_key_exists("password",$_POST))){
    
    $query = "select * from `mentors` where `email` ='".mysqli_real_escape_string($link,$_POST["email"])."'";
    
    $result=mysqli_query($link,$query);



    if (mysqli_num_rows($result)>0){

echo "This email is alredy registered";

}else{

$query = "insert into `mentors`(`email`,`password`
,`work_experince`,`fsp`,`number`,`name`) values ('".$_POST['email']."','".mysqli_real_escape_string($link,$_POST["password"])."','".mysqli_real_escape_string($link,$_POST["work_experience"])."','".mysqli_real_escape_string($link,$_POST["fsp"])."','".mysqli_real_escape_string($link,$_POST["number"])."','".mysqli_real_escape_string($link,$_POST["name"])."')";//s.mysqli_real_escape_string($link,$_POST["financial"])."','".mysqli_real_escape_string($link,$_POST["manpower"]).

if(mysqli_query($link, $query)){

    header("Location: mentorlogin.php");

};

   
        
    
    
    
    
   
}}
else{

    //echo ("There was some error. Please try again later!");
}




?>