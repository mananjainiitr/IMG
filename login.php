<?php 
      $mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
      if (mysqli_connect_errno()){
          echo "failed to connect " . mysqli_connect_error();
          exit();
      }
      else{
         // echo "fine<br />";
      }

      $phone = $_POST["number"];
      $pass = $_POST["pass"];     
      $remember = isset($_POST["remember"]);
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $flag = 0;
 $result = $mysqli->query("SELECT phoneNo , pass FROM manan_alluser ;");
 while($row = $result -> fetch_assoc()){
     // echo $row["phoneNo"] . $phone . "<br>";
     // echo $row["pass"] .$pass . "<br>";
     
   
    if ($row["phoneNo"] == ($phone%10000000000)and $row["pass"]==$pass)
     {
      $flag = 1;
       if($remember)
      {
        $cookie_name = "username";
        setcookie("user_data", $phone , time()+2*24*60*60 );   
        
      }
setcookie("profile_data", $phone );
	
     header("Location: http://ec2-3-128-28-166.us-east-2.compute.amazonaws.com/manan/profile.php"); 
     exit(); 
  
       break;
     }}
 if ($flag == 0 )
 {
      
    echo "unsucessfull";
 }
 else
 {
       echo "sucessfull";
 }}
 function myfunc()
       {setcookie("profile_data", $_COOKIE["user_data"]);
        header("Location: http://ec2-3-128-28-166.us-east-2.compute.amazonaws.com/manan/profile.php"); 
        exit(); 

       }
if (isset($_GET['hello'])) {
    myfunc();
  }
 ?>





<!DOCTYPE html>
<html>
<head>
<style>
             input{
                 width :40vw;
                 height:40px;

                 
             }
             body{
                 background-color: #cccccc;

             }
             #box{
                width:40vw;
               padding :10px;
               margin-left:25vw;
               background-color:white;
              }
        </style>
</head>
<body>
<div id = "box">
<h1>LOGIN</h1>
        <form method = "post">
        <label>Phone number:</label><span style = "color:red;"id = usererror></span><br>
            <input  id = "number" name = "number"type="text" placeholder="Please enter your number..."><br>
            <label>Password:</label><span style = "color:red;"id = usererror></span><br>
            <input id = "pass" name = "pass"type="text" placeholder="Please enter your password..."><br>
         <div>  <label style ="margin-left:250px;">Remember Me</label><input type="checkbox"  name="remember" value="Remwmber Me"><br>
            <input type = "submit" value ="login">
</form>
       <a href = "http://ec2-3-128-28-166.us-east-2.compute.amazonaws.com/manan/test.php">Signup</a>
   </div> 
 <?php 
             if(isset($_COOKIE["user_data"])) {
      echo "<a href = "."\""."login.php?hello=true"."\""."> or Login to ".$_COOKIE["user_data"]."</a>";
    }

?>     

</body>
</html>

