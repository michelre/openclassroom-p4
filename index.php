<?php

require_once('controller/FrontendController.php');

$frontendController = new FrontendController();


if (!isset($_GET['action']) || $_GET['action'] === 'home') {
    $frontendController->home();
    return;
}

if ($_GET['action'] === 'detailArticle') {
    $frontendController->detailArticle($_GET['articleId']);
    return;
}


/**
 * 1. Bien relire le code du jour
 * 2. Créer la base de données à partir du sujet (anticiper les besoins)
 * 3. Insérer des fausses données dans la BD
 * 4. Connecter ArticleDAO à la Base de données (connexion à la BD en PHP + la requête SELECT * FROM article)
 *
 */

