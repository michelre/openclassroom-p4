<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="public/jquery.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("templates/navbar.php"); ?>
    <ul>
        <?php foreach ($notes as $note) { ?>
        <li>
            <a href="?action=detailNote&noteId=<?php echo $note->getId() ?>">
                <?php echo $note->getTitle(); ?>
            </a>
        </li>
        <?php } ?>
    </ul>

</body>

</html>
