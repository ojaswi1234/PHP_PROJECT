
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
    color: #2c3e50;
    background-color: #ecf0f1;
    font-weight: bold;
}

#main-nav > #button-5:hover {
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


#tracker-div{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 5%;
}

#tracker-form {
    display: block;
    gap: 5px;
    border: 2px solid #2c3e50;
    padding: 52px;
    box-shadow: 7px 7px 0 #2c3e50; 
}
#tracker-form > h1{
    font-family: "gilroy", sans-serif;
    font-size: 3rem;
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
}

#tracker-form > input[type="submit"]:hover{
    background-color: white;
    color: #2c3e50;
    border: 1px solid #2c3e50;
    transition: 0.3s ease-in-out;
    outline: none;
}

#tracker-form > select{
    padding: 10px;
    border-radius: 5px;
}

#tracker-form > select:hover, #tracker-form > select:focus{
    background-color: #2c3e50;
    color: white;
    cursor: pointer;
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
            <button>MENU<svg aria-hidden="true" data-prefix="fal" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-7x"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z" class=""></path></svg></button>
        </nav>
    </header>
    <div id="tracker-div">
       
        <form method="post" action="" id="tracker-form">
        <h1> Enter your <span style="-webkit-text-stroke: 2.5px black;  color: transparent; font-size: 3.5rem;">Sleep</span> Time </h1>
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