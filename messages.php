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
    <title>Robert Leslie | Messages</title>
</head>
<body>
    <?php $page = "messages"; ?>
    <?php include('include/header.php') ?>

    <?php include('include/nav.php') ?>

    <main class="messagesMain">
        <?php 
            include('include/config.php');

            $sql = "SELECT * FROM review";
            $query = mysqli_query($con, $sql);
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $message = '"' . $row["message"] . '" - ';
                    $message .= '<strong>' . $row["name"] . '</strong>';
                    echo '<div class="aboutInfo centered">
                    <p>'. $message .'</p>
                    </div>';
                }
            }
            else{
                echo '<div class="aboutInfo centered">
                <p>No messages to display yet.</p>
                </div>';
            }
        ?>
        
    </main>
    
    <?php include('include/footer.php') ?>

</body>
</html>