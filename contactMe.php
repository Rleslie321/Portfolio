<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="shortcut icon" type="image/ico" href="robs_icon.ico">
    <title>Robert Leslie | Thank you</title>
</head>
<body>
    <?php $page = ""; ?>
    
    <?php include('include/header.php') ?>

    <?php include('include/nav.php') ?>

    <main class="contactMe-content">
            <?php
                include('include/config.php');

                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $sql = "INSERT INTO review(name, phone, email, message) values('$name', '$phone', '$email', '$message')";

                if(!mysqli_query($con, $sql)){
                    echo "Message not added";
                }
            ?>
            <h1 class="aboutInfo">Thank you for contacting me, <?php echo "$name"; ?>!</h1>
            <!-- <h1 class="aboutInfo">Thank you for contacting me, Francis</h1> -->
            <img src="images/cat.gif" alt="cat typing">  
    </main>
    
    <?php include('include/footer.php') ?>

</body>
</html>