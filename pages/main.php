<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/mainsheet.css">
    <title>SleepSense</title>
    <favicon src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png"></favicon>
</head>


<body>
    <header>
        <div id="logo">
        <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" width="40" height="40" id="hero-img" alt="">
            <a> SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="#" id="button-1">About Sleep<span></span></a>
            <a href="#" id="button-2">Contact<span></span></a>
            <a href="../pages/tracker.php" id="button-3">Track My Sleep</a>
            <a href="#" id="button-4">Contact Us</a>
            <a href="#" id="button-5">Get Started</a>
        </nav>
        <nav id="mobile-nav">
            <button>MENU<svg aria-hidden="true" data-prefix="fal" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-7x"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z" class=""></path></svg></button>
        </nav>

    </header>
    <main>
            <video autoplay muted loop>
                <source src="../public/12676882_3840_2160_30fps.mp4" type="video/mp4">
            </video>
        <div class="container">
            <div id="div-1">
                <aside><img src="../public/pngtree-room-model-cute-three-dimensional-cartoon-pattern-png-image_6671841-removebg-preview.png" alt="sleep" id="cover-img"></aside>
                
                    <h1 id="main-title">
                        <b>Track, Improve, Sleep</b> Better with SleepSense <br />
                        Transform your Nights with <b id="boldy-3">SleepSense</b>
                    </h1>
                
            </div>
            <div id="div-2">
                <h1 id="h-2">Why Use SleepSense ?</h1>
                <p id="p-1">SleepSense is a comprehensive sleep tracking system that helps you understand your sleep patterns<br/> and improve your sleep quality. With SleepSense, you can track your sleep duration, sleep quality, and sleep stages.<br />SleepSense also provides personalized recommendations to help you improve your sleep quality.</p>
                <div id="div-2-1">
            <canvas id="myChart" width="500" height="300"></canvas>
            <canvas id="myChart2" width="500" height="300"></canvas>
            </div>
            </div>
            <hr id="hr1" aria-label="hidden"/>
        </div>

        <div id="div-3">
          <aside id="aside-2">
            <img src="../public/Untitled design.png" width="700" height="450" alt="sleep" id="img2">
          </aside>
          <aside id="aside-3">
            <h1 id="h-3">How SleepSense Works ? </h1>
            <p id="p-2">SleepSense uses advanced technology to monitor your sleep and provide personalized recommendations to improve your sleep quality. Track your sleep duration, quality,and stages with SleepSense.</p>
          </aside>
        </div>

        <div id="div-4">
          <h1>Continue</h1>
        </div>
        <footer>
            <h4>Follow Us on Our Social Media Channels</h4>
            <div id="follow-div">
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" width="25" height="25" id="github"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="25" height="25" id="instagram"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="25" height="25" id="linkedin"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a>
            </div>
    </footer>
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        const mainTitle = document.getElementById("main-title");
        const coverImg = document.getElementById("cover-img");

        
        const chartDiv = document.getElementById("div-2-1");
        gsap.from(chartDiv, {
            scrollTrigger: {
                trigger: chartDiv,
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                stagger: 0.1,
            },
            duration: 1,
            opacity: 0,
            y: 200,
            
        });

        gsap.from("#h-3",{
          x: 400,
          opacity: 0,
          duration: 1,
          scrollTrigger:{
            trigger:"#h-3",
            start: "top 70%",
            end: "bottom 20%",
            markers: false,
          }
        });
        gsap.from("#p-2",{
          x: -400,
          opacity: 0,
          duration: 1,
          scrollTrigger:{
            trigger:"#p-2",
            start: "top 70%",
            end: "bottom 20%",
            markers: false,
          }
        });

        gsap.from("#img2",{
          opacity: 0,
          duration: 1,
          delay:0.2,
          scrollTrigger:{
            trigger:"#img2",
            start: "top 70%",
            end: "bottom 20%",
            markers: false,
          },
        })
        const xAxis = [2019, 2020, 2021, 2022, 2023, 2024];
        const Colors = ["#3498db", "#f1c40f", "#2ecc71", "#e74c3c", "#9b59b6"];
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
              pointHoverBackgroundColor: "#3498db",
              pointHoverBorderColor: "#3498db",
              data: yAxis,
              label: "Sleep Hours",
              fill: true,
            }]
          },
          options: {
            title: {
              display: true,
              text: "Average Sleep Hours per Night",
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

        const myChart2 = new Chart("myChart2", {
          type: "bar",
          data: {
            labels: xAxis,
            datasets: [{
              label: "Sleep Hours",
              data: yAxis,
              backgroundColor: [
            "#3498db",
            "#f1c40f",
            "#2ecc71",
            "#e74c3c",
            "#9b59b6",
            "#1abc9c",
              ],
              borderColor: [
            "#3498db",
            "#f1c40f",
            "#2ecc71",
            "#e74c3c",
            "#9b59b6",
            "#1abc9c",
              ],
              borderWidth: 1,
            }]
          },
          options: {
            title: {
              display: true,
              text: "Average Sleep Hours per Night",
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

    </script>
</body>
</html>