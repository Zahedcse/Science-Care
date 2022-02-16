<?php

    $course_name = $_POST['c_name'];
    $course_price = $_POST['c_price'];
    $course_duration = $_POST['c_duration'];
    $course_trainer = $_POST['c_trainer'];

    $sql = "INSERT INTO course (c_name, c_price, c_duration, c_trainer) VALUES
     ('$course_name', '$course_price', $course_duration, $course_trainer)";

     $conn = mysqli_connect('localhost', 'root', '', 'studentcare') or die(mysqli_error($conn));

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
header('location: http://localhost/Science%20Care/allcourse.php');
