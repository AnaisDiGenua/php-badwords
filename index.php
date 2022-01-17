<?php
    $text = 'PHP è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L interprete PHP è un software libero distribuito sotto la PHP License.';
    $censuredText = str_replace($_GET['parola'], "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
    <h3>paragrafo originale:</h3>
    <p> <?php echo $text ?> </p>
    <p>lunghezza: <?php echo strlen($text)?> </p>

    <h3>paragrafo modificato</h3>
    <p> <?php echo $censuredText?> </p>
    <p>lunghezza: <?php echo strlen($censuredText)?> </p>

</body>
</html>