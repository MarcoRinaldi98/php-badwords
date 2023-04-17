<?php
    $text = $_GET['text'];
    $word = $_GET['word'];

    $paragrafo = 'Il testo scritto è: ' . "'" . $text . "'" . ' ed ha una lunghezza di ' . strlen($text) . ' caratteri';
    $paragrafoCensurato = 'Paragrafo censurato: ' . "'" . str_replace($word, '***', $text) . "'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1>
        <?php echo $paragrafo ?>
    </h1>
    <h1>
        <?php echo $paragrafoCensurato ?>
    </h1>
</body>
</html>