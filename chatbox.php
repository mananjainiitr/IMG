<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
setInterval(showpannel,1000);});
function showpannel(){
$("#mess").load("search.php",{count : "hh"});
}

</script>
<style>
#scr{
margin-left:40vw;
height:400px;
overflow:scroll;
margin-top:20vh;
background-color:white;
width:320px;
}
body{
background-color:#cccccc;
}
</style>

</head>
<body>
<div id ="scr">
<div id="mess">
<?php
$mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
if (mysqli_connect_errno()){
echo "failed to connect " . mysqli_connect_error();
}
else{
   // echo "fine<br />";
}
// select * from manan_chats WHERE ((sender_id = 9000000002 and reciver_id = 9898989898) OR (sender_id = 9898989898 and reciver_id =9000000002))AND(time>1621600713) ;
// $str2 = $mysqli->query("select * from manan_chats WHERE (sender_id = ".$_COOKIE['profile_data']." and reciver_id = ".$_COOKIE['message_to'].") OR (sender_id = ".$_COOKIE['message_to']." and reciver_id = ".$_COOKIE['profile_data'].");");
 //echo "select * from manan_chats WHERE (sender_id = ".$_COOKIE['profile_data']." and reciver_id = ".$_COOKIE['message_to'].") OR (sender_id = ".$_COOKIE['message_to']." and reciver_id = ".$_COOKIE['profile_data'].");"; 
$str2 = $mysqli -> query("select * from manan_chats WHERE (sender_id = ".$_COOKIE['profile_data']." and reciver_id = ".$_COOKIE['message_to'].") OR (sender_id = ".$_COOKIE['message_to']." and reciver_id = ".$_COOKIE['profile_data'].");");



while($people = $str2 -> fetch_assoc()){
        if ($people["chat"])

{
       $time = $people["time"];  
       echo "<div style='background-color:#86ebe7;width:300px;margin:10px;'id = 'message'>".$people["sender_id"];
        echo "<br>" .$people["chat"]."<br>"."</div>";
}
setcookie("time",$time);

}
?>
</div></div>
</body>
</html>





<?php

$mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
if (mysqli_connect_errno()){
echo "failed to connect " . mysqli_connect_error();
}
else{
   // echo "fine<br />";
}
 if(isset($_POST['btn'])and ($_POST['message']!="")){
//   $str = $mysqli->query("INSERT INTO manan_chats(sender_id,reciver_id,chat,time)VALUES(".$_COOKIE['profile_data'].",".$_COOKIE['message_to'].",\"".$_POST['message']."\"".",".time().");";}
//echo "INSERT INTO manan_chats(sender_id,reciver_id,chat,time)VALUES(".$_COOKIE['profile_data'].",".$_COOKIE['message_to'].",\"".$_POST['message']."\"".",".time().");";
}$str = $mysqli->query("INSERT INTO manan_chats(sender_id,reciver_id,chat,time)VALUES(".$_COOKIE['profile_data'].",".$_COOKIE['message_to'].",\"".$_POST['message']."\"".",".time().");");
?>


<div style="margin-left:40vw; width:300px;">
 <form method = "POST" action = "" enctype="multipart/form-data" >
 <input type = "text" name="message" required>
  <button  name = "btn">Send</button>
 </form>
<a href ="contacts.php"><button>back</button></a>
</div>
