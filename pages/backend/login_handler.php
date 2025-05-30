<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = $_POST['username'];
    $password = $_POST['password']; 
   
    $_SESSION['mysql_username'] = $username;
    $_SESSION['mysql_password'] = $password;
    $_SESSION['session_created_at'] = time();
    
    $con = @mysqli_connect($servername, $username, $password);

    if (!$con) {
        $_SESSION['login_error'] = "Connection failed: Invalid username or " . ($password === '' ? "empty password." : "password.");
        header("Location: ../login.php");
        exit();
    }

  
    $create_db_query = "CREATE DATABASE IF NOT EXISTS `sleep_tracker`";
    if (!mysqli_query($con, $create_db_query)) {
        $_SESSION['login_error'] = "Error creating database: " . mysqli_error($con);
        mysqli_close($con);
        header("Location: ../login.php");
        exit();
    }


    if (!mysqli_select_db($con, "sleep_tracker")) {
        $_SESSION['login_error'] = "Error selecting database: " . mysqli_error($con);
        mysqli_close($con);
        header("Location: ../login.php");
        exit();
    }

    $create_table_query = "
        CREATE TABLE IF NOT EXISTS sleep_tracker (
            id INT AUTO_INCREMENT PRIMARY KEY,
            day VARCHAR(10) NOT NULL UNIQUE,
            sleep_time TIME NOT NULL,
            wake_time TIME NOT NULL
        )
    ";
    if (!mysqli_query($con, $create_table_query)) {
        $_SESSION['login_error'] = "Error creating table: " . mysqli_error($con);
        mysqli_close($con);
        header("Location: ../login.php");
        exit();
    }

    mysqli_close($con);
    header("Location: ../tracker.php");
    exit();
}
?>