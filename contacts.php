<?php
$mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
if (mysqli_connect_errno()){
echo "failed to connect " . mysqli_connect_error();
}
else{
   // echo "fine<br />";
}
 //header("Location: login.php"); 
echo "<div id = 'names'>";
$contacts = $mysqli->query("SELECT DISTINCT img_loc,phonenumber from manan_profiledata;");
 while($people = $contacts -> fetch_assoc()){
         if ($people["img_loc"])
{
echo "<li><div id ='imgname'>";
$img = $people["img_loc"];
 echo "<img style ='width:50px;height:50px;border-radius:50%;' src =".$img.">";
$con = $people["phonenumber"];
 echo "<button onclick ='myfunc(".$con.")' id = 'list'  value =".$con.">".$con."</button>";

// echo "<button id = 'list'  value =".$con.">".$con."</button>";
echo "</div></li>";
}
}
echo "</div>";
/*
function myfunc()
{   echo "hello";
 setcookie("message_to" , $_GET['hello']);
  //  header("Location: login.php"); 

   }
if (isset($_GET['hell'])) {
   // myfunc();
echo $_GET['hell'];
 header("Location: login.php"); 
  }*/
?>

<!DOCTYPE html>
<html>
<head>
<script>
function myfunc(i){
console.log(i);
document.cookie = "message_to = "+i;
document.location = "chatbox.php";
}
</script>
<style>
#list{
width:600px;
border:none;
background-color:#d2ebfc;
font-size: 40px;
}
#imgname{
width: 700px;
  height: 60px;
  border: 1px solid #c3c3c3;
  background-color:#d2ebfc;
  display: flex;
  flex-wrap: wrap;
  align-content: center;}
</style>
</head>
<body><a href = "chat.php"><button >BACK</button></a>
</body>
</html>

