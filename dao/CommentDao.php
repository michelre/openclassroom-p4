<?php

require_once('model/Comment.php');
require_once('BaseDao.php');
class CommentDao extends BaseDao
{
   public function findArray()
       
  {
   $commentsDb=$this->db->query('select * from comments')->fetch_all(MYSQLI_ASSOC);
       
       $comments = array();
        foreach ($commentsDb as $comment){
            array_push($comments, new Comment($comment['id'], $comment['title'], $comment['content'], $comment['date']));
   
   }
       
       return $comments;
       
   }
      public function findByNoteld($commentId)
     
      {
          
           $comment=$this->db->query('select * from comments where id='.$commentId)->fetch_assoc();
        
        
        return new Comment($comment['id'], $comment['title'], $comment['content'], $comment['date']);
          
      }
          
         public function create()
    {
       

    }

    public function update()
    {
        

    }

    public function delete($commentId)
    {
        

    }
  
          
          
          
          
       
}
