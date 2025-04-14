<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SleepSense helps you track and improve your sleep quality with personalized recommendations.">
    <link rel="stylesheet" href="../stylesheets/mainsheet.css">
    <title>SleepSense</title>
    <link rel="icon" href="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png">
</head>
<body>
    <header>
        <div id="logo">
            <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" id="hero-img" alt="SleepSense Logo">
            <a href="../pages/main.php" style="text-decoration: none; color: white;">SLEEPSENSE</a>
        </div>
        <nav id="main-nav" role="navigation">
            <a href="../pages/about.php" id="button-1">About Sleep</a>
            <a href="../pages/resources.php" id="button-2">Resources</a>
            <a href="../pages/login.php" id="button-5">Get Started</a>
        </nav>
        <nav id="mobile-nav" role="navigation">
            <div id="menuToggle">
                <input type="checkbox" id="menuBox" aria-label="Toggle navigation menu">
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    <button id="menu-close" aria-label="Close menu"></button>
                    <li><label for="menuBox"><a href="../pages/about.php">About Sleep</a></label></li>
                    <li><label for="menuBox"><a href="../pages/resources.php">Resources</a></label></li>
                    <li><label for="menuBox"><a href="../pages/login.php">Get Started</a></label></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <video autoplay muted loop loading="lazy">
            <source src="../public/12676882_3840_2160_30fps.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div id="div-1">
                <aside id="aside-1"><img src="../public/7cd62ef2-08da-4d8b-880f-98558b69dc1b.png" alt="Sleep illustration" id="cover-img" loading="lazy"></aside>
                <h1 id="main-title">
                    <b>Track, Improve, Sleep</b> Better with SleepSense<br>
                    Transform your Nights with <b id="boldy-3">SleepSense</b>
                </h1>
            </div>
            <div id="div-2">
                <h1 id="h-2">Why Use SleepSense?</h1>
                <p id="p-1">SleepSense is a comprehensive sleep tracking system that helps you understand your sleep patterns and improve your sleep quality. With SleepSense, you can track your sleep duration, sleep quality, and sleep stages. SleepSense also provides personalized recommendations to help you improve your sleep quality.</p>
                <div id="div-2-1">
                    <canvas id="myChart"></canvas>
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
            <hr id="hr1" aria-label="Section divider">
        </div>
        <div id="div-3">
            <aside id="aside-2">
                <img src="../public/Untitled_design.png" alt="SleepSense technology illustration" id="img2" loading="lazy">
            </aside>
            <aside id="aside-3">
                <h1 id="h-3">How SleepSense Works?</h1>
                <p id="p-2">SleepSense uses advanced technology to monitor your sleep and provide personalized recommendations to improve your sleep quality. Track your sleep duration and quality with SleepSense.</p>
            </aside>
        </div>
        <footer style="background-color: #1a1a1a; color: #ccc; padding: 40px 20px; text-align: center; font-family: 'Arial', sans-serif; font-size: 16px;">
            <div style="max-width: 1200px; margin: 0 auto;">
                <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px; margin-bottom: 30px;">
                    <div style="min-width: 150px;">
                        <h3 style="color: white; margin-bottom: 10px;">SleepSense</h3>
                        <p style="margin: 0;">Track. Improve. Sleep Better.</p>
                    </div>
                    <div style="min-width: 150px;">
                        <h4 style="color: #eee; margin-bottom: 10px;">Quick Links</h4>
                        <a href="../pages/about.php" style="color: #bbb; text-decoration: none; display: block; margin-bottom: 5px; transition: color 0.3s;" onmouseover="this.style.color='orange';" onmouseout="this.style.color='#bbb';">About</a>
                        <a href="../pages/resources.php" style="color: #bbb; text-decoration: none; display: block; margin-bottom: 5px; transition: color 0.3s;" onmouseover="this.style.style.color='orange';" onmouseout="this.style.color='#bbb';">Resources</a>
                        <a href="../pages/login.php" style="color: #bbb; text-decoration: none; display: block; transition: color 0.3s;" onmouseover="this.style.color='orange';" onmouseout="this.style.color='#bbb';">Get Started</a>
                    </div>
                    <div style="min-width: 150px;">
                        <h4 style="color: #eee; margin-bottom: 10px;">Follow Us</h4>
                        <a href="#" style="color: #bbb; text-decoration: none; margin: 0 5px; transition: color 0.3s;" onmouseover="this.style.color='pink';" onmouseout="this.style.color='#bbb';">Instagram</a> |
                        <a href="https://www.github.com/ojaswi1234" style="color: #bbb; text-decoration: none; margin: 0 5px; transition: color 0.3s;" onmouseover="this.style.color='green';" onmouseout="this.style.color='#bbb';">Github</a> |
                        <a href="https://www.linkedin.com/in/ojaswi-bhardwaj-962393281/" style="color: #bbb; text-decoration: none; margin: 0 5px; transition: color 0.3s;" onmouseover="this.style.color='lightblue';" onmouseout="this.style.color='#bbb';">LinkedIn</a>
                    </div>
                </div>
                <hr style="border: none; height: 1px; background-color: #333; margin: 20px 0;">
                <p style="margin: 0; font-size: 12px; color: #666;">© 2025 SleepSense. All rights reserved.</p>
            </div>
        </footer>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);
        gsap.from("#div-2-1", {
            scrollTrigger: {
                trigger: "#div-2-1",
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
            },
            duration: 1,
            opacity: 0,
            y: 100,
        });
        gsap.from("#h-3", {
            x: 200,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: "#h-3",
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
            }
        });
        gsap.from("#p-2", {
            x: -200,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: "#p-2",
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
            }
        });
        gsap.from("#img2", {
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: "#img2",
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
            },
        });

        // Chart.js
        const xAxis = [2019, 2020, 2021, 2022, 2023, 2024];
        const yAxis = [7.5, 7.3, 7.1, 6.9, 6.7, 6.5];
        const myChart = new Chart("myChart", {
            type: "line",
            data: {
                labels: xAxis,
                datasets: [{
                    backgroundColor: "rgba(52, 152, 219, 0.2)",
                    borderColor: "#3498db",
                    pointBackgroundColor: "#3498db",
                    pointBorderColor: "#3498db",
                    data: yAxis,
                    label: "Average Sleep Hours",
                    fill: true,
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Average Sleep Hours per Night (2019-2024)",
                    fontSize: 24,
                    fontColor: "#333",
                },
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false,
                            min: 6,
                            max: 8,
                            stepSize: 0.5,
                            fontColor: "#666",
                            fontSize: 14,
                        },
                        gridLines: {
                            display: true,
                            color: "#ddd",
                        },
                    }],
                    xAxes: [{
                        ticks: {
                            fontColor: "#666",
                            fontSize: 14,
                        },
                        gridLines: {
                            display: false,
                        },
                    }],
                },
            },
        });
        const ctx = document.getElementById('myChart2').getContext('2d');
        const sleepPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['India', 'Netherlands', 'Finland', 'Australia', 'France', 'Japan', 'Singapore'],
                datasets: [{
                    data: [7.1, 8.1, 8.0, 7.9, 7.9, 6.4, 6.7],
                    backgroundColor: [
                        '#e74c3c', '#3498db', '#2ecc71', '#f1c40f',
                        '#9b59b6', '#34495e', '#1abc9c'
                    ],
                    borderColor: '#ffffff',
                    borderWidth: 1
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Average Sleep Hours by Country (2024)',
                    fontSize: 24,
                    fontColor: '#333'
                },
                legend: {
                    display: true,
                    position: 'right'
                }
            }
        });

        // Responsive Chart Adjustments
        function adjustChartFontSizes() {
            const isMobile = window.innerWidth <= 768;
            myChart.options.title.fontSize = isMobile ? 18 : 24;
            myChart.options.scales.yAxes[0].ticks.fontSize = isMobile ? 12 : 14;
            myChart.options.scales.xAxes[0].ticks.fontSize = isMobile ? 12 : 14;
            myChart.update();
            sleepPieChart.options.title.fontSize = isMobile ? 18 : 24;
            sleepPieChart.options.legend.labels.fontSize = isMobile ? 12 : 14;
            sleepPieChart.update();
        }
        adjustChartFontSizes();
        window.addEventListener('resize', adjustChartFontSizes);

        // Close button handler
        document.getElementById('menu-close').addEventListener('click', () => {
            document.getElementById('menuBox').checked = false;
        });
    </script>
</body>
</html>