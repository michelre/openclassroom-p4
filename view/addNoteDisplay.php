<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="public/jquery.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>
</head>

<body>
    <?php include("templates/navbar.php"); ?>
    <div class="container">

        <h1>Ajouter un article</h1>

        <form action="?action=addNote" method="post">

            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="content">Texte</label>
                <textarea class="form-control" name="content" rows="3"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Envoyer</button>


        </form>


    </div>

</body>

</html>
