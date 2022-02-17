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
    <h1>Welcome To Science Care</h1>

    <!-- Nav Bar -->

    <?php include('nav.php') ?>

    <!-- End Nav Bar -->


    <?php
                $conn = mysqli_connect('localhost', 'root', '', 'studentcare');
                $sql = "SELECT * FROM students INNER JOIN course ON course.c_trainer = students.s_id
                INNER JOIN trainer ON trainer.t_id = students.s_trainer";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    ?>


    <table >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Course</th>
            <th>Trainer</th>
            <th>Duration</th>
            <th>Action</th>
        </tr>

        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) {
                        ?>
            <tr>
                <td><?php echo $data['s_id']; ?>
                </td>
                <td><?php echo $data['s_name']; ?>
                </td>
                <td><?php echo $data['s_email']; ?>
                </td>
                <td><?php echo $data['s_phone']; ?>
                </td>
                <td><?php echo $data['s_address']; ?>
                </td>
                <td><?php echo $data['c_name']; ?>
                </td>
                <td><?php echo $data['t_name']; ?>
                </td>
                <td><?php echo $data['s_duration']; ?>
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
                }?>

</body>

</html>