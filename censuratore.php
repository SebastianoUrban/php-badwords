<!DOCTYPE html>

<?php 
    $paragraph = $_GET['paragraph'];
    $word = $_GET['word'];
    $censured = str_replace($word, '***', $paragraph);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Report</title>
    </head>
    <body>
        <main>
            <section>
            <h1>Dati Insriti</h1>
            <h2>Paragrafo inserito</h2>
            <?php 
                echo $paragraph;
            ?>
            <h4>Lunghezza Paragrafo</h4>
            <?php 
                echo strlen($paragraph);
            ?>
            </section>
            <section>
            <h1>Dati Censurati</h1>
            <h2>Paragrafo censurato</h2>
            <?php 
                echo $censured;
            ?>
            <h4>Lunghezza Paragrafo censurato</h4>
            <?php 
                echo strlen($censured);
            ?>
            </section>
        </main>
    </body>
</html>