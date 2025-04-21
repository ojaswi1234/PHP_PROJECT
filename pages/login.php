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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            width: 100%;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e3a8a 0%, #6b21a8 100%);
            overflow: hidden;
        }

        #login-div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            position: relative;
        }

        #login-form {
            width: 100%;
            max-width: 420px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
            transition: transform 0.3s ease;
        }

        #login-form:hover {
            transform: translateY(-5px);
        }

        #login-form > h1 {
            font-size: 2.2rem;
            font-weight: 600;
            color: #ffffff;
            text-align: center;
            background: linear-gradient(to right, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #login-form > label {
            font-size: 1rem;
            font-weight: 400;
            color: #e2e8f0;
            width: 100%;
            position: relative;
        }

        #login-form > input {
            width: 100%;
            height: 45px;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.15);
            padding: 0 15px;
            font-size: 1rem;
            color: #ffffff;
            outline: none;
            transition: all 0.3s ease;
        }

        #login-form > input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        #login-form > input:focus {
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 0 10px rgba(96, 165, 250, 0.5);
        }

        #login-form > input[type="submit"] {
            width: 120px;
            height: 45px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            border: none;
            border-radius: 25px;
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        #login-form > input[type="submit"]:hover {
            background: linear-gradient(90deg, #2563eb, #7c3aed);
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
            transform: scale(1.05);
        }

        #login-form > input[type="submit"]::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        #login-form > input[type="submit"]:hover::before {
            width: 200px;
            height: 200px;
        }

        #error {
            color: #f87171;
            font-size: 0.9rem;
            text-align: center;
            background: rgba(255, 75, 75, 0.1);
            padding: 8px;
            border-radius: 5px;
            width: 100%;
        }

       

      
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

      
        @media (max-width: 480px) {
            #login-form {
                width: 90%;
                padding: 30px;
            }

            #login-form > h1 {
                font-size: 1.8rem;
            }

            #login-form > input {
                height: 40px;
            }

            #login-form > input[type="submit"] {
                width: 100px;
            }
        }
    </style>
</head>
<body>
    <div id="login-div">
        <form method="post" action="../pages/backend/login_handler.php" id="login-form">
            <h1>SleepSense Login</h1>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username..." required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password...">
            <input type="submit" value="Login">
            <?php
            if (isset($_SESSION['login_error'])) {
                echo "<p id='error'>" . htmlspecialchars($_SESSION['login_error']) . "</p>";
                unset($_SESSION['login_error']);
            }
            ?>
           
        </form>
    </div>
    <div class="particles">
        <div class="particle" style="width: 10px; height: 10px; top: 10%; left: 20%; animation-delay: 0s;"></div>
        <div class="particle" style="width: 8px; height: 8px; top: 30%; left: 70%; animation-delay: 2s;"></div>
        <div class="particle" style="width: 12px; height: 12px; top: 50%; left: 10%; animation-delay: 4s;"></div>
        <div class="particle" style="width: 6px; height: 6px; top: 70%; left: 80%; animation-delay: 6s;"></div>
        <div class="particle" style="width: 9px; height: 9px; top: 20%; left: 50%; animation-delay: 8s;"></div>
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

        // Optional: Fade-in animation for form
        window.addEventListener('load', () => {
            const form = document.getElementById('login-form');
            form.style.opacity = '0';
            form.style.transform = 'translateY(20px)';
            setTimeout(() => {
                form.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                form.style.opacity = '1';
                form.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>