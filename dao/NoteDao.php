<?php

require_once('model/Note.php');
require_once('BaseDao.php');
class NoteDao extends BaseDao
{
    public function findAll()
    {
      $notesDb=$this->db->query('select * from notes')->fetch_all(MYSQLI_ASSOC);
      
        
        $notes = array();
        foreach ($notesDb as $note){
            array_push($notes, new Note($note['id'], $note['title'], $note['content'], $note['date']));
        }
        
       
        return $notes;

    }

    public function findById($noteId)
        
    {
       
        $note=$this->db->query('select * from notes where id='.$noteId)->fetch_assoc();
        
        
        return new Note($note['id'], $note['title'], $note['content'], $note['date']);
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
