<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleepSense Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');  
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:rgb(224, 240, 249);
        }
        #login-div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #login-form {
            width: 400px;
            padding: 44px;
            border: 1px solid #2c3e50;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
            background-color: #ecf0f1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 0.3s ease-in-out;

            
        }
        #login-form > h1 {
            font-size: 2rem;
            color: #2c3e50;
            text-align: center;
        }
        #login-form > label {
            font-size: 1.2rem;
            color: #2c3e50;
            width: 100%;
        }
        #login-form > input {
            width: 100%;
            height: 30px;
            border-radius: 5px;
            border: 1px solid #2c3e50;
            padding: 5px;
            font-size: 1rem;
            outline: none;
        }
        #login-form > input[type="submit"] {
            width: 100px;
            height: 40px;
            background-color: #2c3e50;
            color: #ecf0f1;
            cursor: pointer;
            border: none;
            transition: 0.3s ease-in-out;
        }
        #login-form > input[type="submit"]:hover {
            background-color: #ecf0f1;
            color: #2c3e50;
            border: 1px solid #2c3e50;
        }
        #error {
            color: red;
            font-size: 1rem;
            text-align: center;
        }
        #warning {
            color: #e67e22;
            font-size: 0.9rem;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div id="login-div">
        <form method="post" action="../pages/backend/login_handler.php" id="login-form">
            <h1><mark style="padding: 7px; background-color:  #2c3e50; color: white;">SleepSense</mark> Login</h1>
            <label for="username">MySQL Username</label>
            <input type="text" id="username" name="username" placefolder="Enter your MYSQL username....." required>
            <label for="password">MySQL Password</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Login">
            <?php
            if (isset($_SESSION['login_error'])) {
                echo "<p id='error'>" . htmlspecialchars($_SESSION['login_error']) . "</p>";
                unset($_SESSION['login_error']);
            }
            ?>
            
        </form>
    </div>
    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            if (password === '') {
                if (!confirm('You entered an empty password. This is insecure. Continue?')) {
                    e.preventDefault();
                }
            }
        });
    </script>
</body>
</html>