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
         $note=$this->noteDao->findById($noteId);
                       
         require('view/updateNoteDisplay.php'); 
           
        }
    
     
    
     public function deleteNote($noteId)
    {       
         $this->noteDao->delete($noteId);  
           header('Location:?action=adminHome');
        } 
    
      public function manageCommentsDisplay($noteId)
    {       
         $notesHeader = $this->noteDao->findAll();
          $comments=$this->commentDao->findNotifiedComments($noteId);
          
                       
         require('view/manageCommentsDisplay.php'); 
           
        } 
    
      public function addNoteDisplay()
    {       
         $notesHeader = $this->noteDao->findAll();  
         
         require('view/addNoteDisplay.php'); 
           
        } 
    
      public function addNote($title,$content)
    {       
         $this->noteDao->create($title,$content);  
             
        
          header('Location:?action=adminHome');
           
        } 
    
      public function updateNote($title,$content,$noteId)
    {       
         $this->noteDao->update($title,$content,$noteId);               
                       
        header('Location:?action=adminHome');
           
        }
    
     public function keepComment($commentId,$noteId)
    {    
        
         $this->commentDao->keep($commentId);               
                       
        header('Location:?action=manageCommentsDisplay&noteId='.$noteId);
           
        }
    
     public function removeComment($commentId,$noteId)
    {       
         $this->commentDao->delete($commentId);               
                       
        header('Location:?action=manageCommentsDisplay&noteId='.$noteId);
           
        }
    
    
}
