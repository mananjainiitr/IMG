<?php
     $mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
     if (mysqli_connect_errno()){
         echo "failed to connect " . mysqli_connect_error();
         exit();
     }
     else{
         echo "fine<br />";
     }
     $mobileNo = 12345;
     $userid  = 12345;
     $username  = "manan";
     $useremail = "manan@gmail.com";

$mysqli -> query ("INSERT INTO manan_user ( mobileNo , userid , username , useremail) VALUES  (" . $mobileNo . "," . $userid .",\"" . $username . "\""."," . "\"" . $useremail . "\"" .");");
print_r("INSERT INTO manan_user ( mobileNo , userid , username , useremail) VALUES  (" . $mobileNo . "," . $userid .",\"" . $username . "\""."," . "\"" . $useremail . "\"" .");");
   
    
        
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($username)) $err_username = "Field is required";
        if(empty($pass)) $err_pass = "Field is required";
        if(empty($full)) $err_full = "Field is required";
    }

?>
<!DOCTYPE html>
<html>
<head> 
    <title>Sign Up Form</title>
</head>
<body>
    <h1>Sign Up Form</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" size="30" /><span><?php echo $err_username ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" size="30" /><span><?php echo $err_username ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" size="30" /><span><?php echo $err_username ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" size="30" /><span><?php echo $err_username ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="text" name="pass" size="30" /><span><?php echo $err_pass ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    Full Name
                </td>
                <td>
                    <input type="text" name="full" size="30" /><span><?php echo $err_full ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>

