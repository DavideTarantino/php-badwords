<?php 

    $paragrafo = $_POST['paragrafo'];
    $censura = $_POST['censura'];

    $paragrafoCensurato = str_replace("$censura", "***", "$paragrafo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa credenziali</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
        <?php echo "Il tuo paragrafo:" . " " . $paragrafo . '.' . ' ' . 'La sua lunghezza e di :' . ' ' . strlen($paragrafo) . ' ' . 'caratteri' . '<br>' . 'Il paragrafo con la parola censurata:' . " " . $paragrafoCensurato . '.' . ' ' . 'La sua lunghezza ora e di :' . ' ' . strlen($paragrafoCensurato) ?>
    </h1>
</body>
</html>