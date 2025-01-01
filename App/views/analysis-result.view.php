<?php

use Framework\Session;

$stage_one_result = Session::get('stage_one_score');
$stage_two_result = Session::get('stage_two_score');
$stage_three_result = Session::get('stage_three_score');
$analysis_result = Session::get('analysis_result');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="./assets/images/favicon-32x32.png" />

    <title>Analysis Result</title>
    <link rel="stylesheet" href="styles.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap"
        rel="stylesheet" />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <style>
        .attribution {
            font-size: 11px;
            text-align: center;
            padding-top: 20px;
        }

        .attribution a {
            color: hsl(228, 45%, 44%);
        }

        #left {
            height: 500px;
            width: 400px;
            border-radius: 20px;
            margin-left: 300px;
            margin-top: 70px;
            position: absolute;
            z-index: 1;
            background: linear-gradient(to bottom, rgb(96, 175, 253), #0381ff);
            /* background: #0381ff; */
        }

        #circle {
            margin-top: 35px;
            padding-top: 55px;
            text-align: center;
            margin-left: 100px;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: radial-gradient(circle,
                    hsla(256, 72%, 46%, 1),
                    hsla(241, 72%, 46%, 0));
            color: hsla(222, 100%, 96%, 0.749);
        }

        #left h5 {
            color: hsla(222, 100%, 96%, 0.749);
            padding-top: 65px;
            padding-right: 10px;
            text-align: center;
            font-size: 1.9rem;
        }

        body {
            font-family: "Hanken Grotesk", sans-serif;
        }

        #circle h1 {
            color: white;
            font-size: 3.2rem;
        }

        #circle p {
            padding-top: 0px;
            font-size: 1rem;
        }

        p {
            text-align: center;
            color: hsla(222, 100%, 96%, 0.749);
            font-size: 0.75rem;
            padding-top: 10px;
        }

        #left .para {
            padding-top: 0px;
        }

        #left h2 {
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 700;
            padding-right: 8px;
            padding-top: 50px;
        }



        #right {
            background-color: white;
            height: 500px;
            width: 400px;
            border-radius: 0px 20px 20px 0px;
            margin-right: 40px;
            position: relative;
            z-index: 0;
            box-shadow: 2px 2px 4px rgba(76, 42, 139, 0.2);
            margin-left: 690px;
            margin-top: 70px;
        }

        #right .reac {
            color: hsl(0, 100%, 67%);
            background-color: hsl(0, 100%, 67%, 0.1);
            margin-left: 60px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            padding-top: 10px;
            font-weight: 500;
            text-align: left;
            padding-left: 20px;
            margin-top: 25px;
            font-size: 1rem;
        }

        #right .mem {
            color: hsl(39, 100%, 56%);
            background-color: hsl(39, 100%, 56%, 0.1);
            margin-left: 60px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            padding-top: 10px;
            font-weight: 500;
            text-align: left;
            padding-left: 20px;
            margin-top: 25px;
            font-size: 1rem;
        }

        #right .ver {
            color: hsl(166, 100%, 37%);
            background-color: hsl(166, 100%, 37%, 0.1);
            margin-left: 60px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            padding-top: 10px;
            font-weight: 500;
            text-align: left;
            padding-left: 20px;
            margin-top: 25px;
            font-size: 1rem;
        }

        #right button {
            margin-left: 60px;
            background-color: #0381ff;
            width: 300px;
            height: 35px;
            border-radius: 20px;
            border: none;
            color: white;
            margin-top: 15px;
            font-size: smaller;
        }

        #right h3 {
            font-size: 1.8rem;
            font-weight: 600;
            padding-top: 65px;
            padding-left: 80px;
        }

        #right p span {
            padding-left: 50px;
            color: hsl(224, 30%, 27%, 0.5);
            font-weight: 500;
        }

        #right .a {
            padding-left: 60px;
        }

        #right .b {
            padding-left: 65px;
        }

        b {
            color: black;
        }

        img {
            padding-right: 5px;
        }

        .row {
            display: flex;
        }

        @media (max-width: 375px) {
            .row {
                flex-wrap: wrap;
            }

            #left,
            #right {
                position: absolute;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" id="left">
                    <h5>Analysis Result</h5>

                    <div id="circle">
                        <h1><?= floor($analysis_result) ?></h1>
                        <p>of 100</p>
                    </div>
                    <h2 class="great"></h2>
                </div>
                <div class="col-lg-6" id="right">
                    <h3>Details</h3>
                    <p class="reac">
                        Stage 1
                        <span><b><?= $stage_one_result ?></b> / 100</span>
                    </p>
                    <p class="mem">
                        Stage 2
                        <span><b> <?= $stage_two_result ?></b> / 100</span>
                    </p>
                    <p class="ver">
                        Stage 3
                        <span><b> <?= $stage_three_result ?></b> / 100</span>
                    </p>
                    <button>Continue</button>
                </div>
            </div>
        </div>

    </main>
</body>

</html>