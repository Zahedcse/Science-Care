<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Trainer</title>
</head>

<body>
    <?php include('nav.php') ?>
    
    <div class="card">
        <h1>Add Trainer</h1>
        <form action=" functions/add_trainer.php" method="post">
            <label for="Trainer">Trainer Name</label>
            <input type="text" name="t_name"  placeholder="Enter Trainer Name"><br>
                <br>
            <label for="email">Trainer Email</label>
            <input type="email" name="t_email"  placeholder="Enter Email"><br>
                <br>
            <label for="phone">Trainer Phone</label>
            <input type="number" name="t_phone" placeholder="Enter Phone"><br>
                    <br>
            <label for="address">Trainer Address</label>
            <input type="text" name="t_address"  placeholder="Enter Address"><br>
                    <br>

            <input class="button" type="submit" value="Add Trainer">
        </form>
    </div>
</body>

</html>