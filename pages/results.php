<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['mysql_username'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleepSense</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');  

       
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            width: 100%;
            min-height: 100vh;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa 0%, #80deea 100%);
            scrollbar-width: none;
        }

        body::-webkit-scrollbar {
            display: none;
        }

       
        header {
            width: 100%;
            height: 72px;
            color: white;
            background-color: #101922;
            position: sticky;
            padding: 14px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        #main-nav {
            width: 100%;
            height: 90%;
            margin-left: 50%;
            display: flex;
            flex-direction: row;
            justify-content: end;
            gap: 24px;
            align-items: center;
        }

        #main-nav > a {
            width: 130px;
            height: 90%;
            padding: 5px;
            border-radius: 10px;
            text-decoration: none;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            color: #F5F5F5;
            background-color: transparent;
            cursor: pointer;
            transition: 0.6s;
            font-family: "Poppins", sans-serif;
            text-decoration: none;
            position: relative;
        }

        #main-nav > #button-1:hover,
        #main-nav > #button-2:hover,
        #main-nav > #button-4:hover {
            color: orange;
        }  

        #main-nav > #button-1::after,
        #main-nav > #button-2::after,
        #main-nav > #button-3::after,
        #main-nav > #button-4::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 1px;
            bottom: 0;
            left: 0;
            background-color: orange;
            transform-origin: bottom right;
            transition: transform 0.25s ease-in-out;
        }

        #main-nav > #button-1:hover::after,
        #main-nav > #button-2:hover::after,
        #main-nav > #button-4:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        #main-nav > #button-5 {
            color: #0D1B2A;
            background-color: #4FC3F7;
            font-weight: bold;
        }

        #main-nav > #button-5:hover {
            color: #ecf0f1;
            background-color: transparent;
            font-weight: bolder;
        }

        #logo {
            font-size: 1.5rem;
            font-family: "Poppins", sans-serif;
            color: #ecf0f1;
            font-weight: bolder;
            text-shadow: 2px 2px 2px #2c3e50;
            margin-left: 1%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }

        #mobile-nav {
            visibility: hidden;
        }

        /* Main Container */
        main {
            width: 100%;
            min-height: calc(100vh - 72px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Result Container */
        #result-div {
            width: 100%;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(8px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #result-div:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
        }

        #result-div h2 {
            font-size: 2rem;
            font-weight: 600;
            color: #1a237e;
            text-align: center;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #283593, #3f51b5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #result-div h3 {
            font-size: 1.2rem;
            font-weight: 400;
            color: #37474f;
            text-align: center;
            margin: 10px 0 20px;
            line-height: 1.5;
        }

        #result-div a {
            color: #0288d1;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        #result-div a:hover {
            color: #ffca28;
        }

        /* Chart Container */
        #chart-container {
            width: 100%;
            max-width: 800px;
            padding: 20px;
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            border-radius: 12px;
            border: 2px solid #4FC3F7;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }

        #chart-container:hover {
            transform: scale(1.02);
        }

        #chart-container canvas {
            width: 100% !important;
            max-height: 400px !important;
        }

        /* Mobile Navigation (Original) */
        @media only screen and (max-width: 727px) {
            header {
                width: fit-content;
                position: sticky;
                align-items: center;
            }

            #main-nav { 
                visibility: hidden; 
            }

            #result-div {
                width: fit-content;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            header > #mobile-nav {
                width: 10px;
                height: 10px;
                visibility: visible;
                transform: translateX(0);
                position: absolute;
                top: 30%;
                left: 53%;
                background-color: transparent;
                padding: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #menuToggle {
                display: block;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                -webkit-user-select: none;
                user-select: none;
            }

            #menuToggle > ul > label > a {
                text-decoration: none;
                color: white;
                transition: color 0.3s ease;
            }

            #menuToggle > a:hover {
                color: #232323;
            }

            #menuToggle > input {
                display: block;
                width: 40px;
                height: 32px;
                position: absolute;
                top: -7px;
                left: -5px;
                cursor: pointer;
                opacity: 0;
                z-index: 2;
                -webkit-touch-callout: none;
            }

            #menuToggle > span {
                display: block;
                width: 33px;
                height: 4px;
                margin-bottom: 5px;
                position: relative;
                background: #cdcdcd;
                border-radius: 3px;
                z-index: 1;
                transform-origin: 4px 0px;
                transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
                      background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
                      opacity 0.55s ease;
            }

            #menuToggle span:first-child {
                transform-origin: 0% 0%;
            }

            #menuToggle span:nth-last-child(2) {
                transform-origin: 0% 100%;
            }

            #menuToggle input:checked ~ span {
                opacity: 1;
                transform: rotate(45deg) translate(-2px, -1px);
                background: #232323;
            }

            #menuToggle input:checked ~ span:nth-last-child(3) {
                opacity: 0;
                transform: rotate(0deg) scale(0.2, 0.2);
            }

            #menuToggle input:checked ~ span:nth-last-child(2) {
                transform: rotate(-45deg) translate(0, -1px);
            }

            #menu {
                position: absolute;
                max-width: 400px;
                width: 100vw;
                max-height: 100vh;
                margin: -100px 0 500px -200px;
                padding: 50px;
                padding-top: 125px;
                box-sizing: border-box;
                overflow-y: auto;
                background: #ededed;
                list-style-type: none;
                -webkit-font-smoothing: antialiased;
                transform-origin: 100% 0%;
                transform: translate(100%, 0);
                transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
            }

            #menu li {
                padding: 10px 0;
                font-size: 22px;
            }

            #menu li label {
                cursor: pointer;
            }

            #menu > li > label > a {
                text-decoration: none;
                color: black !important;
                font-family: "Poppins", sans-serif !important;
                transition: color 0.3s ease;
            }

            #menu > li > label > a:hover {
                color: orange !important;
            }

            #menuToggle input:checked ~ ul {
                transform: translate(0, 0);
            }

            /* Responsive Main and Chart */
            main {
                padding: 20px 10px;
            }

            #result-div {
                padding: 20px;
                margin: 10px;
                width: 100%;
                height: auto;
            }

            #result-div h2 {
                font-size: 1.5rem;
            }

            #result-div h3 {
                font-size: 1rem;
            }

            #chart-container {
                padding: 15px;
            }

            #chart-container canvas {
                max-height: 300px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            #result-div {
                padding: 15px;
            }

            #result-div h2 {
                font-size: 1.2rem;
            }

            #result-div h3 {
                font-size: 0.9rem;
            }

            #chart-container {
                padding: 10px;
                border-width: 1px;
            }

            #chart-container canvas {
                max-height: 250px !important;
            }
        }
    </style>
</head>
<body>
    <header style="background-color: #2c3e50; position: sticky; top: 0; z-index: 1000;">
        <div id="logo">
            <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" width="40" height="40" id="hero-img" alt="" style="background-color:white; border-radius: 100%;">
            <a href="../pages/main.php" style="text-decoration: none; color: white;">SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="../pages/about.php" id="button-1">About Sleep<span></span></a>
            <a href="../pages/resources.php" id="button-2">Resources</a>
            <a href="../pages/backend/logout.php" id="button-5">Log Out</a>
        </nav>
        <nav id="mobile-nav">
            <div id="menuToggle">
                <input type="checkbox" id="menuBox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    <li><label for="menuBox"><a href="../pages/about.php">About Sleep</a></label></li>
                    <li><label for="menuBox"><a href="../pages/resources.php">Resources</a></label></li>
                    <li><label for="menuBox"><a href="../pages/backend/logout.php">Log Out</a></label></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div id="result-div">
            <?php
            if (isset($_SESSION['average_sleep_hours'])) {
                echo "<h2>Average Sleep Hours for the Week: " . round($_SESSION['average_sleep_hours'], 2) . " hours</h2>";
            } else {
                echo "<h2>No data available. Please enter your data in <a href='../pages/tracker.php'>Tracker form</a></h2>";
            }

            $hours = $_SESSION['average_sleep_hours'] ?? null;

            if ($hours) {
                if ($hours < 6) {
                    echo "<h3>It seems like you are not getting enough sleep. Please try to get at least 6 hours of sleep per day.</h3>";
                } else if ($hours >= 6 && $hours <= 8) {
                    echo "<h3>Great job! You are getting enough sleep. Keep it up!</h3>";
                } else {
                    echo "<h3>It seems like you are getting too much sleep. Please try to get at least 6 hours of sleep per day.</h3>";
                }
            }
            ?>
            <div id="chart-container">
                <canvas id="chart1"></canvas>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        var ctx = document.getElementById('chart1').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [{
                    label: 'Sleep Hours',
                    data: [
                        <?php
                        if (isset($_SESSION['daywise_hours'])) {
                            echo implode(',', array_values($_SESSION['daywise_hours']));
                        } else {
                            echo '0,0,0,0,0,0,0';
                        }
                        ?>
                    ],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>