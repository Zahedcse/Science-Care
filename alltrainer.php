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

    <h1>All trainer</h1>
    <?php
                $conn = Mysqli_connect('localhost', 'root', '', 'studentcare');
                $sql = "SELECT * FROM trainer";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>

        <tbody>
            <?php
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
            <tr>
                <td><?php echo $data['t_id']; ?>
                </td>
                <td><?php echo $data['t_name']; ?>
                </td>
                <td><?php echo $data['t_email']; ?>
                </td>
                <td><?php echo $data['t_phone']; ?>
                </td>
                <td><?php echo $data['t_address']; ?>
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