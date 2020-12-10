<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="shortcut icon" type="image/ico" href="robs_icon.ico">
    <title>Robert Leslie | About</title>
</head>
<body>
    <?php $page = "home"; ?>
    
    <?php include('include/header.php') ?>

    <?php include('include/nav.php') ?>

    <main class="aboutMain">
        <div class="aboutImgContainer">
            <div class="aboutImg"></div>
        </div>
        <div class="aboutInfo">
            <h1>About Robert</h1>
            <p>Robert is currently attending Western Washington University for his Masters degree in Computer Science. His favorite classes have been in Game, Mobile app, and Web development. He grew up in West Seattle, moved to Bellingham for school, because he enjoyed the atmosphere, but has decided he would like to live somewhere warmer when he gets the chance.
            </p>

            <h3>Experience</h3>
            <p>While Robert has been in school, he has worked mostly at Walmart. He started on CAP 2 and moved to Support Manager then back to CAP 2 as the CAP 2 Supervisor until he eventually decided to focus on school.</p>
            <p>Next quarter, Robert will be a TA for the computer science department at Western Washington University.</p>
            <a href="Robert's_CS_Resume.pdf" target="_blank">Robert's Resume <i class="fas fa-angle-right"></i></a>

            <br><br>
            <h3>Hobbies</h3>
            <ul>
                <li>Video Games</li>
                <li>Hiking</li>
                <li>Reading</li>
            </ul>
        </div>
    </main>
    
    <?php include('include/footer.php') ?>

</body>
</html>