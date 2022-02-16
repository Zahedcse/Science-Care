<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Course</title>
</head>

<body>
    <?php include('nav.php') ?>

    <div class="card">
        <h1>Add Course</h1>
        <form action="functions/add_course.php" method="post">
            <label for="Course">Course Name</label>
            <input type="text" name="c_name" placeholder="Enter Course Name"><br>
            <br>
            <label for="price">Course Price</label>
            <input type="number" name="c_price" placeholder="Enter Course Price"><br>
            <br>
            <label for="duration">Course Duration</label>
            <input type="number" name="c_duration" placeholder="Enter Phone"><br>
            <br>
            <label for="trainer">Course Trainer</label>
            <select class="input" name="c_trainer" id="">
                <option class="input" value="Select one" selected>Select one</option>
                <?php
                    $sql = "SELECT * FROM trainer";
                    $conn = mysqli_connect("localhost", "root", "", "studentcare");
                    $result = mysqli_query($conn, $sql);
                     while ($trainer = mysqli_fetch_assoc($result)) {
                         ?>

                <option
                    value="<?php echo $trainer['t_id'] ?>">
                    <?php echo $trainer['t_name'] ?>
                </option>
                <?php
                     } ?>
            </select>
            <br>

            <input class="button" type="submit" value="Add Course">
        </form>
    </div>
</body>

</html>