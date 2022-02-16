<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Student</title>
</head>

<body>
    <?php include('nav.php') ?>


    <div class="card">
        <h1>Add Student</h1>
        <form action="functions/add_students.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name"><br>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email"><br>
            <br>
            <label for="phone">Phone</label>
            <input type="number" name="phone" placeholder="Enter Phone"><br>
            <br>
            <label for="address">Address</label>
            <input type="text" name="address" placeholder="Enter Address"><br>
            <br>
            <label for="course">Course</label>
            <select class="input" name="s_course" id="">
                <option class="input" value="Select one" selected>Select one</option>
                <?php
        $conn = mysqli_connect('localhost', 'root', '', 'studentcare');
        $sql = "SELECT * FROM course";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
            ?>



                <option
                    value="<?php echo $data['c_id']; ?>">
                    <?php echo $data['c_name'] ?>
                </option>
                <?php
        } ?>

            </select>
            <br>
            <br>
            <label class="label" for="duration">Duration</label>
            <input class="input" type="text" name="duration" placeholder="Enter Duration"><br>

            <input class="button" type="submit" value="Add Student">
        </form>
    </div>

</body>

</html>