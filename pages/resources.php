<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleepSense - Resources</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');  
        body, html {
            width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            scrollbar-width: none;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3e7ff 0%, #b3d4fc 100%);
        }

        /* Header styles remain unchanged */
        header {
            width: 100%;
            height: 44px;
            color: white;
            background-color: #101922;
            position: sticky;
            padding: 14px;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        #main-nav {
            width: 100%;
            height: fit-content;
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
            color: white;
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
            width: 130px;
            height: 90%;
            padding: 8px;
            color: black;
            background-color: #4FC3F7;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        #main-nav > #button-5:hover {
    color: black;
    background-color: white;
    box-shadow: 0 0 10px rgb(255, 255, 255);
}

        #logo {
            font-size: 1.5rem;
            font-family: "Poppins", sans-serif;
            color: white;
            font-weight: bolder;
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

        @media (max-width: 1400px) {
            #mobile-nav {
                width: 10px;
                height: 10px;
                visibility: visible;
                transform: translateX(0);
                position: absolute;
                top: 30%;
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
                right: -2px;
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
        }

        @media (max-width: 727px) {
            header {
                width: fit-content;
                position: sticky;
                align-items: center;
            }

            #main-nav {
                visibility: hidden;
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

            .resource-grid {
                grid-template-columns: 1fr;
            }
        }

        #hero-img {
            background-color: #F8F9FA;
            border-radius: 100%;
        }

        /* Enhanced main styles */
        main {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        section {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            opacity: 0;
            transform: translateX(-50px);
            animation: slideIn 0.5s ease-out forwards;
        }

        section:nth-child(2) { animation-delay: 0.1s; }
        section:nth-child(3) { animation-delay: 0.2s; }
        section:nth-child(4) { animation-delay: 0.3s; }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        section:hover {
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18);
        }

        h1, h2 {
            color: #1a237e;
            text-align: center;
        }

        h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #5e35b1, #7e57c2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h2 {
            font-size: 2.3rem;
            margin-bottom: 20px;
        }

        p, ul {
            color: #263238;
            font-size: 1.15rem;
            line-height: 1.7;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
        }

        ul li::before {
            content: '✨';
            position: absolute;
            left: 0;
            font-size: 1.3rem;
        }

        a {
            color: #5e35b1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #9575cd;
            text-decoration: underline;
        }

        #hero-section {
            text-align: center;
            padding: 60px 40px;
            background: linear-gradient(135deg, #5e35b1, #7e57c2);
            color: white;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        #hero-section h1 {
            font-size: 4rem;
            margin-bottom: 15px;
            -webkit-text-fill-color: white;
        }

        #hero-section p {
            font-size: 1.4rem;
            max-width: 600px;
            margin: 0 auto 30px;
            color: #ede7f6;
        }

        #hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/1600x900/?sleep,stars') no-repeat center center/cover;
            opacity: 0.25;
            z-index: 0;
        }

        #hero-section > * {
            position: relative;
            z-index: 1;
        }

        .resource-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .resource-card {
            background: #f3e7ff;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .resource-card:hover {
            transform: scale(1.05);
            background: #ede7f6;
        }

        .resource-card h3 {
            margin: 0 0 10px;
            font-size: 1.6rem;
            color: #1a237e;
        }

        .resource-card p {
            margin: 0 0 15px;
            font-size: 1rem;
        }

        /* Footer styles */
        footer {
            background: #1a237e;
            color: white;
            padding: 30px 20px;
            text-align: center;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 0.95rem;
        }

        footer a {
            color: #b3d4fc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #ede7f6;
        }
    </style>
</head>
<body>
    <header style="position: sticky; top: 0; z-index: 1000;">
        <div id="logo">
            <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" width="40" height="40" id="hero-img" alt="SleepSense Logo">
            <a href="../pages/main.php" style="text-decoration: none; color: white;">SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="../pages/about.php" id="button-1">About Sleep<span></span></a>
            <a href="../pages/resources.php" id="button-2">Resources<span></span></a>
            <a href="../pages/main.php" id="button-5">Home</a>
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
                    <li><label for="menuBox"><a href="../pages/main.php">Home</a></label></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section id="hero-section">
            <h1>Explore Sleep Resources</h1>
            <p>Unlock a wealth of knowledge to improve your sleep with trusted tools, research, and expert insights.</p>
            <a href="#resources-section" style="display: inline-block; padding: 12px 25px; background: #fff; color: #5e35b1; text-decoration: none; border-radius: 25px; font-weight: 600; transition: background 0.3s ease;">Start Exploring</a>
        </section>

        <section id="resources-section">
            <h2>Trusted Sleep Resources</h2>
            <p>Discover reputable sources offering valuable information on sleep science, health, and practical solutions for better rest.</p>
            <div class="resource-grid">
                <div class="resource-card">
                    <h3>National Sleep Foundation</h3>
                    <p>Explore sleep tips, research, and tools to enhance your nightly rest.</p>
                    <a href="https://www.thensf.org/about-sleeptech/" target="_blank">Visit Site</a>
                </div>
                <div class="resource-card">
                    <h3>American Academy of Sleep Medicine</h3>
                    <p>Find expert guidance on sleep disorders and clinical sleep care.</p>
                    <a href="https://aasm.org/about/" target="_blank">Visit Site</a>
                </div>
                <div class="resource-card">
                    <h3>Sleep Research Society</h3>
                    <p>Access cutting-edge studies advancing the science of sleep.</p>
                    <a href="https://sleepresearchsociety.org/about/who-we-are/" target="_blank">Visit Site</a>
                </div>
                <div class="resource-card">
                    <h3>World Sleep Society</h3>
                    <p>Learn about global sleep health initiatives and educational programs.</p>
                    <a href="https://worldsleepsociety.org/" target="_blank">Visit Site</a>
                </div>
            </div>
        </section>

        <section id="tools-section">
            <h2>Sleep Tools & Apps</h2>
            <p>Boost your sleep quality with these innovative apps and devices designed to track and optimize rest.</p>
            <ul>
                <li><strong>SleepScore:</strong> Analyzes sleep patterns and offers personalized tips to improve rest. <a href="https://www.sleepscore.com/" target="_blank">Learn More</a></li>
                <li><strong>Pzizz:</strong> Uses soundscapes and narration to help you fall asleep faster. <a href="https://pzizz.com/" target="_blank">Learn More</a></li>
                <li><strong>Oura Ring:</strong> Tracks sleep stages and provides insights for better health. <a href="https://ouraring.com/" target="_blank">Learn More</a></li>
            </ul>
        </section>
    </main>

    <footer>
        <p style="color: white;">© 2025 SleepSense. All rights reserved. </p>
    </footer>
</body>
</html>