<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="shortcut icon" type="image/ico" href="robs_icon.ico">
    <title>Robert Leslie  | Gallery</title>
</head>

<body>
    <?php $page = "gallery"; ?>
    <?php include('include/header.php') ?>

    <?php include('include/nav.php') ?>

    <main class="main">
        <div class="selector">
            <button onclick="window.location.href = 'gallery.php'" class="gallerybtn"><i class="fas fa-th fa-lg"></i></button>
            <button onclick="window.location.href = 'gallery2.php'" class="gallerybtn"><i class="fas fa-caret-square-o-right fa-lg"></i></button>
        </div>
        <div class="container-gallery gallery">
            <div class="item">
                <a href="images/img3.JPG" data-caption="Baby Lily">
                    <img src="images/img3.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img4.JPG" data-caption="Derp Lily">
                    <img src="images/img4.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img8.JPG" data-caption="Sleepy Lily">
                    <img src="images/img8.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img16.JPG" data-caption="Smug Lily">
                    <img src="images/img16.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img17.JPG" data-caption="Hungry Lily">
                    <img src="images/img17.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img15.JPG" data-caption="Charlie">
                    <img src="images/img15.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img22.JPG" data-caption="Hungry Charlie">
                    <img src="images/img22.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img10.jpg" data-caption="Loaf Charlie">
                    <img src="images/img10.jpg" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img6.JPG" data-caption="Bella">
                    <img src="images/img6.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img5.JPG" data-caption="Bipper">
                    <img src="images/img5.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img7.JPG" data-caption="Lucy">
                    <img src="images/img7.JPG" alt="">
                </a>
            </div>
            <div class="item">
                <a href="images/img19.JPG" data-caption="Red Panda">
                    <img src="images/img19.JPG" alt="">
                </a>
            </div>

        </div>

    </main>

    <?php include('include/footer.php') ?>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>

</body>

</html>