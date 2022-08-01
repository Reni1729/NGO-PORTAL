<?php
include 'config.php';
if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $email=$_POST['email'];
    $number=$_POST['phone'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
   if($password==$cpassword)
   {
     $sql="INSERT INTO `registration` (name,password,email,phone,gender,address) VALUES ('$name','$password','$email','$number','$gender','$address')";
     $run=mysqli_query($conn, $sql);
     if ($run) {
         header('location:index.php');
     }
   }
   else{
       echo "passwords doesn't match";
   }
}
 ?>

<html>
<head>
    <title>
        NGO PORTAL
    </title>
    <!-- <link rel="stylesheet" type="text/css" href="regs.css"> -->
    <style>
        body {

margin: 0px;
padding: 0px;
background: url("http://www.dreamtemplate.com/dreamcodes/bg_images/color/c10.jpg");
background-size: cover;
font-family: sans-serif;
color: rgb(235, 235, 226);
}

.login {
height: 540px;
width: 500px;
background: rgba(0,0,0,0.5);
color: aliceblue;
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%, -50%);
box-sizing: border-box;
align-items: center;
padding: 10px 40px;
border-radius:20px;
}

.form {
left: 15%;
}

.button {
background-color: black;
color: white;
padding: 10px 20px;
font-size: 20px;
margin: 4px 2px;
border-radius: 20px;
}
a{
    text-decoration:none;
    color:red;
}
    </style>
</head>
<body>
    <div class="login">
        <h1 align="center"><u>REGISTRATION FORM</u></h1>
        <form name="" action="" method="post" style="padding-top: 1%;">
            <center>
                <table style="border-spacing:15px;">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="" placeholder="Enter your name" autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" id="password" value="" minlength="8" maxlength="15" name="password" autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <td>Confirm-Password</td>
                        <td><input type="password" id="cpassword" value="" minlength="8" maxlength="15" name="cpassword" autocomplete="off" required>
                        </td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="email" name="email" value="" placeholder="Enter your E-mail" autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <td>Contact Number:</td>
                        <td><input type="tel" id="phone" name="phone" placeholder="Enter contact number" autocomplete="off" value=""
                                pattern="[0-9]{10}" required></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="Male">
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" value="Female">Female
                        </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="address" value="" placeholder="Residential address" required></td>
                    </tr>
                </table><br>
                    <button class="button" type="submit" name="submit">REGISTER</button><br><br>
            </center>
            Have an account? <a href="index.php">Login here</a>
        </form>
    </div>
</body>
</html>