<?php
    $pas_limit = $_GET['pas_limit'];
    if($pas_limit){
        $pass = passGen($pas_limit);
    };

    function passGen($number){
        $letters = 'abcdefghijklmnopqrstuvwxyz';
        $caps = strtoupper($letters);
        $symbols = "~! @#$%^&*()_-+={[}]|\:;<,>.?/";
        $password = '';
        while(strlen($password)<=$number){
            $password .= str_split($letters . $caps . $symbols)[rand(0,81)];
        }
        return $password;
    };
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
            <form action="" method="GET">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lunghezza Password</label>
                    <input type="number" class="form-control" id="number" name="pas_limit" max="20" min="5" >
                </div>
                <button type="submit">Send</button>
            </form>
            <?php if($pass){ ?>
            <h4>Password: <?php echo $pass; ?></h4>
            <?php } ?>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>