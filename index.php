<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div class="container py-5">
        <h1>PHP Parte 2</h1>

        <?php 


        
        ?>

        <hr>

        <?php

        // inizializziamo un array vuoto, inseriamo elementi sinchè non ne abbiamo 10

        $numeri = [];

        while (count($numeri) < 10) {
            // codice per aggiungere un elemento

            // per generare un numero casuale e inserirlo nell'array
            $numeri[] = rand(1, 10);
        }

        var_dump($numeri);

        ?>
        <hr>
        <ul>

            <!-- per stampare elementi in pagina da un array? -->

            <?php 

            // for($i = 0; $i < count($numeri); $i++) {
            //     echo "<li> $numeri[$i] </li>";
            // }

            // posso utilizzare il foreach
            foreach ($numeri as $currentNumber) {
                echo "<li> $currentNumber </li>";
            }

            ?>

        </ul>
    

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>