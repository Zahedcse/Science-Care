<?php

    $trainer_name = $_POST['t_name'];
    $trainer_email = $_POST['t_email'];
    $trainer_phone = $_POST['t_phone'];
    $trainer_address = $_POST['t_address'];

    $sql = "INSERT INTO trainer (t_name, t_email, t_phone, t_address) VALUES
     ('$trainer_name', '$trainer_email', $trainer_phone, '$trainer_address')";

     $conn = mysqli_connect('localhost', 'root', '', 'studentcare') or die(mysqli_error($conn));

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header('location: http://localhost/Science%20Care/alltrainer.php');
