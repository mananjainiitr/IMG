<?php
$mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
if (mysqli_connect_errno()){
echo "failed to connect " . mysqli_connect_error();
}
else{
   // echo "fine<br />";
}
//echo "<div id = 'names'>";
//$contacts = $mysqli->query("SELECT DISTINCT img_loc,phonenumber from manan_profiledata;");
// while($people = $contacts -> fetch_assoc()){
 //        if ($people["img_loc"])
//{
//$img = $people["img_loc"];
//echo $people["img_loc"] ."<br>";
 //echo "<img style ='width:200px;height:200px;border-radius:50%;' src =".$img.">";
//$con = $people["phonenumber"];
//}
//}
//echo "</div>";ø
function myfunc()
{
   //setcookie("message_to", $_GET['hello'] );
    setcookie("profile_data", "", time() - 3600);
  setcookie("user_data", "", time() - 3600);
// setcookie("message_to", "", time() - 3600);
    header("Location: http://ec2-3-128-28-166.us-east-2.compute.amazonaws.com/manan/login.php"); 
   //     exit(); 

       }
if (isset($_GET['hello'])) {
    myfunc();
  }

 $s1 = $mysqli->query("SELECT DISTINCT* FROM manan_profiledata WHERE (phonenumber  =". $_COOKIE["profile_data"].");");
 while($row = $s1 -> fetch_assoc()){
         if ($row["img_loc"])
{
$location = $row["img_loc"];
$bio = $row["bio"];
}
}
$phone = "";
$city ="";
$gender  ="";
$username ="";

$s2 = $mysqli->query("SELECT DISTINCT* FROM manan_alluser WHERE (phoneNo  =". $_COOKIE["profile_data"].");");

 while($row2 = $s2 -> fetch_assoc()){
        if ($row2["username"])
{ $username = $row2["username"];}
 if ($row2["phoneNo"])
{ $phone = $row2["phoneNo"];}
 if ($row2["city"])
{ $city = $row2["city"];}
 if ($row2["gender"])
{ $gender = $row2["gender"];}

}
// username , age , gender, useremail , pass , city , phone
?>

<!DOCTYPE html>
<html>
    <head>
     <style>
    #prof{
     width:320px;
    height :80vh;
     padding : 5vh;
     margin-left:30vw;
    background-color:white;
}


body{
background-color:#cccccc;
}
h1{margin-left:1vw;border-style:solid;background-color:#9af5d8;}
h2{margin-left:1vw;border-style:solid;background-color:#9af5d8;}
h3{margin-left:1vw;border-style:solid;background-color:#9af5d8;}
img{margin-left:1vw;border-style:solid;background-color:#9af5d8;}

    </style>
    </head>

    <body>
<div id = "prof">
    <table>
    <tr>
<?php echo "<img style ='width:200px;height:200px;border-radius:50%;' src =".$location.">";?>    
    </tr>
    <tr>
<?php echo "<h1>".$username."</h1>";?>
    </tr>
    <tr>
<?php echo "<h3>".$bio."</h3>";?>
    </tr>
<tr><?php echo "<h2> gender: ".$gender."</h2>";?></tr>
        <tr><?php echo "<h2> city: ".$city."</h2>";?></tr>
        <tr><?php echo "<h2> phone: ".$phone."</h2>";?></tr>
        

    </table>
<a href="contacts.php"><button>CHAT</button></a>
<a href="update.php"><button>UPDATE PROFILE</button></a>
<a href="chat.php?hello=logout"><button>Logout</button></a>
</div>
ø



    </body>
</html>

