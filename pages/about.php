<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleepSense</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');  
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            scrollbar-width: none;
        }
      
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
        height: 90%;
        margin-left: 40%;
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
        #main-nav > #button-1:hover,
    #main-nav > #button-2:hover,
    #main-nav > #button-4:hover{
        color: orange;
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



    @media only screen and  (max-width: 727px) {
    



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

        #menuToggle{
            display: block;
            position: absolute;
            top: 50%;
            right: 130px;
            transform: translateY(-50%);
            -webkit-user-select: none;
            user-select: none;
        }

        #menuToggle > ul > label > a{
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
        }
        #menuToggle > a:hover{
            color: #232323;
        }
        #menuToggle > input{
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
        #menuToggle > span{
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
        #menuToggle span:first-child
    {
      transform-origin: 0% 0%;
    }

    #menuToggle span:nth-last-child(2)
    {
      transform-origin: 0% 100%;
    }
    #menuToggle input:checked ~ span
    {
      opacity: 1;
      transform: rotate(45deg) translate(-2px, -1px);
      background: #232323;
    }
    #menuToggle input:checked ~ span:nth-last-child(3)
    {
      opacity: 0;
      transform: rotate(0deg) scale(0.2, 0.2);
    }
    #menuToggle input:checked ~ span:nth-last-child(2)
    {
      transform: rotate(-45deg) translate(0, -1px);
    }
    #menu
    {
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

    #menu li
    {
      padding: 10px 0;
      font-size: 22px;
    }

    #menu li label
    {
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

    #menuToggle input:checked ~ ul
    {
      transform: translate(0, 0);
    }
        body > main{
            width: 90%;
            height: 100%;
            background-color: rgb(229, 233, 233);
        }
    }
        main {
            width: 100%;
            height: 100%;
            background-color: rgb(229, 233, 233);
            display: flex;
            justify-self: center;
            flex-direction: column;
            
            border-radius: 20px;
        }
        
        #hero-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        #hero-section h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            margin-bottom: 10px;
        }
        
        #hero-section p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        
        #about-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        #about-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        #about-section p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        
        #benefits-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        #benefits-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        #benefits-section ul {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        
        #benefits-section li {
            margin-bottom: 10px;
        }
        
        #resources-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        #resources-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        #resources-section p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        
        #sleep-cycle-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        #sleep-cycle-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        #sleep-cycle-section p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        
        #sleep-disorders-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        #sleep-disorders-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        #sleep-disorders-section ul {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        
        #sleep-disorders-section li {
            margin-bottom: 10px;
        }
        
        #graph-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        #graph-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        #graph-section canvas {
            width: 80%;
            height: 400px }
    </style>
</head>
<body>
    <header style="background-color: #0D1B2A; position: sticky; top: 0; z-index: 1000;">
        <div id="logo">
            <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" width="40" height="40" id="hero-img" alt="" style="background-color:white; border-radius: 100%;">
            <a> SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="#" id="button-1">About Sleep<span></span></a>
            <a href="#" id="button-2">Resources</a>
            <a href="#" id="button-4">Contact Us</a>
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
                    <li><label for="menuBox"><a href="#">Resources</a></label></li>
                    <li><label for="menuBox"><a href="#">Contact Us</a></label></li>
                    <li><label for="menuBox"><a href="../pages/main.php">Home</a></label></li>
                  </ul>
               </div>
            </nav>
    </header>

    <main>
        <section id="hero-section">
            <h1>Welcome to SleepSense</h1>
            <p>Your guide to understanding sleep cycles and disorders.</p>
            <img src="https://images.unsplash.com/photo-1517497218325-5b0d8d0d4a9d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Sleep Image" style="width: 100%; max-width: 600px; border-radius: 10px;">
        </section>

        <section id="sleep-cycle-section">
            <h2>What Does a Typical Sleep Cycle Look Like?</h2>
            <p>A typical sleep cycle lasts about 90 minutes and consists of several stages:</p>
            <ul>
                <li><strong>Stage 1 (NREM):</strong> Light sleep, transition from wakefulness to sleep.</li>
                <li><strong>Stage 2 (NREM):</strong> Deeper sleep, heart rate slows, body temperature drops.</li>
                <li><strong>Stage 3 (NREM):</strong> Deep sleep, essential for physical recovery and growth.</li>
                <li><strong>Stage 4 (REM):</strong> Rapid eye movement sleep, where dreaming occurs, important for memory consolidation.</li>
            </ul>
            <p>Typically, a person goes through 4-6 sleep cycles per night, with REM sleep increasing in duration with each cycle.</p>
        </section>

        <section id="sleep-disorders-section">
            <h2>Disorders Due to Lack of Sleep</h2>
            <p>Chronic sleep deprivation can lead to various sleep disorders, including:</p>
            <ul>
                <li><strong>Insomnia:</strong> Difficulty falling or staying asleep.</li>
                <li><strong>Sleep Apnea:</strong> Breathing interruptions during sleep.</li>
                <li><strong>Restless Legs Syndrome:</strong> Uncomfortable sensations in the legs, leading to an urge to move them.</li>
                <li><strong>Narcolepsy:</strong> Excessive daytime sleepiness and sudden sleep attacks.</li>
            </ul>
            <p>These disorders can significantly impact overall health, mood, and cognitive function.</p>
        </section>

        <section id="graph-section">
            <h2>Trends of Sleep Disorders</h2>
            <canvas id="sleepDisordersChart"></canvas>
        </section>

        <section id="resources-section">
            <h2>Resources</h2>
            <p>For more information on sleep health, consider visiting:</p>
            <ul>
                <li><a href="#">National Sleep Foundation</a></li>
                <li><a href="#">American Academy of Sleep Medicine</a></li>
                <li><a href="#">Sleep Research Society</a></li>
            </ul>
        </section>
    </main>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
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
                }
                ]
            },
            options: {
                responsive: true,
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
                }
            }
        });
    </script>
</body>
</html>