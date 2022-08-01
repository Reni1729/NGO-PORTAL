<?php
    include 'config.php';
    if (isset($_POST['submit'])) {

        $name=$_POST['name'];
        $exp=$_POST['experience'];
        $comm=$_POST['comments'];
        $sql="INSERT INTO `vol` (`name`,`experience`,`comments`) VALUES ('$name','$exp','$comm')";
        $result = $conn->query($sql);
        if($result == TRUE){
            header('location:home.php');
        }
        else{
            echo'<script>alert("nope")</script>';
        }
        $conn->close();
    }
?>
<html>
<head>
    <style>
            body {
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                
            }
        * {
            margin: 0%;
            text-decoration: none;
            overflow-x : hidden;
            
        }
        html{
            
        }
        .header {
            height: 18%;

        }
        h1 {
            top:10px;
            justify-content: space-around;
            position: fixed;
        }
        ul {
                height:18%;
                width:100%;
                top:0;left:0;
                list-style: none;
                position:fixed;
                display:flex;
                justify-content: space-around;
                background-color:#C68B59;
            }
        ul li{
                display:inline-table;
                text-align: center;
                padding-right: 40px;
                padding-top: 5%;
            }
        ul li a{
            border-radius: 3px;
            color:black;
            font-size:18px;
            padding:4px 30px;
        }
        ul li a:hover{
            background-color: #E8D0B3;
            border-radius: 8px;
        }
        .content{
            display:flex;
            width:600%;
        }
        section{
            height:80vh;
            width:80vw;
            display:flex;
            align-items: center;
            justify-content:center;
            padding: 0px 5%;
            background-color: #E8D0B3;
            overflow-x : hidden;
        }
        .yog{
            background-color: #C68B59;
            padding:30px;
            border-radius:9px;
            line-height: 20px;
        }
        .btn{
            text-align: center;
            width: 400px;
            height:30px;
            font-weight: bold;
        }
        .vlntr input{
            width:200px;
            height:30px;
            border-radius:10px;
            border:none;
            
        }
        .volunteer{
            background-color: #7EB5A6;
            text-align: center;
            justify-content: center;
            width:150px;
            font-weight: bold;
            position: relative;
            left:127px;
            cursor: pointer;
            height: 40px;
            border:none;
            border-radius: 20px;
        }
        ::placeholder{
            text-align:center;
        }
        ::type{
            margin-left:5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <br>
        <ul>
            <h1 style="padding-right:8%;">VOLUNTEER</h1>
            <li><a href="#section1">India shares</a></li>
            <li><a href="#section2">Shiksha na rule</a></li>
            <li><a href="#section3">She can fly</a></li>
            <li><a href="#section4">Health cannot wait</a></li>
            <li><a href="#section5">Place half-full</a></li>
            <li><a href="#section6">Volunteer</a></li>
        </ul>
    </div>
    <div class="content">
        <section id=section1>
            <div class="yog">
                    The world today is facing an unprecedented challenge in the form of COVID 19. Economies have fallen, mighty
                    nations have
                    surrendered and life as man knows it, has been reduced to the confines of their homes. And while the world
                    is battling
                    the virus, here in our country we have another war also to win. Thousands of migrant workers and daily
                    wagers have been
                    left jobless in the wake of the current state of lockdown which has affected children and women the most.
                    And while most
                    of us are worrying about our kids’ education, our job, our future, our businesses and its prospects and how
                    to handle
                    time at home in isolation or simply getting bored at home. The less privileged ones have only one worry.



                    Where will their next meal come from?
                    Will their kids sleep on an empty stomach again?
                    Will their family survive another day of starvation?



                    And if hunger doesn’t get them, disease surely will. They stay in makeshift homes that open into each other.
                    Social
                    Distancing is an alien concept and almost impossible to follow, even if they tried. Their living conditions
                    are
                    deplorable as the most basic hygiene and sanitation facilities haven’t reached them yet.

                    --> India it is time now to do what you do best. It is time to SHARE!


                    It is time to spread the love, extend support and help & put the needs of others before our luxuries.
                    It is time to do our best and make sure no one sleeps hungry in the times of COVID 19.

                    --> DONATE A HUNGER SURVIVAL KIT
            </div>
        </section>
        <section id=section2>
            <div class="yog">
            <p>
                    One of the most affected victims of the pandemic are children who now have no access to schools. While a lot
                    of children
                    have the means for online classes, underprivileged children are still deprived of learning as they have no
                    access to
                    computers or smart phones. These children already have had difficult journeys, having fought the shackles of
                    poverty,
                    child labour, and much more to finally reach school. But the pandemic has reversed their years of struggle.

                    For lakhs of such children, education has come to a halt. They can't afford smart phones, can't count on
                    support of
                    parents for home learning. Shiksha Na Ruke is a Smile Foundation initiative that is providing
                    underprivileged children
                    access to continuous learning. Despite everything, they have not given up on education, they continue to
                    dream. Join
                    hands with us to help these little dreamers continue their education.

                    SUPPORT THE CAUSE
            </p></div>
        </section>
        <section id=section3>
            <p class="yog">
                    A mother, a sister, a daughter, a home-maker, a teacher, a doctor, a leader; women hold our worlds together
                    in a million
                    ways.A girl child comes into this world with just as many expectations, dreams and aspiration as a boy, but
                    soon finds
                    out that her way towards achieving them is much more challenging. The mere absence of an education and the
                    many
                    different set of rules that a girl has to follow according to the norms of the society makes her suffer
                    mentally,
                    emotionally and physically from a very young age.

                    Darpan's initiative ‘She Can Fly’ is an effort to enable, equip and empower girl children with quality
                    education, proper
                    nutrition, good health, adequate skills, and above all a lot of self-confidence to help them live their
                    lives to their
                    fullest potential.

                    This is also a step towards sensitizing the civil society at large and helping create a girl child/women
                    friendly
                    society to help her thrive.

                    Let us all come forward and join hands to give wings to her dreams. Empower, educate, and make her strong to
                    stand her
                    own ground and shine in her efforts. She Can Fly, let’s give her the sky!
            </p>
        </section>
        <section id=section4>
            <p class="yog">
                    The second wave of the Covid-19 pandemic has shaken up the entire country and seems to be even more
                    devastating than the first. Fighting the new, more infectious variant of the virus, frontline health workers
                    are working round the clock even as hospitals run out of beds and oxygen supply, and thousands succumb to
                    preventable deaths.

                    As the situation worsens with every passing day, the need of the hour is to provide urgent necessities like
                    PPE kits to health workers, strengthening the existing public health infrastructure through supply of oxygen
                    and medicines, reducing the load of primary healthcare facilities, providing hygiene kits to masses, and
                    spreading awareness to contain the spread of the virus.

                    For those suffering at the hands of the pandemic, for those who are struggling to see their loved ones
                    survive, for those working tirelessly to help save lives – health cannot wait! They need your support NOW.
            </p>
        </section>
        <section id=section5>
            <div class="yog">
                    A full plate of food filled with the goodness of nutrients is nourishing, gives one strength; both bodily
                    and mental, keeps one active and free from diseases. One of the most important aspect for any kind of
                    development is taking care of children, enabling them to grow up healthy. But the prevailing situation in
                    India speaks otherwise, we have constantly failed to provide the most basic care to our children, providing
                    healthy meals to them which results in stunted growth, malnourishment etc.

                    If we look closely we can find two kinds of hunger among children; one that arises out of poverty. In a
                    situation such as this children don’ get to eat at all; often they can found lurking behind garbage bins
                    hunting for food or begging in the streets to feed themselves. In this case children do not or cannot afford
                    an education. They are either engaged in some sort of labor or simply loiter in the hunt for food. The other
                    kind of hunger arises not out of the lack of food but out of the lack of proper nourishment, which can also
                    be called hidden hunger. Hundreds of school going children suffer from hidden hunger. Parents provide
                    whatever meal they can with the meager amounts they earn but it doesn’t fulfill the need of proper
                    nourishment.

                    That backdrop set our preliminaries for Plate Half Full. This initiative is to enhance education with
                    adequate nutrition. While it is necessary to have underprivileged children attend school, it is also just as
                    important to have them eat regular meals in a day.
            </div>
        </section>
        <section id="section6">
            <div class="yog">
            <p class="btn">TO JOIN AS VOLUNTEER</p><br>
            <form action="" method="post">
            <div class="vlntr">
                <p>Name</p>
                <input type="text" class="vol" name="name" placeholder="Enter your name" required style="float:right;"><br>
                <p>Experience</p>
                <input type="text" class="vol" name="experience" placeholder="Share your experience here" required style="float:right;"><br>
                <p>why do you want to join as Volunteer?</p>
                <input type="text" class="vol" name="comments" placeholder="" required style="float:right;"><br><br>
                <input type="submit" name="submit" value="Join" class="btn" style="margin-left:100px;">
            </div>
            </form>
            </div>
        </section>
    </div>
</body>
</html>