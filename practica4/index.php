<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/form.css">

</head>

<body>
    <form action="./controller/valida.php" method="POST" class="formulari">
        <h1>Curriculum Vitae</h1>
        <h3>Inicia sessió</h3>

        <?php

        // Errors del formulari
        if (isset($_GET['error'])) {
            if ($_GET['error'] === 'unfilled') {
                echo "Has d'omplir els dos camps";
            } else if ($_GET['error'] === '1') {
                echo "Has d'escriure un usuari!";
            } else if ($_GET['error'] === '2') {
                echo "Has d'escriure una contrasenya";
            } else if ($_GET['error'] === '3') {
                echo "La contrasenya és incorrecta";
            } else if ($_GET['error'] === 'wrongUser') {
                echo " Aquest usuari no existeix";
            } else if ($_GET['error'] === 'wrongUser') {
                echo " Aquest usuari no existeix";
            } else {
                echo 'Oupssss, alguna cosa no ha anat bé!';
            }
        } ?>

        <!--Formulari per poder iniciar la sessió -->
        <p>Nom d'usuari:</p> <input type="text" class="input" name="user">
        <p>Contrasenya:</p> <input type="password" maxlength="8" class="input" name="password">
        <div class='footer'>
            <input type="submit" class="botoEnviar" value="Envia">
            <a href="registre.php" class="botoRegistre">No tens compte? Registra't</a>
        </div>
    </form>
</body>

</html>