<?php   
    
    include __DIR__ . '/partials/logic.php';

    $number = $_GET['number'];

    session_start();


    if ($number) {

        $userPassword = rand_string($number);
          
        $_SESSION['userPassword'] = $userPassword;
    
        header('Location: ./result.php');

    };
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
        <h1 class="text-primary mb-5">Ecco la tua password:</h1>

        <div class="border border-1 border-black rounded-3">
            <?php

                if($_SESSION['userPassword']){
                    echo "{$_SESSION['userPassword']}";
                } else {
                    header ('Location: ./index.php');
                }

            ?>
        </div>
        <div class="small text-danger">*Non condividerla mai con nessuno</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>