<?php
session_start(); // Start the session to set session variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sleep_tracker";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $sleep_time = $_POST['sleep-time'];
    $wake_time = $_POST['wakeup-time'];
    $day = $_POST['day'];

    function convertTo24Hour($time) {
        return date("H:i", strtotime($time));
    }

    $t1 = convertTo24Hour($sleep_time);
    $t2 = convertTo24Hour($wake_time);

    $sql = "INSERT INTO `sleep_tracker` (`day`, `sleep_time`, `wake_time`) VALUES ('$day', '$t1', '$t2')";

    
    if($con->query($sql) === TRUE){

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Check if the day is Sunday
    if ($day == 'Sunday') {
        // Calculate average sleeping hours for the week
        $result = $con->query("SELECT sleep_time, wake_time FROM sleep_tracker");
        $total_sleep_hours = 0;
        $count = 0;

        while ($row = $result->fetch_assoc()) {
            $sleep_time = strtotime($row['sleep_time']);
            $wake_time = strtotime($row['wake_time']);
            $sleep_hours = ( $sleep_time - $wake_time) / 3600; // Convert seconds to hours
            $total_sleep_hours += $sleep_hours;
            $count++;
        }

        

        $average_sleep_hours = $total_sleep_hours / $count;

        $_SESSION['average_sleep_hours'] = $average_sleep_hours;

        $_SESSION['sleep_hours'] = $sleep_time_slot;

        header("Location: ../results.php");
        exit();
    }

   
}

mysqli_close($con);
?>