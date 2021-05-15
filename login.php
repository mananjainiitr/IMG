<?php 
      $mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
      if (mysqli_connect_errno()){
          echo "failed to connect " . mysqli_connect_error();
          exit();
      }
      else{
          echo "fine<br />";
      }

      $phone = $_POST["number"];
      $pass = $_POST["pass"];     
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $flag = 0;
 $result = $mysqli->query("SELECT phoneNo , pass FROM manan_alluser ;");
 while($row = $result -> fetch_assoc()){
      echo $row["phoneNo"] . $phone . "<br>";
      echo $row["pass"] .$pass . "<br>";
     
   
    if ($row["phoneNo"] == ($phone%10000000000)and $row["pass"]==$pass)
     {
      $flag = 1;
     header("Location: http://ec2-3-128-28-166.us-east-2.compute.amazonaws.com/manan/test.php"); 
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
 ?>





<!DOCTYPE html>
<html>
<head>
<style>
             input{
                 width :50vw;
                 
             }
             body{
                 background-color: lightblue;
             }
        </style>
</head>
<body>
<h1>SIGN UP FORM</h1>
        <form method = "post">
        <label>Phone number:</label><span style = "color:red;"id = usererror></span><br>
            <input  id = "number" name = "number"type="text" placeholder="Please enter your number..."><br>
            <label>Password:</label><span style = "color:red;"id = usererror></span><br>
            <input id = "pass" name = "pass"type="text" placeholder="Please enter your password..."><br>
            <input type = "submit" value ="login">
</form>
     

</body>
</html>

