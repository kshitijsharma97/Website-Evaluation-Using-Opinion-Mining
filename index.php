<?php

session_start();
if(isset($_SESSION['user_id'])){
    echo "<SCRIPT type='text/javascript'>
    window.location.replace('./user/index.php');
    </SCRIPT>";
 }
 if(isset($_SESSION['member_id'])){
	echo "<SCRIPT type='text/javascript'>
	window.location.replace('./admin/index.php');
	</SCRIPT>";
 }




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>


    <style>
        .parallax-window {
            margin-top: -10px;
            min-height: 600px;

            background: transparent;
        }

        .infos {
            z-index: 10;
            position: relative;
            text-align: center;
            padding-top: 300px;



        }

        .infos>h1 {
            z-index: 10;
            color: white;
            background: rgba(54, 25, 25, .6);
            border: 3px solid whitesmoke;


            display: inline;
            padding: 10px;
            font-size: 50px;


        }

        .sec {
            padding: 15px;
            z-index: 5;
            font-family: sans-serif;
            font-size: 3em;
            border: 2px solid black;
            text-align: center;
            font-variant-caps: all-petite-caps;
        }

        .secdark {
            padding: 15px;
            color: white;
            background-color: rgb(42, 48, 48);
            font-family: sans-serif;

            font-size: 3em;
            border: 2px solid white;
            text-align: center;
            font-variant-caps: all-petite-caps;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Website Evaluator</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="userlogin.php">User Login</a>
                    </li>
                    <li>
                        <a href="register.html">Register</a>
                    </li>
                    <li>
                        <a href="contactus.html">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="">

        <!-- from here -->
        <div class="parallax-window" data-parallax="scroll" data-z-index='0' data-image-src="img/bg000.jpg" data-bleed="10">
            <div class="infos">
                <h1>WELCOME TO WEBSITE EVALUATION</h1>
            </div>
        </div>
        <section class='sec'>our website reviews comments and rate them accordingly, also it does prioratizaton using SEO</section>
    </div>


</body>

</html>