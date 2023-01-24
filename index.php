<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Censuratore</title>
    </head>
    <body>
        <header>
            <h1>Censuratore</h1>
        </header>
        <main>
            <form action="./censuratore.php" method="GET">
                <h2>Scrivi il tuo paragrafo:</h2>
                <textarea name="paragraph" id="paragraph" cols="40" rows="10"></textarea>
                <h2>Scrivi la parola da censurare:</h2>
                <input type="text" name="word" id="word">
                <button type="submit">Invia</button>
            </form>
        </main>
    </body>
</html>