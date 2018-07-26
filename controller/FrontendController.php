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
        $notesHeader=$notes;
          
        require('view/home.php');
    }

    public function detailNote($noteId)
    {
         $notesHeader = $this->noteDao->findAll();
        $note = $this->noteDao->findById($noteId);
         $comments = $this->commentDao->findByNoteId($noteId);
       
        
        require('view/detail.php');
    }
    
     public function addComment($title,$content,$author,$noteId)
    {
        
        $this->commentDao->create($title,$content,$author,$noteId);
         header('Location:?action=detailNote&noteId='.$noteId);
      
    }
    
       public function notifyComment($is_notified)
    {
        
        $this->commentDao->notify($is_notified);
       header('Location:action=detailNote');
      
        
      
    }
    
   
    
     

   
}
