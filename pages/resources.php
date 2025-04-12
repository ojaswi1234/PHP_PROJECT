<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body, html {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    scrollbar-width: none;
}
main {
    width: 100%;
    height: 100%;
    background: transparent;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
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
#main-nav > #button-4:hover{
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
}

#main-nav > #button-5:hover {
    color: white;
    background-color: transparent;
    font-weight: bolder;
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
@media (max-width: 1400px){

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
    #menuToggle{
        display: block;
        position: absolute;
        top: 50%;
        right: -2px;
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
}


@media (max-width: 727px) {
   video{
        filter: invert(1) sepia(100%) saturate(500%) hue-rotate(180deg);
    }
    header {
      width: fit-content;
      position: sticky;
      align-items: center;
    }
    #main-nav { visibility: hidden; }

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
    #cover-image{
      scale: 100%;
    }
    #div-1 {

      display: flex;
      flex-direction: column;
      justify-content: center;
      padding-bottom: 10px;
    }
    aside {
      width: 80%;
      height: 80%;
    }
    #main-title {
      font-size: 1.5rem;
      padding: 32px;
      transform: translateX(5%);
      font-weight: 500;
    }
    #main-title > b {
      font-size: 3rem;
    }
    #boldy-3 {
      text-decoration: underline;
      text-underline-offset: 5px;
    }
    #div2 { width: 50%; }
    #p-1 { padding: 32px; }
    #div-2-1 {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
    }
    #div-2-1 > #myChart, #div-2-1 > #myChart2 {
      width: 100%;
      max-width: 320px;
      min-height: 220px;
      background-color: #F8F9FA;
      border-radius: 10px;
      padding: 32px;
    }
    #div-3 {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: white;
    }
    #aside-2 { visibility: hidden; }
    #aside-3 {
      width: 100%;
      max-width: 500px;
      transform: translateX(-70%);
    }
    #aside-3 > #h-3 { font-size: 2rem; }
    #aside-3 > #p-2 { font-size: 1rem; }

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
  }
  #hero-img {
    background-color: #F8F9FA;
    border-radius: 100%;
}
</style>
<body>
<header style="position: sticky; top: 0; z-index: 1000;">
        <div id="logo">
        <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" width="40" height="40" id="hero-img" alt="">
            <a href="../pages/main.php" style="text-decoration: none;
    color: white;"> SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="../pages/about.php" id="button-1">About Sleep<span></span></a>
            <a href="#" id="button-2">Resources<span></span></a>

          
            <a href="../pages/tracker.php" id="button-5">Get Started</a>
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
                
                <li><label for="menuBox"><a href="../pages/tracker.php">Get Started</a></label></li>
              </ul>
           </div>
        </nav>

    </header>
    <main>
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