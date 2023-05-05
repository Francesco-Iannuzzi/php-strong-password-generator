<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap Style -->
    <title>PHP Password Generated</title>
</head>

<body>
    <h1>Ciao sei sulla nuova pagina</h1>
    <div class="pt-3">
        <?php if ($password !== '') : ?>
            <div class="alert alert-primary" role="alert">
                <h6>This is your new Password:</h6>
                <h3><?= $password ?></h3>
            </div>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                <h6>Choose Password lenght</h6>
            </div>
        <?php endif; ?>
    </div>
    <!-- /alert password -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- /Bootstrap script -->
</body>

</html>