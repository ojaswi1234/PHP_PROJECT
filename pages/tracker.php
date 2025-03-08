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
}

header {
    width: 100%;
    height: 36px;
    color: #f5f5f5;
    background-color: #0D1B2A;
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
        background-color: white;
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


#tracker-div{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 5%;
}

#tracker-form > h1{
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

#tracker-form > input[type="submit"]:hover{
    background-color: white;
    color: #2c3e50;
    border: 1px solid #2c3e50;
    transition: 0.3s ease-in-out;
    outline: none;
}

#tracker-form > select{
    width: 510px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #2c3e50;
}

#tracker-form > select:hover, #tracker-form > select:focus{
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
    border: 4px solid  #2c3e50;
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;;
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
    background-color:  #2c3e50;
    top: -9px;
    left: 50%;
    transform: translateX(-50%);
    transition: width 0.5s, height 0.5s 0.5s;
    box-sizing: border-box;
    transition: width 0.5s, height 0.5s 0.5s;
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
    padding:5px;
}

@media only screen and  (max-width: 727px) {
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
    background-color:  #2c3e50;
    top: -9px;
    left: 50%;
    transform: translateX(-50%);
    transition: width 0.5s, height 0.5s 0.5s;
    box-sizing: border-box;
    transition: width 0.5s, height 0.5s 0.5s;
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

    header {
      width: fit-content;
      position: sticky;
      align-items: center;
    }
    #main-nav { 
      visibility: hidden; 
    }
    #tracker-div{
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
    #tracker-form > input{
      width: 80%;
    }
    #tracker-form > select {
        width: 83%;
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
  }
</style>
<body>
        <header style="background-color: #2c3e50; position: sticky; top: 0; z-index: 1000;">
        <div id="logo">
        <img src="../public/modern_circular_icon_for_SleepSense_with_black__gray__and_white_colors-removebg-preview.png" width="40" height="40" id="hero-img" alt="" style="background-color:white; border-radius: 100%;">
            <a> SLEEPSENSE</a>
        </div>
        <nav id="main-nav">
            <a href="../pages/about.php" id="button-1" >About Sleep<span></span></a>
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

    <div id="tracker-div">
       
        <form method="post" action="" id="tracker-form">
        <h1> Enter your <span id="span1">Sleep Time</span> </h1>
            <label for="sleep_time">Sleep Time</label>
            <input type="time" id="sleep-time" name="sleep-time" required>
            <br><br>
            <label for="wake_time">Wake Time</label>
            <input type="time" format="24hour" id="wakeup-time" name="wakeup-time" required>
            <br><br>
            <select name="day">
                <option>Monday</option>
                <option>Tuesday</option>
                <option>Wednesday</option>
                <option>Thursday</option>
                <option>Friday</option>
                <option>Saturday</option>
                <option>Sunday</option>
            </select>
            <br><br>
            <input type="submit" value="Submit" onclick="alert('Your sleep time has been recorded!')">
        </form>
        </div>
</main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sleepTime = $_POST['sleep-time'];
        $wakeTime = $_POST['wakeup-time'];
        $day = $_POST['day'];
        echo "<p>Your sleep time has been recorded for $day. Sleep Time: $sleepTime, Wake Time: $wakeTime</p>";
    }
    ?>
</body>
</html>