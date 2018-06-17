<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
</head>
<body>

  <ul>
    <?php foreach ($articles as $article) { ?>
      <li>
        <a href="?action=detailArticle&articleId=<?php echo $article->getId() ?>">
            <?php echo $article->getTitle(); ?>
        </a>
      </li>
    <?php } ?>
  </ul>

</body>
</html>
