<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        
    $numChars = $_GET['number'];

    include __DIR__ . '/partials/logic.php'
    
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
    <link rel="icon" type="image/x-icon" href="./img/unnamed.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-xxl py-5 text-center">
        <h1 class="text-primary mb-3">Password Generator</h1>
        <form class="mb-5">
            <label for="numberInput">Genera Password da 8 a 20 caratteri:</label>
            <input type="number" id="numberInput" name="number" min="8" max="20" required><br><br>
            <input type="submit" value="Genera">
        </form>
        <div>
            <?php
            echo rand_string($numChars);
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>