<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/registre.css">
    <link rel="stylesheet" href="styles/global.css">
    <title>Pràctica 4</title>
</head>

<body>

    <form action="./controller/alta.php" method="post" class="formulari">

        <h1>Crea't un compte</h1>
        <?php
        //Error del formulari
        if (isset($_GET['error'])) {
            if ($_GET['error'] === 'emailAlreadyExists') {
                echo "Aquest email ja està registrat";
            } else if ($_GET['error'] === 'alreadyExists') {
                echo "Aquest usuari ja està registrat";
            } else if ($_GET['error'] === 'problemCreatingUser') {
                echo 'Hi ha hagut un problema creant el teu usuari';
            } else if ($_GET['error'] === '3') {
                echo 'La contrasenya no és correcta';
            } 
        }
        ?>

        <p>Nom:</p> <input type="text" class="nom" name="nom">
        <p>Cognoms:</p> <input type="text" class="cognoms" name="cognoms">
        <p>Email:</p> <input type="email" class="email" name="email">
        <p>Nom d'usuari:</p> <input type="text" class="user" name="user">
        <p>Contrasenya:</p> <input type="password" maxlength="8" class="contrasenya" name="password">
        <input type="submit" class="botoRegistre" value="Registra't">
    </form>

</html>