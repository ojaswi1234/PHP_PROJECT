<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
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
        height: 36px;
        color: #f5f5f5;
        background-color: #2c3e50;
        padding: 14px;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
    #main-nav {
        width: 100%;
        height: 90%;
        margin-left: 15%;
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
        color: #ecf0f1;
        background-color: transparent;
        cursor: pointer;
        transition: 0.6s;
        font-family: "Poppins", sans-serif;
        text-decoration: none;
        position: relative;
    }

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
        background-color: white;
        transform-origin: bottom right;
        transition: transform 0.25s ease-in-out;
    }

    #main-nav > #button-2:hover::after,
    #main-nav > #button-4:hover::after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    #main-nav > #button-5, #main-nav > #button-1 {
        color: #2c3e50;
        background-color: #ecf0f1;
        font-weight: bold;
    }

    #main-nav > #button-5:hover, #main-nav > #button-1:hover {
        color: #ecf0f1;
        background-color: #2c3e50;
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

    @media only screen and (max-width: 767px) {
    video {
        visibility: hidden;
    }

    header {
        width: fit-content;
        display: flex;
        align-items: center;
       
    }

    #main-nav, #auth-div {
        visibility: hidden;
    }


    header > #mobile-nav {
        visibility: collapse;
        background-color: #ecf0f1;
        transform: translateX(-400%);
    }
    }
    main {
        width: 95%;
        height: 100%;
        background-color: rgb(229, 233, 233);
        margin-top: 2%;
        display: flex;
        justify-self: center;
        flex-direction: column;
        padding: 10px;
        border-radius: 20px;
    }

</style>
<body>
<header style="background-color: #2c3e50; position: sticky; top: 0; z-index: 1000;">
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
        <button>MENU<svg aria-hidden="true" data-prefix="fal" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-7x"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z" class=""></path></svg></button>
    </nav>
</header>
<main>
</main>
</body>
</html>
