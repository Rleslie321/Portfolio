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
    <title>Robert Leslie | R&eacute;sum&eacute;</title>
</head>

<body>
    <?php $page = "resume"; ?>
    <?php include('include/header.php') ?>

    <?php include('include/nav.php') ?>

    <main class="aboutMain">

        <div class="aboutInfo resume">
            <div class="heading">
                <h1>Robert Leslie</h1>
                <h5>(206) 817-8580</h5>
                <h5>robertleslie321@gmail.com</h5>
            </div>
            <h4>Education</h4>
            <p>Intended Masters of Science, Computer Science, Western Washington University (WWU), Bellingham, WA, 2020
            </p>
            <p>Bachelor of Science, Computer Science, Western Washington University (WWU), Bellingham, WA, December 2018
            </p>
            <p>Mathematics Minor, Western Washington University (WWU)</p>

            <h4>Related Courses</h4>
            <!-- <br> -->
            <div class="courses">
                <div>
                    <p>Computer Science</p>
                    <ul>
                        <li>Unix Software Development</li>
                        <li>Computer Security</li>
                        <li>Game Programming</li>
                        <li>Mobile Device Programming</li>
                        <li>Computer Vision</li>
                        <li>Dynamic Web Pages</li>
                    </ul>
                </div>
                <div>
                    <p>Mathematics</p>
                    <ul>
                        <li>Multivariable Calculus</li>
                        <li>Linear Algebra</li>
                        <li>Probability and Statistical Inference</li>
                        <li>Numerical Computation</li>
                    </ul>
                </div>
            </div>
            <h4>Projects</h4>
            <p>This Website- It was a project for my Dynamic Web Pages course.</p>
            <p>RLSH-The minishell is a project from my Unix class. It involved making a program that was a very simplified version of bash or shell terminal. It execs programs, does shell expansion, pipelining, redirection, has builtin library calls and more.</p>
            <p>MyLocations- is an app I developed in Android Studio. It shows my use of classes, GUIs, APIs, and creativity.</p>
            <br>
            <h4>Skills</h4>
            <p>Programming languages: Java, Python, C, C++, SQL, Kotlin, MatLab, HTML5, Racket <br>
            Experience with Unity, Blender, Android Studio, and Visual Studio Code <br>
            Repository Experience: gitlab, github, CVS <br>
            Linux Experience: emacs, ssh, etc. <br>
            Paired Programming</p>
            <br>
            <h4>Work History</h4>
            <div class="jobs">
                <p><b>Walmart, Bellingham, WA</b></p>
                <p>CAP 2 Supervisor, July 2017 - November 2019</p>
            </div>
        </div>
    </main>
    
    <?php include('include/footer.php') ?>

</body>

</html>