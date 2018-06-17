<?php

require_once('dao/ArticleDao.php');

class FrontendController
{
    private $articleDao;

    public function __construct()
    {
        $this->articleDao = new ArticleDao();
    }

    public function home()
    {
        $articles = $this->articleDao->findAll();
        require('view/home.php');
    }

    public function detailArticle($articleId)
    {
        $article = $this->articleDao->findById($articleId);
        require('view/detail.php');
    }

}
