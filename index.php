<?php

require __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap Style -->
    <title>PHP Password Generator</title>
</head>

<body class="bg-dark">

    <header>

        <nav class="nav justify-content-center py-3 bg-light">
            <a class="nav-link text-danger" href="#">
                <h6>Home</h6>
            </a>
            <a class="nav-link" href="#">
                <h6>About</h6>
            </a>
            <a class="nav-link" href="#">
                <h6>Contact</h6>
            </a>
        </nav>
        <!-- /navbar -->

    </header>
    <!-- /header -->

    <main class="bg-dark">
        <div class="container w-75 text-light text-center py-5">

            <div class="title">
                <h1 class="text-secondary">Strong Password Generator</h1>
                <h3>Generate a Secure Password</h3>
            </div>
            <!-- /.title -->

            <div class="card border-0 bg-secondary p-4 mt-5">

                <form action="" method="GET">
                    <div class="d-flex justify-content-between pb-5">
                        <label for="passwordLength">Choose Password length: </label>
                        <input type="text" class="form-control w-25" name="passwordLength" id="passwordLength" placeholder="Number of characters">
                    </div>
                    <!-- /select characters -->

                    <hr>
                    <!-- divisory -->

                    <div class="buttons d-flex justify-content-center gap-4">
                        <button type="submit" class="btn rounded-2 btn-primary">Submit</button>
                        <button type="reset" class="btn rounded-2 btn-danger">Reset</button>
                    </div>
                    <!-- /buttons -->

                </form>
                <!-- /form -->
            </div>
            <!-- /card -->

        </div>
    </main>
    <!-- /main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- /Bootstrap script -->

</body>

</html>