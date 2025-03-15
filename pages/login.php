<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8" >
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "../stylesheets/loginstyle.css">
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>Login Page</title>
    </head>
    <body>
        <div id = "container">
            <div id = "window">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use the site</p>
                <button onclick = "move()">Sign-up</button>
            </div>
            <div id = "card2" class = "card">
                <div id = "sign-in">
                    <form id = "sign-in-form"> 
                        <h1>Sign in</h1>
                        <div class = "loginOpt">
                            <a href = "#" class = "icon"><i class="fa-brands fa-google"></i></a>
                            <a href = "#" class = "icon"><i class="fa-brands fa-facebook"></i></a>
                            <a href = "#" class = "icon"><i class="fa-brands fa-github"></i></a>
                            <a href = "#" class = "icon"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <p>Or use your email and password</p>
                        <input type = "text" id = "logEmail" placeholder = "Enter your Email">
                        <input type = "password" id = "logPassword" placeholder = "Enter your password">
                        <button type = "submit" >submit </button>
                    </form>
                </div>
                <div id = "sign-up">
                    <form id = "sign-up-form"> 
                        <h1>Sign up</h1>
                        <div class = "loginOpt">
                            <a href = "#" class = "icon"><i class="fa-brands fa-google"></i></a>
                            <a href = "#" class = "icon"><i class="fa-brands fa-facebook"></i></a>
                            <a href = "#" class = "icon"><i class="fa-brands fa-github"></i></a>
                            <a href = "#" class = "icon"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <p>Or enter the following credentials.</p>
                        <input type = "text" id = "regName" placeholder = "Enter your name">
                        <input type = "text" id = "regEmail" placeholder = "Enter your Email">
                        <input type = "password" id = "regPassword" placeholder = "Enter your password">
                        <button onclick = "submitt()" type = "button">submit</button>
                    </form>
                </div>                
            </div>
        </div>
    </body>
    <script>
        function move(){
            win = document.getElementById("window");
            head = win.querySelector("h1");
            para = win.querySelector("p");
            cli = win.querySelector("button");
            win.classList.toggle("move-left");
            if(win.classList.contains("move-left")){
                head.textContent = "Join Us!";
                para.textContent = "Enter your personal details to register the site";
                cli.textContent = "Sign-in";
                win.style.borderTopLeftRadius = "0";
                win.style.borderBottomLeftRadius = "0";
                win.style.borderTopRightRadius = "30%";
                win.style.borderBottomRightRadius = "30%";
            }else{
                head.textContent = "Welcome Back!";
                para.textContent = "Enter your email and password to login the site"
                cli.textContent = "Sign-up";
                win.style.borderTopLeftRadius = "30%";
                win.style.borderBottomLeftRadius = "30%";
                win.style.borderTopRightRadius = "0";
                win.style.borderBottomRightRadius = "0";
            }
        }
        function submitt(){
            alert("Registration successfull.you can login now");
            move();
        }
        
    </script>
</html>
