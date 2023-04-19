<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <form action="risultato.php" method="GET">
        <label for="text">Paragrafo: </label>
        <input type="text" name="text" id="text" placeholder="Inserisci un testo" />
            <br /><br />
        <label for="word">Parola da censurare: </label>
        <input type="text" name="word" id="word" placeholder="Inserisci una parola" />
            <br /><br />
        <button type="submit">INVIA</button>
    </form>
</body>
</html>