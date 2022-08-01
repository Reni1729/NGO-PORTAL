<html>

<head>
    <title> Report Page </title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        * {
            padding: 0px;
            margin: 0px;
            text-decoration: none;
            list-style: none;
        }

        .menu {
            height: 15%;
            background-color: #C36839;
            align-items: center;
        }

        label.logo {
            font-size: 30px;
            color: #7EB5A6;
            line-height: 80px;
            float: left;
            padding-left: 100px;
        }

        .arpan {
            float: left;
            padding-left: 70px;
            padding-top: 14px;
        }

        nav ul {
            float: right;
            margin-right: 10%;
            margin-top:18px;
        }

        nav ul li {
            display: inline-block;
            margin-right: 25px;
        }

        nav ul li a {
            color:black;
            display: block;
            padding:1px 15px;
            line-height: 30px;
            font-size: 18px;
            margin-top:18px;
            border-radius: 10px;
            transition: .3s;
        }

        nav ul li a:hover,
        nav ul li a.active {
            background-color: #E8D0B3;
        }

        nav ul ul {
            position: absolute;
            top: 85px;
            border: 3px solid #23dbdb;
            opacity: 0;
            width:10.5%;
            background-color: #E8D0B3;
            visibility: hidden;
        }

        nav ul li:hover>ul {
            top: 70px;
            opacity: 1;
            visibility: visible;
            transition: .3s linear;
        }

        nav ul ul li {
            width: 160px;
            display: list-item;
            position: relative;
            border: 1px solid #042331;
        }
        nav ul ul li a {
            line-height: 50px;
        }
        nav ul ul li a i {
            margin-left: 45px;
        }

        .content {
            background-color: #E8D0B3;
            height: 140%;
            display: flex;
            width: auto;
            justify-content: left;
            text-align: left;
            margin-left:0;
            padding: 60px 80px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 30px;
            padding-right: 100px;
        }

        table {
            border-spacing: 30px;
            margin: 70px 0 0 5px;
        }

        tr:nth-child(even) {
            background-color: rgba(150, 212, 212, 0.4);
        }
    </style>
</head>

<body>
    <div class="menu">
        <img src="https://khatuwalagroup.com/wp-content/uploads/2017/01/Mittal-Charitable-trust-logo-.png" class="arpan"
            width="90px">
        <label class="logo">
            <h2>DARPAN</h2>
        </label>
        <nav>
            <ul>
                <li class="active"><a href="#">Reports</a>
                </li>
                <li><a href="faq.php">FAQ's</a></li>
                <li><a href="#">Help</a>
                    <ul>
                        <li><a href="#">General</a></li>
                        <li><a href="#">Sign in Process</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h3> Participating Departments </h3><br>
        <center>
            <table style="width:50%">
                <tr>
                    <th>SI.NO</th>
                    <th>MINISTRY/DEPARTMENT</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Department of Agriculture, Cooperation and Farmers Welfare</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ministry of Ayurveda, Yoga and Naturopathy, Unani, Siddha and Homoeopathy (AYUSH)</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Department of Animal Husbandry, Dairying and Fisheries</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Department of Chemicals and Petro-Chemicals</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Department of Industrial Policy and Promotion</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ministry of Electronics and Information Technology</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Ministry of Environment, Forest and Climate Change</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Department of School Education and Literacy</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Department of Empowerment of Persons with Disabilities</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Ministry of Women and Child Development</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Ministry of Skill Development and Entrepreneurship</td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Ministry of Personnel, Public Grievances and Pensions</td>
                </tr>
            </table>
        </center>
    </div>
    </body>

</html>