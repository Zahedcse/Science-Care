<?php
    $stu_name = $_POST['name'];
    $stu_email = $_POST['email'];
    $stu_phone = $_POST['phone'];
    $stu_address = $_POST['address'];
    $stu_course = $_POST['s_course'];
    $stu_duration = $_POST['duration'];

    $conn = mysqli_connect('localhost', 'root', '', 'studentcare');
    $fetch = "SELECT * FROM course WHERE c_id = $stu_course";
    $result = mysqli_query($conn, $fetch);
    $data = mysqli_fetch_assoc($result);
    $s_trainer = $data['c_trainer'];


    $sql = "INSERT INTO students (s_name, s_email, s_phone, s_address, s_course, s_trainer, s_duration) VALUES 
    ('$stu_name', '$stu_email', $stu_phone, '$stu_address', $stu_course,$s_trainer, $stu_duration)";
    $result = mysqli_query($conn, $sql) or die(mysqli_error());
    if ($result) {
        echo "Student Added Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    // header("location: http://localhost/Science%20Care/home.php");
