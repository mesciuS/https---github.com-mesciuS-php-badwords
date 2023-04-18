<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parola censuratra</title>
</head>
<body>
    <?php
    echo $_GET['paragraph'];
    ?>
    <hr>
    <p>
        il paragrafo è lungo <?php
        echo strlen($_GET['paragraph']);
        ?> caratteri
    </p>
    <hr>
    <p>la parola censurata è:</p>
    <strong>
        <?php
        echo $_GET['censura'];
        ?>
    </strong>
    <hr>
    <p>il paragrafo censurato è:</p>
    <p>
        <?php
        echo str_replace($_GET['censura'], '***', $_GET['paragraph']);
        ?>
    </p>
    <hr>
    <p>
        il nuovo paragrafo è lungo <?php
        echo strlen(str_replace($_GET['censura'], '***', $_GET['paragraph']));
        ?> caratteri
    </p>
</body>
</html>