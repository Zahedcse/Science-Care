<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Science Care</title>
</head>

<body>
    <!-- Nav Bar -->

    <?php include('nav.php') ?>

    <!-- End Nav Bar -->
    <h1>All Course</h1>

    <?php
            $conn = mysqli_connect('localhost', 'root', '', 'studentcare');
            $sql = "SELECT * FROM course INNER JOIN trainer ON course.c_trainer = trainer.t_id  order by c_id asc";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                ?>

    <table>
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Course price</th>
            <th>Course Trainer</th>
            <th>Course Duration</th>
            <th>Action</th>
        </tr>

        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
            <tr>
                <td><?php echo $data['c_id'] ?>
                </td>
                <td><?php echo $data['c_name'] ?>
                </td>
                <td><?php echo $data['c_price'] ?>
                </td>
                <td><?php echo $data['t_name'] ?>
                </td>
                <td><?php echo $data['c_duration'] ?>
                </td>
                <td>
                    <a class="btn" href="edit_student.php">Edit</a>
                    <a class="btn" href="delete_student.php">Delete</a>
                </td>
            </tr>
            <?php
            } ?>
        </tbody>
    </table>
    <?php
            } ?>

</body>

</html>