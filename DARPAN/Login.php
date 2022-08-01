<?php

include'config.php';
error_reporting(0);
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM people WHERE email='$email' and password='$password'";
        $run=mysqli_query($conn, $sql);
        if ($run) {
            $num=mysqli_num_rows($run);
            if ($num>0) {
                header('location:home.php');
            }
             else {
                ?>
                <script type="text/javascript">
                  alert("Account doesn't exist!");
                </script>
                <?php
            }
        }
}

?>
<html>
    <head>
        <title>
            NGO PORTAL
        </title>
        <style>
            body{
                    margin:0px;
                    padding:0px;
                    background: url("http://www.dreamtemplate.com/dreamcodes/bg_images/color/c10.jpg");
                    background-size: cover;
                    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                }
            .login {
                height: 450px;
                width: 320px;
                background: #000;
                color:aliceblue;
                top:50%;
                left:50%;
                background: rgba(0,0,0,0.5);
                position: absolute;
                transform:translate(-50%,-50%);
                box-sizing: border-box;
                align-items: center;
                padding:10px 40px;
            }
            .image {
                width: 30%;
                border-radius: 50%;
                position: absolute;
                top:-50px;
                left:35%;

            }
            input{
                width:100%;
                height:35px;
                border-radius:7px;
            }
            .form {
                left:15%;
            }
            .button {
                padding: 5px 20px;
            } 
            input:focus{
                 outline: none;
                 box-shadow: 0px 0px 5px #61C5FA;
                 border-color: black;
            }
            input:hover {   
                border: 1px solid #999;
                 border-radius: 5px;
            }
            .register a{
                text-decoration:none;
                color:red;
            }  
            :: placeholder{
                text-align:center;
                color:red;
            } 
        </style>
    </head>
    <body class="bdy">
        <div class="login">
            <img src="https://www.travelanddestinations.com/wp-content/uploads/2019/05/Blank-Profile.jpg" class="image"><br><br>
            <center><h2>LOGIN</h2></center>
            <form action="" method="post" class="form">
                <p>EMAIL</p>
                <INPUT type="email" class="name" name="email" placeholder="Enter Your mail ID" value="<?php echo $email; ?>" autocomplete="off" required>
                <p>PASSWORD</p>
                <input type="password" class="name" name="password" minlength="8" maxlength="12" placeholder="Enter Password" value="<?php echo $_POST['password']; ?>" required><br>
                <center><br><br><input type="submit" value="Login"class="button" ></center><br>
                <p class="register">Not a member? <a href="registration.php">Join us</a></p>
            </form>
        </div>
    </body>
</html>