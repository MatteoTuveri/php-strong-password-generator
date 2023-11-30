<?php
session_destroy();
session_start();
include __DIR__ . "/functions/functions.php";
$pas_limit = $_GET['pas_limit'];
if ($pas_limit) {
    $repeat = ($_GET['caps'] === '1') ? true : false;
    $caps = (isset($_GET['caps'])) ? true : false;
    $symbols = (isset($_GET['symbols'])) ? true : false;
    $numbers = (isset($_GET['numbers'])) ? true : false;
    $letters = (isset($_GET['letters'])) ? true : false;
    $pass = passGen($pas_limit, $repeat, $caps, $symbols, $numbers, $letters);
    $_SESSION['password'] = $pass;
    header('Location: partials/password.php');
    exit;
}
;
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
        <div class="bg-white rounded-3 p-5 w-75">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
                <div class="mb-3 d-flex align-items-center">
                    <label class="form-label col-4">Lunghezza Password:</label>
                    <input type="number" class="form-control" id="number" name="pas_limit" max="20" min="5"
                        placeholder="Inserire un numero da 5 a 20">
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <label class="form-label col-4">Ripetere parametri uguali?</label>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="repeat" id="flexRadioDefault1" value="1">
                        <label class="form-check-label">
                            Si
                        </label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="repeat" id="flexRadioDefault2" value="0"
                            checked>
                        <label class="form-check-label">
                            No
                        </label>
                    </div>
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <label class="form-label col-4">Parametri:</label>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" value="1" name="letters" id="flexCheckDefault"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            Lettere Minuscole
                        </label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" value="1" name="caps" id="flexCheckDefault"
                            checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            Lettere Maiuscole
                        </label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" value="1" name="numbers" id="flexCheckChecked"
                            checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" value="1" name="symbols" id="flexCheckChecked"
                            checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Simboli
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Invia</button>
            </form>
            <?php if ($pass) { ?>
                <h4>Password:
                    <?= $pass; ?>
                </h4>
            <?php } ?>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>