<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="public/jquery.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("templates/navbar.php"); ?>
    <div class="container">

        <h1>Gérer les commentaires de l'article</h1>
        <ul>
            <?php foreach($comments as $comment){  ?>

            <li>
                <?php echo $comment->getContent();?>
                <a href="?action=keepComment&commentId=<?php echo $comment->getId();?>&noteId=<?php echo $comment->getNoteId();?>" class="btn btn-primary">Conserver le commentaire</a>
                <a href="?action=removeComment&commentId=<?php echo $comment->getId();?>&noteId=<?php echo $comment->getNoteId();?>" class="btn btn-danger">Supprimer le commentaire</a>
            </li>



            <?php  
}
            ?>
        </ul>
    </div>

</body>

</html>
