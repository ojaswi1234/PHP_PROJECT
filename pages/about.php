<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleepSense</title>
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
            background: linear-gradient(135deg, #e0f7fa 0%, #80deea 100%);
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
#main-nav > #button-2:hover {
    color: orange;
}
#main-nav > #button-1::after,
#main-nav > #button-2::after {
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
#main-nav > #button-2:hover::after {
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

        main {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 10px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        section {
            width: 100%;
            max-width: calc(100% - 20px);
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        h1, h2 {
            color: #0D1B2A;
            text-align: center;
            margin: 0 0 15px;
        }

        h1 {
            font-size: 2.5rem;
            background: linear-gradient(45deg, #0288d1, #4fc3f7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h2 {
            font-size: 1.8rem;
        }

        p, ul {
            color: #34495e;
            font-size: 1rem;
            line-height: 1.6;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
        }

        ul li::before {
            content: ' ';
            position: absolute;
            left: 0;
            font-size: 1rem;
        }

        #hero-section {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #0288d1, #4fc3f7);
            color: white;
            position: relative;
            overflow: hidden;
        }

        #hero-section h1 {
            font-size: 2.8rem;
            -webkit-text-fill-color: white;
        }

        #hero-section p {
            font-size: 1.2rem;
            max-width: 90%;
            margin: 0 auto 20px;
            color: #e0f7fa;
        }

        #hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/1600x900/?sleep,moon') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }

        #hero-section > * {
            position: relative;
            z-index: 1;
        }

        #graph-section canvas {
            width: 100% !important;
            max-height: 300px;
            background: #fff;
            border-radius: 8px;
            padding: 10px;
        }

        footer {
            background: #0D1B2A;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
            width: 100%;
        }

        @media only screen and (max-width: 480px) {
            h1 { font-size: 2rem; }
            h2 { font-size: 1.5rem; }
            #hero-section h1 { font-size: 2.2rem; }
            #hero-section p { font-size: 1rem; }
            section { 
                padding: 15px;
                max-width: calc(100% - 10px);
            }
            #graph-section canvas { max-height: 250px; }
            main { padding: 15px 5px; }
            #menuToggle {
                width: 36px;
                height: 36px;
            }
            #menu {
                width: 180px;
                max-width: 75vw;
            }
        }
    </style>
</head>
<body>
    <header>
        <div id="logo">
            <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" alt="SleepSense Logo">
            <a>SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="../pages/about.php" id="button-1">About Sleep</a>
            <a href="../pages/resources.php" id="button-2">Resources</a>
            <a href="../pages/main.php" id="button-5">Home</a>
        </nav>
        <nav id="mobile-nav">
            <div id="menuToggle">
                <input type="checkbox" id="menuBox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    <li><a href="../pages/about.php">About Sleep</a></li>
                    <li><a href="../pages/resources.php">Resources</a></li>
                    <li><a href="../pages/main.php">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section id="hero-section">
            <h1>Discover SleepSense</h1>
            <p>Embark on a journey to better sleep with our comprehensive guide to understanding sleep cycles, disorders, and wellness tips for a restful night.</p>
            <a href="#sleep-cycle-section" style="display: inline-block; padding: 12px 24px; background: #fff; color: #0288d1; text-decoration: none; border-radius: 25px; font-weight: 600; transition: background 0.3s ease;">Learn More</a>
        </section>

        <section id="sleep-cycle-section">
            <h2>Explore the Sleep Cycle</h2>
            <p>Understanding your sleep cycle is key to unlocking restful nights. Each cycle, lasting approximately 90 minutes, guides you through distinct stages essential for physical and mental restoration.</p>
            <ul>
                <li><strong>Stage 1 (NREM):</strong> A gentle transition into light sleep, where your body begins to relax and drift from wakefulness.</li>
                <li><strong>Stage 2 (NREM):</strong> A deeper state where heart rate slows, body temperature drops, and your body prepares for profound rest.</li>
                <li><strong>Stage 3 (NREM):</strong> The deep sleep phase, critical for physical recovery, immune support, and growth.</li>
                <li><strong>Stage 4 (REM):</strong> Rapid Eye Movement sleep, where vivid dreams unfold and your brain consolidates memories and learning.</li>
            </ul>
            <p>Each night, you’ll experience 4-6 cycles, with REM sleep lengthening as the night progresses, enhancing cognitive function and emotional balance.</p>
        </section>

        <section id="sleep-disorders-section">
            <h2>Navigating Sleep Disorders</h2>
            <p>Poor sleep can disrupt your life, leading to disorders that affect health and well-being. Recognizing these conditions is the first step toward better rest.</p>
            <ul>
                <li><strong>Insomnia:</strong> Persistent trouble falling or staying asleep, often linked to stress or lifestyle factors.</li>
                <li><strong>Sleep Apnea:</strong> Interrupted breathing during sleep, causing fatigue and increasing health risks if untreated.</li>
                <li><strong>Restless Legs Syndrome:</strong> Uncomfortable leg sensations that disrupt sleep, urging constant movement.</li>
                <li><strong>Narcolepsy:</strong> Uncontrollable daytime sleepiness and sudden sleep attacks, impacting daily routines.</li>
            </ul>
            <p>Addressing these disorders through medical guidance or lifestyle changes can restore healthy sleep patterns and improve your quality of life.</p>
        </section>

        <section id="tips-section">
            <h2>Tips for Better Sleep</h2>
            <p>Transform your nights with simple, effective strategies to enhance sleep quality and wake up refreshed.</p>
            <ul>
                <li><strong>Maintain a Routine:</strong> Go to bed and wake up at the same time daily to regulate your body’s internal clock.</li>
                <li><strong>Create a Sleep Sanctuary:</strong> Keep your bedroom cool, dark, and quiet, with a comfortable mattress and pillows.</li>
                <li><strong>Limit Screen Time:</strong> Avoid screens at least an hour before bed to reduce blue light exposure, which can suppress melatonin.</li>
                <li><strong>Relax Before Bed:</strong> Practice calming activities like reading, meditation, or a warm bath to signal it’s time to rest.</li>
            </ul>
            <p>Incorporating these habits can pave the way for deeper, more restorative sleep, boosting your energy and mood.</p>
        </section>

        <section id="graph-section">
            <h2>Trends in Sleep Disorders</h2>
            <p>Explore how sleep disorder cases have evolved over recent years, highlighting the growing need for awareness and intervention.</p>
            <canvas id="sleepDisordersChart"></canvas>
        </section>
    </main>

    <footer>
        <p>© 2025 SleepSense. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('sleepDisordersChart').getContext('2d');
        const sleepDisordersChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['2019', '2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    label: 'Insomnia Cases',
                    data: [30, 35, 40, 45, 50, 55],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderWidth: 2
                },
                {
                    label: 'Sleep Apnea Cases',
                    data: [20, 25, 30, 35, 40, 45],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderWidth: 2
                },
                {
                    label: 'Restless Legs Syndrome Cases',
                    data: [10, 15, 20, 25, 30, 35],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2
                },
                {
                    label: 'Narcolepsy Cases',
                    data: [5, 10, 15, 20, 25, 30],
                    borderColor: 'rgba(153, 102, 255, 1)',
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Cases'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Year'
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        borderRadius: 8,
                    }
                }
            }
        });
    </script>
</body>
</html>