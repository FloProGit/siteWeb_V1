<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=<?= CSS .$_GET['r'].".css"?>>
    <link rel="stylesheet" href=<?= CSS ."header.css"?>>
</head>
<body>
<menu class="main_menu">
        <div class="main_menu_top">
            <a href=<?= HOST."home"?>><img src="../source/img/FS LOGO.png" alt=""></a>
        </div>
        <nav class="main_menu_nav">
            <a href=<?= HOST."a_propos"?>>a propos</a>
            <a href=<?= HOST."competence"?>>competence</a>
            <a href="projets">projets</a>
            <a href="contact">contact</a>
        </nav>
    </menu>



<!----------- page content---------->
<?= $content; ?>



    </body>
</html>