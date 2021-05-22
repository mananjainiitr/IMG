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
     $pass = $_POST["password"];
     $repass = $_POST["repass"];
     $city  = $_POST["city"];
     $phone = $_POST["number"];
  

/*        if($_SERVER["REQUEST_METHOD"] == "POST") {
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
     }}*/
?>
       

<!DOCTYPE html>
<html>
    <head>
        <style>
             input{
                 width :40vw;
                 height :40px;
                 
             }
             body{
                 background-color: #cccccc;
             }
            #box{
                  background-color: white;
                  width:40vw;
                 padding : 50px;
                 margin-left : 25vw;
                 
                  }
        </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>     
   <script>
$(document).ready(function(){
$("#sign").click(function(e){
var name = document.getElementById("name").value;
var number = document.getElementById("number").value;
var age = document.getElementById("age").value;
var gender = document.getElementById("gender").value;
var email = document.getElementById("email").value;
var pass = document.getElementById("password").value;
var city = document.getElementById("city").value;

if (nameinput()!=false && name != "" && number != "" && age != "" && gender != "" && email != "" && city!= "" && pass!= "")
{
$.ajax({
    url : "ajax.php",
    type: 'post',
   data:{ name : name,number:number,age:age,gender:gender,email:email,pass:pass,city:city},
   success: function(response){$('#signerr').html(response); console.log(response);}});
console.log(name+number+age+gender+email+pass+city);}
e.preventDefault();
})});

</script>
        <script>

           function nameinput()
           {
            var name = document.getElementById("name").value;
            var regname = /^[A-za-z '.]{3,}$/;
            if(regname.test(name))
                {
                    document.getElementById("usererror").innerHTML = " ";
                }
                else{
                    document.getElementById("usererror").innerHTML = "* wrong credentials";
                    return false;
                }

           }
           function numberinput()
           {
            var number = document.getElementById("number").value;
            var regnumber = /^(\+91 |91|0|\+91|91 |\+91-)?[6-9]{1}[0-9]{9}$/;
            if(regnumber.test(number))
                {
                    document.getElementById("numbererror").innerHTML = " ";
                }
                else{
                    document.getElementById("numbererror").innerHTML = "* wrong credentials";
                    return false;
                }

           }
           function ageinput()
           {
            var age = document.getElementById("age").value;
            var regage = /^[0-9]{1,3}$/;
            if(regage.test(age))
                {
                    document.getElementById("ageerror").innerHTML = " ";
                }
                else{
                    document.getElementById("ageerror").innerHTML = "* wrong credentials";
                    return false;
                }

           }
           function genderinput()
           {
            var gender = document.getElementById("gender").value;
            var reggender = /^(male)|(female)$/; 
            if(reggender.test(gender))
                {
                    document.getElementById("gendererror").innerHTML = " ";
                }
                else{
                    document.getElementById("gendererror").innerHTML = "* wrong credentials";
                    return false;
                }
           }
           function cityinput()
           {
            var city = document.getElementById("city").value;
            var regcity = /^[a-zA-Z.']+(?:[\s-][\/a-zA-Z.]+)*$/;
            if(regcity.test(city)&&city.length > 2)
                {
                    document.getElementById("cityerror").innerHTML = " ";
                }
                else{
                    document.getElementById("cityerror").innerHTML = "* wrong credentials";
                    return false;
                }

           }
           function emailinput()
           {
            var email = document.getElementById("email").value;
            var regemail = /^[A-Za-z0-9_.]{3,}@[A-Za-z]{1,}.[A-Za-z.]{3,}$/;
            if(regemail.test(email))
                {
                    document.getElementById("emailerror").innerHTML = " ";
                }
                else{
                    document.getElementById("emailerror").innerHTML = "* wrong credentials";
                    return false;
                }

           }
           function passinput()
           {
            var regpass = /^(?=.*[!@#$%^&*])(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
            var password = document.getElementById("password").value;
            if(regpass.test(password))
                {
                    document.getElementById("passworderror").innerHTML = " ";
                }
                else{
                    document.getElementById("passworderror").innerHTML = "* wrong credentials";
                    return false;
                }
           }
             function repassinput()
             {
                var password = document.getElementById("password").value;
                var repass = document.getElementById("repass").value;


                if(password==repass)
                {
                    document.getElementById("repassworderror").innerHTML = " ";
                }
                else{
                    document.getElementById("repassworderror").innerHTML = "* doesnot match";
                    return false;
                }
             }


            function myfunction()
            {
                var val= document.getElementById("degree").value;
                var name = document.getElementById("name").value;
                var number = document.getElementById("number").value;
                var age = document.getElementById("age").value;
                var gender = document.getElementById("gender").value;
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
                var repass = document.getElementById("repass").value;
                var city = document.getElementById("city").value;
                var regname = /^[A-za-z '.]{3,}$/;
                var regnumber = /^(\+91 |91|0|\+91|91 |\+91-)?[6-9]{1}[0-9]{9}$/;
                var regpass = /^(?=.*[!@#$%^&*])(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
                var regemail = /^[A-Za-z0-9_.]{3,}@[A-Za-z]{1,}.[A-Za-z.]{3,}$/;
                var regage = /^[0-9]{1,3}$/;
                var reggender = /^(male)|(female)$/;  
                var regcity = /^[a-zA-Z.']+(?:[\s-][\/a-zA-Z.]+)*$/;
                
                if(regname.test(name))
                {
                    document.getElementById("usererror").innerHTML = " ";
                }
                else{
                    document.getElementById("usererror").innerHTML = "* wrong credentials";
                    return false;
                }
                if(regnumber.test(number))
                {
                    document.getElementById("numbererror").innerHTML = " ";
                }
                else{
                    document.getElementById("numbererror").innerHTML = "* wrong credentials";
                    return false;
                }
                if(regage.test(age))
                {
                    document.getElementById("ageerror").innerHTML = " ";
                }
                else{
                    document.getElementById("ageerror").innerHTML = "* wrong credentials";
                    return false;
                }
                if(reggender.test(gender))
                {
                    document.getElementById("gendererror").innerHTML = " ";
                }
                else{
                    document.getElementById("gendererror").innerHTML = "* wrong credentials";
                    return false;
                }
                if(regcity.test(city)&&city.length > 2)
                {
                    document.getElementById("cityerror").innerHTML = " ";
                }
                else{
                    document.getElementById("cityerror").innerHTML = "* wrong credentials";
                    return false;
                }
                if(regemail.test(email))
                {
                    document.getElementById("emailerror").innerHTML = " ";
                }
                else{
                    document.getElementById("emailerror").innerHTML = "* wrong credentials";
                    return false;
                }
                if(regpass.test(password))
                {
                    document.getElementById("passworderror").innerHTML = " ";
                }
                else{
                    document.getElementById("passworderror").innerHTML = "* wrong credentials";
                    return false;
                }
                if(password==repass)
                {
                    document.getElementById("repassworderror").innerHTML = " ";
                }
                else{
                    document.getElementById("repassworderror").innerHTML = "* doesnot match";
                    return false;
                }
             

            }

        </script>
    </head>
    <body><div id = "box" >
        <h1 id = "signerr">SIGN UP FORM</h1>
        <form id="frm" method = "post" onsubmit="return myfunction()">
            <label>Name</label><span style = "color:red;"id = usererror></span><br>
            <input oninput ="return nameinput()" id = "name" name = "name"type="text" placeholder="Please enter your name..."><br>

            <label>Number</label><span style = "color:red;" id = numbererror></span><br>
            <input oninput ="return numberinput()"id = "number" name = "number"type="text" placeholder="Please enter your number..."><br>

            <label>Age</label><span style = "color:red;"id = ageerror></span><br>
            <input oninput ="return ageinput()"id = "age" name = "age"type="text" placeholder="Please enter your age..."><br>

            <label>Gender(male or female)</label><span style = "color:red;"id = gendererror></span><br>
            <input oninput ="return genderinput()"id = "gender" name = "gender"type="text" placeholder="Please enter your gender..."><br>
             
            <label>city</label><span style = "color:red;"id = cityerror></span><br>
            <input oninput ="return cityinput()"id = "city" name = "city"type="text" placeholder="Please enter your city..."><br>


            <label>Email</label><span style = "color:red;"id = emailerror></span><br>
            <input oninput ="return emailinput()"id = "email" name = "email"type="text" placeholder="Please enter your email..."><br>

            <label>Password(must contain atleast a special character & a letter & a number & minumum of 8 digit and max 16)</label><span style = "color:red;"id = passworderror></span><br>
            <input oninput ="return passinput()"id = "password" name = "password"type="password" placeholder="Please enter your password..."><br>
   
            <label>Re-enter password</label><span style = "color:red;"id = repassworderror></span><br>
            <input oninput ="return repassinput()"id = "repass" name = "repass"type="password" placeholder="Please Re-enter your password..."><br>
            
            <input id="sign"  style = "margin-left:15vw;margin-top:10px; width:100px ; background-color: #3B5998 ; color:black"type="submit" class = "btn">
            </form>
            <a style ="margin-left:15vw;"href = "login.php">login page</a>
            </div>
    </body>
</html>
