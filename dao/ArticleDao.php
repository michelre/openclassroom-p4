<?php

require_once('model/Article.php');

class ArticleDao
{
    public function findAll()
    {
        //SELECT * FROM article
        $articles = array();
        array_push($articles, new Article(1, 'Article 1', 'Contenu 1', date('Y-m-d')));
        array_push($articles, new Article(2, 'Article 2', 'Contenu 2', date('Y-m-d')));
        array_push($articles, new Article(3, 'Article 3', 'Contenu 3', date('Y-m-d')));
        array_push($articles, new Article(4, 'Article 4', 'Contenu 4', date('Y-m-d')));
        return $articles;

    }

    public function findById($articleId)
    {
        //SELECT * FROM article WHERE id = articleId
        return new Article($articleId, 'Article ' . $articleId, 'Contenu ' . $articleId, date('Y-m-d'));
    }

    public function create()
    {
        //INSERT INTO article....

    }

    public function update()
    {
        //UPDATE article SET ...

    }

    public function delete($articleId)
    {
        //DELETE FROM article WHERE id = articleId

    }


}
