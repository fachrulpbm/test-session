<?php
    session_start();
    if( isset($_SESSION['user']) ){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    <?php
        echo $_SESSION['user'];
        echo $_SESSION['pass'];
    ?>

    <a href="home.php?logout=yes">
        Logout
    </a>

    <?php
        if(isset($_GET['logout'])){
            session_destroy();
            header('Location: index.php');
        }
    ?>
    
</body>
</html>



<?php
    }else{
        echo "
            <script>
                alert('Anda harus login!');
            </script>
        ";
        header('Location: index.php');
    }
?>

