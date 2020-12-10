<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css"> -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/ico" href="robs_icon.ico">
    <title>Robert Leslie  | Contact</title>
</head>

<body>
<?php $page = "contact"; ?>
    <?php include('include/header.php') ?>

    <?php include('include/nav.php') ?>

    <main class='aboutMain'>
        <div class="container aboutInfo">
            <form class="contactForm" action="contactMe.php" method="POST" autocomplete="on">
                <div class="md-form mt-3">
                    <label class="bmd-label-floating" for="name">Name</label> <br>
                    <input class="form-control" type="text" name="name" id="name"> <br>
                </div>
                <div class="md-form mt-3">
                    <label class="bmd-label-floating" for="phone">Phone</label> <br>
                    <input class="form-control" type="text" name="phone" id="phone"> <br>
                </div>
                <div class="md-form mt-3">
                    <label class="bmd-label-floating" for="email">Email</label> <br>
                    <input class="form-control" type="email" name="email" id="email">
                    <!-- <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="md-form mt-3">
                    <label for="message">Write Message</label> <br>
                    <textarea class="form-control" name="message" id="message" cols="50" rows="10"></textarea> <br>
                </div>
                <input class="btn btn-primary" type="submit" value="Send Message"> <br>

            </form>
        </div>
    </main>
    
    <?php include('include/footer.php') ?>

    <script src="js/contact_validator.js"></script>
</body>

</html>