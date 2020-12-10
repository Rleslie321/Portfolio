<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <link rel="shortcut icon" type="image/ico" href="robs_icon.ico">

    <!-- <link href="raster/resources/bootstrap.min.css" rel="stylesheet"> -->

    <script src="raster/glUtil.js"></script>
    <script src="raster/uiUtil.js"></script>
    <script src="raster/matrix.js"></script>
    <script src="raster/cube.js"></script>
    <script src="raster/sphere.js"></script>
    <script src="raster/task5.js"></script>
    <script src="raster/task6.js"></script>
    <script src="raster/task7.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Robert Leslie | Rasterizer</title>
</head>

<body onload="setupAssignment();">
    <?php $page = "raster"; ?>
    <?php include('include/header.php') ?>

    <?php include('include/nav.php') ?>

    <main>
        <div class="container contentWrapper">
            <div class="pageContent">
                <div class="canvas-container centerizer">
                    <canvas  id="task-7" width="820" height="461"></canvas>
                </div>
            </div>
        </div>
    </main>

    <?php include('include/footer.php') ?>
    
    <script>
        function setupAssignment() {
            setupTask("task-7", Task7, true);
        }
    </script>
</body>

</html>