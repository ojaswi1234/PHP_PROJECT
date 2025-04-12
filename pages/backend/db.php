<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sleep_tracker";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sleep_time = $_POST['sleep-time'];
    $wake_time = $_POST['wakeup-time'];
    $day = $_POST['day'];

    // Check for duplicate day
    $check_query = "SELECT COUNT(*) as count FROM sleep_tracker WHERE day = '$day'";
    $check_result = $con->query($check_query);
    $row = $check_result->fetch_assoc();
    
    if ($row['count'] > 0) {
        echo "Error: Data for $day already exists.";
        mysqli_close($con);
        exit();
    }

    
    function convertTo24Hour($time) {
        return date("H:i", strtotime($time));
    }

    $t1 = convertTo24Hour($sleep_time);
    $t2 = convertTo24Hour($wake_time);

   
    $sql = "INSERT INTO `sleep_tracker` (`day`, `sleep_time`, `wake_time`) VALUES ('$day', '$t1', '$t2')";

    if (!$con->query($sql)) {
        echo "Error: " . $sql . "<br>" . $con->error;
        mysqli_close($con);
        exit();
    }


    $count_query = "SELECT COUNT(*) as total FROM sleep_tracker";
    $count_result = $con->query($count_query);
    $count_row = $count_result->fetch_assoc();

    if ($count_row['total'] > 7) {
        
        $delete_query = "DELETE FROM sleep_tracker WHERE id = (SELECT MIN(id) FROM sleep_tracker)";
        $con->query($delete_query);
    }

    // Calculate results if Sunday is submitted
    if ($day == 'Sunday') {
        $result = $con->query("SELECT day, sleep_time, wake_time FROM sleep_tracker");
        $total_sleep_hours = 0;
        $daywise_hours = array_fill_keys(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], 0);

        while ($row = $result->fetch_assoc()) {
            $sleep_time = strtotime($row['sleep_time']);
            $wake_time = strtotime($row['wake_time']);

            if ($wake_time < $sleep_time) {
                $wake_time += 24 * 3600;
            }

            $sleep_hours = ($wake_time - $sleep_time) / 3600;
            $total_sleep_hours += $sleep_hours;

            $daywise_hours[$row['day']] += $sleep_hours;
        }

        $non_zero_days = count(array_filter($daywise_hours, fn($hours) => $hours > 0));
        $average_sleep_hours = $non_zero_days > 0 ? $total_sleep_hours / $non_zero_days : 0;

        $_SESSION['average_sleep_hours'] = $average_sleep_hours;
        $_SESSION['daywise_hours'] = $daywise_hours;

        header("Location: ../results.php");
        exit();
    } else {
        header("Location: ../tracker.php");
    }
}

mysqli_close($con);
?>