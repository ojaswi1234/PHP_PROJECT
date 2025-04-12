<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Login Page</title>
</head>
<style>
    *{
    margin : 0;
    padding : 0;
    box-sizing : border-box;
    font-family : sans-serif;
}

html,body{
    height : 100%;
    width : 100%;
    background : linear-gradient(to right,#e2e2e2,#c9d6ff);
    display : flex;
    justify-content : center;
    align-items : center;
}

#container{
    height : 60%;
    width : 60%;
    background-color : red;
    border-radius : 30px;
    overflow : hidden;
    position : relative;    
}

#card2{
    z-index : 0;
    background-color : white;
    overflow : hidden;
    position : absolute;
    height : 100%;
    width : 100%;
    display : flex;
    flex-direction : row;
}

#window{
    z-index :1;
    height : 100%;
    width : 50%;
    background-color : black;
    position : absolute;
    right : 0;
    overflow : hidden;
    display :  flex;
    flex-direction : column;
    align-items : center;
    justify-content :center;
    border-top-left-radius :  30%;
    border-bottom-left-radius : 30%;
    border-top-right-radius : 0%;
    border-bottom-right-radius : 0%;
    gap : 15px;
    transition :  all 0.4s ease-in-out;
}
h1{
    font-size : 50px;
}
p{
    font-size : 15px;
    color : grey;
}
#window h1{
    color : white;
}

#window p{
    color : white;
    font-size : 14px;
}
#window button{
    margin-top : 5px;
    padding-top : 12px;
    padding-bottom : 12px;
    padding-left : 50px;
    padding-right : 50px;
    border-radius : 15px;
    background-color : black;
    border : 2px solid white;
    color : white;
    font-size : 15px;
}

#sign-in{
    height : 100%;
    width : 50%;
}
#sign-up{
    height : 100%;
    width : 50%;
}

#sign-in-form{
    height : 100%;
    width : 100%;
    display : flex;
    flex-direction : column;
    align-items : center;
    justify-content : center;
    gap : 10px;
}
#sign-up-form{
    height : 100%;
    width : 100%;
    display : flex;
    flex-direction : column;
    align-items : center;
    justify-content : center;
    gap : 10px;
}
button{
    margin-top : 10px;
    font-size : 18px;
    padding-top: 10px;
    padding-bottom : 10px;
    padding-left : 50px;
    padding-right : 50px;
    background-color : white;
    color : black;
    border : 2px solid black;
    border-radius : 15px;
    font-weight : 700;
    
}


input{
    height : 9%;
    width : 75%;
    text-align : center;
    border-radius : 7px;
    box-sizing : border-box;
}

.icon i{
    color : black;
    font-size : 20px;
    padding : 7px;
    border : 3px solid black;
    border-radius : 7px;
    margin : 5px;
}




.move-left{
    transform : translateX(-100%);
}

@media (max-width: 727px) {
    #sign-in{
        width : 100%;
        
    }
    #window {
        visibility: hidden;
    }
    #sign-up{
        display : none;
    }
}

</style>
<body>
    <div id="container">
        <div id="window">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use the site</p>
            <button id="toggleButton">Sign-up</button>
        </div>
        <div id="card2" class="card">
            <div id="sign-in">
                <form id="sign-in-form"> 
                    <h1>Sign in</h1>
                    
                   
                    <input type="email" id="logEmail" placeholder="Enter your Email" required>
                    <input type="password" id="logPassword" placeholder="Enter your password" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div id="sign-up">
                <form id="sign-up-form"> 
                    <h1>Sign up</h1>
                   
                   
                    <input type="text" id="regName" placeholder="Enter your name" required>
                    <input type="email" id="regEmail" placeholder="Enter your Email" required>
                    <input type="password" id="regPassword" placeholder="Enter your password" required>
                    <button type="submit">Submit</button>
                </form>
            </div>                
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const signInForm = document.getElementById('sign-in-form');
    const signUpForm = document.getElementById('sign-up-form');
    const toggleButton = document.getElementById('toggleButton');
    const signIn = document.getElementById('sign-in');
    const signUp = document.getElementById('sign-up');

    // Get redirect URL from query parameter
    const urlParams = new URLSearchParams(window.location.search);
    const redirectUrl = urlParams.get('redirect') || '../pages/tracker.php';

    // Toggle between sign-in and sign-up forms
    toggleButton.addEventListener('click', function() {
        if (signIn.style.display === 'none') {
            signIn.style.display = 'block';
            signUp.style.display = 'none';
            toggleButton.textContent = 'Sign-up';
        } else {
            signIn.style.display = 'none';
            signUp.style.display = 'block';
            toggleButton.textContent = 'Sign-in';
        }
    });

    // Handle sign-in form submission
    signInForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const email = document.getElementById('logEmail').value;
        const password = document.getElementById('logPassword').value;

        try {
            const response = await fetch('login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email, password })
            });

            const data = await response.json();
            console.log('Login response:', data); // Debug log
            
            if (data.success) {
                alert('Login successful!');
                // Use the redirect URL from the server response or fallback to main.php
                const redirectUrl = data.redirect || '../pages/tracker.php';
                window.location.href = redirectUrl;
            } else {
                alert(data.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred during login');
        }
    });

    // Handle sign-up form submission
    signUpForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const name = document.getElementById('regName').value;
        const email = document.getElementById('regEmail').value;
        const password = document.getElementById('regPassword').value;

        try {
            const response = await fetch('register.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ name, email, password })
            });

            const data = await response.json();
            
            if (data.success) {
                alert('Registration successful! Please login.');
                // Switch to sign-in form
                signIn.style.display = 'block';
                signUp.style.display = 'none';
                toggleButton.textContent = 'Sign-up';
            } else {
                alert(data.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred during registration');
        }
    });
});
    </script>
</body>
</html>