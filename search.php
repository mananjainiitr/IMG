<?php
$mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
if (mysqli_connect_errno()){
echo "failed to connect " . mysqli_connect_error();
}
else{
//    echo "fine<br />";
}
// select * from manan_chats WHERE ((sender_id = 9000000002 and reciver_id = 9898989898) OR (sender_id = 9898989898 and reciver_id =9000000002))AND(time>1621600713) ;
// $str2 = $mysqli->query("select * from manan_chats WHERE (sender_id = ".$_COOKIE['profile_data']." and reciver_id = ".$_COOKIE['message_to'].") OR (sender_id = ".$_COOKIE['message_to']." and reciver_id$
 //echo "select * from manan_chats WHERE (sender_id = ".$_COOKIE['profile_data']." and reciver_id = ".$_COOKIE['message_to'].") OR (sender_id = ".$_COOKIE['message_to']." and reciver_id = ".$_COOKIE['pro$
$str2 = $mysqli -> query("select * from manan_chats WHERE (sender_id = ".$_COOKIE['profile_data']." and reciver_id = ".$_COOKIE['message_to'].") OR (sender_id = ".$_COOKIE['message_to']." and reciver_id  = ".$_COOKIE['profile_data'].");");



while($people = $str2 -> fetch_assoc()){
        if ($people["chat"])

{ echo "<div style='background-color:#86ebe7;width:300px;margin:10px;'id = 'message'>".$people["sender_id"];
        echo "<br>" .$people["chat"]."<br>"."</div>";

        // echo $people["sender_id"];
      //  echo "<br>" .$people["chat"]."<br>";
}
}  

?>

