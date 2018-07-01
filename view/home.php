<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>

<body>

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
