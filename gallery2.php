<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.css">
    <link rel="shortcut icon" type="image/ico" href="robs_icon.ico">
    <title>Robert Leslie | Slideshow</title>
</head>

<body>
    <?php $page = "slides"; ?>
    <?php include('include/header.php') ?>

    <?php include('include/nav.php') ?>

    <main>
        <div class="selector">
            <button onclick="window.location.href = 'gallery.php'" class="gallerybtn"><i
                    class="fas fa-th fa-lg"></i></button>
            <button onclick="window.location.href = 'gallery2.php'" class="gallerybtn"><i
                    class="fas fa-caret-square-o-right fa-lg"></i></button>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="owlitem"><img src="images/img20.JPG" alt="Lily and Bella"></div>
            <div class="owlitem"><img src="images/img21.JPG" alt="Charlie"></div>
            <div class="owlitem"><img src="images/img27.jpg" alt="Captain and Natasha"></div>
        </div>

    </main>

    <?php include('include/footer.php') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="js/carousel.js"></script>
</body>

</html>