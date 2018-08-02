<?php

require_once('dao/NoteDao.php');
require_once('dao/CommentDao.php');


class BackendController
{  
    private $noteDao;
     private $commentDao;
    
     public function __construct()
    {
        $this->noteDao = new NoteDao();
         $this->commentDao = new CommentDao();
    }

    
    public function adminHome()
    {       
         $notesHeader = $this->noteDao->findAll();
        $notes=$notesHeader;
            
       
        
        
         require('view/adminHome.php'); 
           
        } 
    
     public function updateNoteDisplay($noteId)
    {       
         $notesHeader = $this->noteDao->findAll();              
                       
         require('view/updateNoteDisplay.php'); 
           
        } 
    
     public function deleteNote($noteId)
    {       
         
           
        } 
    
      public function manageCommentsDisplay($noteId)
    {       
         $notesHeader = $this->noteDao->findAll();              
                       
         require('view/manageCommentsDisplay.php'); 
           
        } 
    
      public function addNoteDisplay()
    {       
         $notesHeader = $this->noteDao->findAll();              
                       
         require('view/addNoteDisplay.php'); 
           
        } 
    
    
}
