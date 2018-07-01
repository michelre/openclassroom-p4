<?php

require_once('dao/NoteDao.php');
require_once('dao/CommentDao.php');

class FrontendController
{
    private $noteDao;
     private $commentDao;

    public function __construct()
    {
        $this->noteDao = new NoteDao();
         $this->commentDao = new CommentDao();
    }

    public function home()
    {
        $notes = $this->noteDao->findAll();
          $comments = $this->commentDao->findAll();
        require('view/home.php');
    }

    public function detailNote($noteId,$commentId)
    {
        $note = $this->noteDao->findById($noteId);
         $comment = $this->commentDao->findByNoteld($commentId);
       
        
        require('view/detail.php');
    }
    
     

   
}
