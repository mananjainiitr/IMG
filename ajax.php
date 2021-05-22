<?php 
     $mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
     if (mysqli_connect_errno()){
         echo "failed to connect " . mysqli_connect_error();
         exit();
     }
     else{
       
     }
     $username = $_POST["name"] ;
     $age = $_POST["age"];
     $gender  = $_POST["gender"];
     $useremail  = $_POST["email"];
     $pass = $_POST["pass"];
    // $repass = $_POST["repass"];
     $city  = $_POST["city"];
     $phone = $_POST["number"];
  

      if($_SERVER["REQUEST_METHOD"] == "POST") {
        $flag = 0;
     $result = $mysqli->query("SELECT phoneNo FROM manan_alluser ;");
     while($row = $result -> fetch_assoc()){
       
         
          if ($row["phoneNo"] == ($phone%10000000000))
         {
          $flag = 1;
         
         }}
     if ($flag == 0 )
     {
        $mysqli -> query ("INSERT INTO manan_alluser ( username , age , gender, useremail , pass , city , phoneNo) VALUES  (" ."\"". $username ."\"". "," . $age .",\"" . $gender . "\""."," . "\"" . $useremail . "\"".","."\"" .$pass. "\"".",\"" .$city."\""."," .$phone.");");
        echo "sucessfull";
     }
     else
     {
         echo "<p style = 'color:red;' >* User already exist please try with diffrent phone number</p>";
     }}
?>
