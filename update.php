<?php 
$mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
if (mysqli_connect_errno()){
echo "failed to connect " . mysqli_connect_error();
}
else{
    echo "fine<br />";
}
    $f = 0 ;
  /*  $s1 = $mysqli->query("SELECT DISTINCT  img_loc FROM manan_profiledata WHERE (phonenumber  =". $_COOKIE["profile_data"].");");
     while($row = $s1 -> fetch_assoc()){
         if ($row["img_loc"])
{
$location = $row["img_loc"];
}
{     echo "already regestered";
     header("Location: http://ec2-3-128-28-166.us-east-2.compute.amazonaws.com/manan/chat.php"); 

}
}*/

//echo "<img style ='width:200px;height:200px;border-radius:50%;' src = upload/default.jpeg>";
     if(isset($_POST['btn'])){
     $image_ex = explode('.',$_FILES['image']['name']);
    $image_ex_lower = strtolower(end($image_ex));
$fileext = array('png','jpg','jpeg');
     if ($_FILES['image']['size']< 500000 && in_array($image_ex_lower,$fileext))

{   


     echo $_FILES['image']['size'];
         $bio = $_POST['bio'];
         
//       echo "<pre>", print_r($_FILES), "</pre>";
      $profileImageName = time() . '.' ."jpeg";
      $target = 'upload/'.time()."jpeg"; 
 //     move_uploaded_file($_FILES['image']['tmp_name'], $target);
//echo "<img style ='width:200px;height:200px;border-radius:50%;' src = ".$target.">";
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
{  // $mysqli -> query ("INSERT INTO manan_profiledata (phonenumber,img_loc,bio) VALUES  (".$_COOKIE["profile_data"] . ",\"" . $target . "\""."," . "\"" . $bio . "\"".");");
   $mysqli -> query("UPDATE manan_profiledata SET img_loc =".$target." ,bio = ".$bio." WHERE phonenumber = ".$_COOKIE["profile_data"].";");
$f = 1;
 header("Location: http://ec2-3-128-28-166.us-east-2.compute.amazonaws.com/manan/chat.php"); 
   // echo "confirm";
  // if(isset($_COOKIE["profile_data"])) 
  // echo "INSERT INTO manan_profiledata (phonenumber,img_loc,bio) VALUES  ("."9827580142".",\"". $target."\""."," . "\"" . $bio . "\"".");";
//  echo $_COOKIE["profile_data"];
}

    //  echo $target;
     // echo $_FILES['image']['tmp_name'];
  }
else{echo "large file or wrong extention please try again";}
   }


?>

<!DOCTYPE html>
<html>
    <head>
<style>
#bio
{
width:30vw;
overflow-wrap: break-word;
}
#prof{
width :40vw;
padding : 5vw;
margin-left :25vw;
background-color : white; 

}
body{
background-color:#cccccc;
}
</style>

    </head><div id = "prof">
    <body><h1>Please upload Your Profile!</h2>
        <?php // if ($f>0) {echo "<img style ='width:200px;height:200px;border-radius:50%;' src = ".$target.">";}else{echo "<img style ='width:200px;height:200px;border-radius:50%;' src = upload/default.jpeg>";?>
        <?php if ($_FILES['image']['name']){ echo "<img style ='width:200px;height:200px;border-radius:50%;' src =".$target.">";}
              else{  echo "<img style ='width:200px;height:200px;border-radius:50%;' src = upload/default.jpeg>";}
         ?>

            <form method = "POST" action = "profile.php" enctype="multipart/form-data">
            <input type = "file" name="image" required><br>
           <label>BIO.</label> <input id = "bio" type = "bio" name="bio" required><br>
            <button  type = "submit" name = "btn">Update Profile</button>
   </div> </body>
</html>


