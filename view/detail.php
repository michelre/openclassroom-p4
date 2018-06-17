<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Détail</title>
</head>
<body>

  <h1><?php echo $article->getTitle(); ?></h1>

  <div>
      <?php echo $article->getContent(); ?>
  </div>

</body>
</html>
