<?php

/*

Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

*/


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

    <main>
        <div class="container text-light text-center py-5">
            <div class="title">
                <h1 class="text-secondary">Strong Password Generator</h1>
                <h3>Genera una password sicura</h3>
            </div>
            <!-- /.title -->
            <div class="card border-0 bg-secondary p-4">
                <form action="" method="GET">
                    <div class="d-flex justify-content-between">
                        <label for="password_length">Choose Password length</label>
                        <select class="form-select w-25" name="password_length" id="password_length" aria-label="Default select example">
                            <option selected>Choose Password length:</option>
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
                    <div class="d-flex gap-4">
                        <button type="submit" class="btn rounded-4 btn-primary">Submit</button>
                        <button type="reset" class="btn rounded-4 btn-warning">Reset</button>
                    </div>
                </form>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- /Bootstrap script -->
</body>

</html>