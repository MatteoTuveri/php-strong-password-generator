<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body class="bg-body-secondary">
    <header>

    </header>
    <main class="container d-flex justify-content-center py-5">
        <div class="bg-white rounded-3 p-5">
            <?php if($_SESSION['password']){ ?>
            <h4>Your Password: <?= $_SESSION['password']; ?></h4>
            <?php }
            else{
                echo 'Parameters not found';
            }
            ?>
            <a href="../" class="btn btn-success">back</a>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>