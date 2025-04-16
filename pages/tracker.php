<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['mysql_username'])) {
    header("Location: ../pages/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleepSense Tracker</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');  
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            scrollbar-width: none;
            font-family: 'Poppins', sans-serif;
            background: whitesmoke;
        }

        header {
            width: 100%;
            height: 72px;
            color: white;
            background-color: #101922;
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #logo {
            font-size: 1.5rem;
            color: #ecf0f1;
            font-weight: bolder;
            text-shadow: 2px 2px 2px #2c3e50;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        #logo > a {
            text-decoration: none;
            color: #ecf0f1;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        #logo img {
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
        }

        #main-nav {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        #main-nav > a {
            width: 130px;
            padding: 8px;
            border-radius: 10px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: transparent;
            cursor: pointer;
            transition: color 0.3s ease;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            position: relative;
        }

        #main-nav > #button-1:hover,
        #main-nav > #button-2:hover,
        #main-nav > #button-4:hover {
            color: orange;
        }

        #main-nav > #button-1::after,
        #main-nav > #button-2::after,
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
            width: 130px;
            padding: 8px;
            color: black;
            background-color: #4FC3F7;
            font-weight: bold;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        #main-nav > #button-5:hover {
            color: black;
            background-color: white;
            box-shadow: 0 0 10px rgb(255, 255, 255);
        }

        #mobile-nav {
            display: none;
        }

        @media only screen and (max-width: 768px) {
            header {
                height: 56px;
                padding: 10px 15px;
            }

            #main-nav {
                display: none;
            }

            #mobile-nav {
                display: block;
            }

            #menuToggle {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: relative;
                width: 40px;
                height: 40px;
                z-index: 1001;
                -webkit-user-select: none;
                user-select: none;
            }

            #menuToggle input {
                display: block;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                cursor: pointer;
                opacity: 0;
                z-index: 2;
            }

            #menuToggle span {
                display: block;
                width: 28px;
                height: 3px;
                margin-bottom: 5px;
                position: relative;
                background: #cdcdcd;
                border-radius: 3px;
                z-index: 1;
                transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                           background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                           opacity 0.55s ease;
            }

            #menuToggle span:last-child {
                margin-bottom: 0;
            }

            #menuToggle input:checked ~ span {
                opacity: 1;
                transform: rotate(45deg) translate(-2px, -1px);
                background: white;
            }

            #menuToggle input:checked ~ span:nth-last-child(3) {
                opacity: 0;
                transform: rotate(0deg) scale(0.2, 0.2);
            }

            #menuToggle input:checked ~ span:nth-last-child(2) {
                transform: rotate(-45deg) translate(0, -1px);
            }

            #menu {
                position: fixed;
                top: 56px;
                right: 0;
                width: 200px;
                max-width: 80vw;
                height: calc(100vh - 56px);
                margin: 0;
                padding: 20px;
                background: #ffffff;
                color: black;
                list-style-type: none;
                transform: translateX(100%);
                transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
                overflow-y: auto;
                z-index: 1000;
            }

            #menu li {
                padding: 15px 0;
                font-size: 1rem;
            }

            #menu a {
                color: black;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            #menu a:hover {
                color: orange;
            }

            #menuToggle input:checked ~ ul {
                transform: translateX(0);
            }
        }

        @media only screen and (max-width: 480px) {
            #logo {
                font-size: 1.2rem;
            }

            #logo img {
                width: 30px;
                height: 30px;
            }

            #menuToggle {
                width: 36px;
                height: 36px;
            }

            #menu {
                width: 180px;
                max-width: 75vw;
            }
        }

        main {
            width: 100%;
            height: 100%;
            background: transparent;
        }

        #tracker-div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 5%;
        }

        #tracker-form > h1 {
            font-family: "Poppins", sans-serif;
            font-size: 2.5rem;
            color: #2c3e50;
            text-align: center;
        }

        #tracker-form > label {
            font-family: "Poppins", sans-serif;
            font-size: 1.2rem;
            color: #2c3e50;
            text-align: left;
            display: block;
            padding-bottom: 10px;
        }

        #tracker-form > input {
            width: 500px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid #2c3e50;
            padding: 5px;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            outline: none;
        }

        #tracker-form > input[type="submit"] {
            width: 100px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #2c3e50;
            justify-self: center;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            background-color: #2c3e50;
            color: #ecf0f1;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 24px;
        }

        #tracker-form > input[type="submit"]:hover {
            background-color: white;
            color: #2c3e50;
            border: 1px solid #2c3e50;
            transition: 0.3s ease-in-out;
            outline: none;
        }

        #tracker-form > select {
            width: 510px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #2c3e50;
        }

        #tracker-form > select:hover, #tracker-form > select:focus {
            background-color: #2c3e50;
            color: white;
            cursor: pointer;
        }

        form {
            width: 800px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            align-items: center;
            justify-content: center;
            height: 550px;
            background-color: transparent;
            border: 4px solid #2c3e50;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            margin-top: 6%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            box-sizing: border-box;
        }

        form::before {
            content: "";
            position: absolute;
            height: 16px;
            width: 702px;
            background-color: #2c3e50;
            bottom: -9px;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.5s, height 0.5s 0.5s;
            box-sizing: border-box;
        }

        form::after {
            content: "";
            position: absolute;
            height: 14px;
            width: 702px;
            background-color: #2c3e50;
            top: -9px;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.5s, height 0.5s 0.5s;
            box-sizing: border-box;
        }

        form:hover::before {
            width: 0;
            height: 10px;
            transition: height 0.5s, width 0.5s 0.5s;
        }

        form:hover::after {
            width: 0;
            height: 10px;
            transition: height 0.5s, width 0.5s 0.5s;
        }

        #span1 {
            background-color: #2c3e50;
            color: white;
            padding: 5px;
        }

        @media only screen and (max-width: 727px) {
            form::before {
                content: "";
                position: absolute;
                height: 16px;
                width: 202px;
                background-color: #2c3e50;
                bottom: -9px;
                left: 50%;
                transform: translateX(-50%);
                transition: width 0.5s, height 0.5s 0.5s;
                box-sizing: border-box;
            }

            form::after {
                content: "";
                position: absolute;
                height: 14px;
                width: 202px;
                background-color: #2c3e50;
                top: -9px;
                left: 50%;
                transform: translateX(-50%);
                transition: width 0.5s, height 0.5s 0.5s;
                box-sizing: border-box;
            }

            form:hover::before {
                width: 0;
                height: 10px;
                transition: height 0.5s, width 0.5s 0.5s;
            }

            form:hover::after {
                width: 0;
                height: 10px;
                transition: height 0.5s, width 0.5s 0.5s;
            }

            #tracker-div {
                width: fit-content;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #tracker-form {
                width: 85%;
                height: 80%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transform: translateY(15%);
            }

            #tracker-form > h1 {
                font-size: 1.5rem;
                text-align: center;
            }

            #tracker-form > input {
                width: 80%;
            }

            #tracker-form > select {
                width: 83%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div id="logo">
            <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" alt="SleepSense Logo">
            <a href="../pages/main.php">SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="../pages/about.php" id="button-1">About Sleep</a>
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
        <div id="tracker-div">
            <form method="post" action="../pages/backend/db.php" id="tracker-form">
                <h1>Enter your <span id="span1">Sleep Time</span></h1>
                <label for="sleep_time">Sleep Time</label>
                <input type="time" id="sleep-time" name="sleep-time" required>
                <br><br>
                <label for="wake_time">Wake Time</label>
                <input type="time" id="wakeup-time" name="wakeup-time" required>
                <br><br>
                <select name="day" id="day-select" required>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
                <br><br>
                <input type="submit" value="Submit" id="submit-button">
            </form>
        </div>
    </main>
    <script>
        // Fetch used days and disable them in the dropdown
        fetch('../pages/backend/get_days.php')
            .then(response => response.json())
            .then(data => {
                const select = document.getElementById('day-select');
                const options = select.options;
                for (let i = 0; i < options.length; i++) {
                    if (data.includes(options[i].value)) {
                        options[i].disabled = true;
                    }
                }
            })
            .catch(error => console.error('Error fetching used days:', error));
    </script>
</body>
</html>