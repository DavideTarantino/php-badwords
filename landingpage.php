<?php 

    $email = $_POST['email'];
    $password = $_POST['password']
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
        <?php echo "La tua email:" . " " . $email . '<br>' . 'La tua password:' . " " . str_replace("$password", "***", "***")?>
    </h1>
</body>
</html>