<?php session_start();
$totalamt = $_SESSION['totalamt'];
?>
<html>
    <head>
        <style>
            * {
                margin:0%;
                padding:0%;
                box-sizing: border-box;
                font-family: sans-serif;
            }
            body{
                margin:0px;
                background:#3DB2FF;
                background-size: cover;
                padding-left:32%;
                padding-top:3%;
                
            }
            .donate {
                width:68vh;
                padding:35px;
                background-color: azure;
                border-radius: 5%;
                position:relative;
            }
            .donate h2{
                text-align: center;
                letter-spacing: 2px;
                margin-bottom:40px;
                color:#2D46B9;
            }
            .label{
                display: block;
                margin-bottom: 10px;
                margin-top: 4px;
            }
            .input{
                padding:12px;
                width:90%;
                text-align: center;
                letter-spacing: 2px;
            }
            .button{
                margin: 0%;
                padding:10px 10%;
                text-align: center;
                margin-left: 33%;
                background-color: aquamarine;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 15px;
            }
            .expiry{
                width: 100px;
                height:30px;
            }
        </style>
        <script>
            function pay(){
                
                var p=document.getElementById("amount").value;
                alert("₹"+p+" Rupees has been donted Succesfully.Thanks for the Donations");
                window.location.href="homiee.html";
                return false;
            }
        </script>
    </head>
    <body>
        <div class="donate">
            <div class="title">
                <h2>Payment Gateway</h2>
            </div>
            <form method="POST" action="#">
            <div class="content">
            <p>
                <label for="amount" class="label">Amount :</label>
                <input type="text" autocomplete="off" id="amount" class="input" placeholder="Enter Amount" maxlength="6" required value="<?php echo $totalamt ?>">
                
            </p>
            <p>
                <label for="hname" class="label">Card Holder :</label>
                <input type="text" autocomplete="off" name="hname" class="input" placeholder="Enter name" required>
            </p>
            <p>
                <label for="cnum" class="label">Card Number :</label>
                <input type="text" autocomplete="off" name="cnum" class="input" placeholder="Enter Card Number" maxlength="12" required>
            </p>
            <p> 
                <label for="xx" class="label">Enter Pin :</label>
                <input type="Password" name="pin" class="input" placeholder="xxxx" maxlength="4" required>
            </p>
            <p><div class="select">
                <table style="width: 100%;">
                <tr>
                <td><label for="exp" class="label">Expiry Month :</label></td>
                <td><label for="exp" class="label">Expiry Year :</label></td>
                </tr>
                <tr>
                <td><select class="expiry">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    </select>
                </td>
                <td><select class="expiry">
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                    <option>2029</option>
                    <option>2030</option>
                </select></td>
                </tr>
            </table>
            </div>
            </p>
            <p>
                <label for="cv" class="label">CVV :</label>
                <input type="password"  name="cv" class="input" placeholder="***" pattern="[0-9]{3}" maxlength="3" required>
            </p>
            <br>
            <p>
                <input type="submit" name="submit" class="button" value="Pay" onclick="pay()">
            </p>
            </form>
        </div>
    </body>
</html>