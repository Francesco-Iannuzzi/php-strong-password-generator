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

<body class="bg-light">

    <main class="bg-dark">
        <div class="container text-light text-center py-5">

            <div class="title">
                <h1 class="text-secondary">Strong Password Generator</h1>
                <h3>Generate a secure password</h3>
            </div>
            <!-- /.title -->

            <div class="card border-0 bg-secondary p-4 mt-5">

                <form action="" method="GET">
                    <div class="d-flex justify-content-between">

                        <label for="passwordLength">Choose Password length: </label>
                        <select class="form-select w-25" name="passwordLength" id="passwordLength" aria-label="Default select example">
                            <option value="1">One Character</option>
                            <option value="2">Two Characters</option>
                            <option value="3">Three Characters</option>
                            <option value="4">Four Characters</option>
                            <option value="5">Five Characters</option>
                            <option value="6">Six Characters</option>
                            <option value="7">Seven Characters</option>
                            <option value="8">Eight Characters</option>
                            <option value="9">Nine Characters</option>
                            <option value="10">Ten Characters</option>
                        </select>
                    </div>
                    <!-- /select characters -->

                    <div class="buttons d-flex gap-4">
                        <button type="submit" class="btn rounded-4 btn-primary">Submit</button>
                        <button type="reset" class="btn rounded-4 btn-warning">Reset</button>
                    </div>
                    <!-- /buttons -->

                </form>
                <!-- /form -->

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

            </div>
            <!-- /card -->

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- /Bootstrap script -->
</body>

</html>