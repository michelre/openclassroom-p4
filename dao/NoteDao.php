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

       public function create($title,$content)
    {
        $query=$this->db->prepare("insert into notes(title,content,date) values(?,?,NOW()) ");
        $query->bind_param('ss',$title,$content);
$query->execute();
           
         
    }

    public function update($title,$content,$noteId)
    {
        //UPDATE article SET ...
          $query=$this->db->prepare("update notes SET title=?,content=? where id=? ");
        $query->bind_param('ssi',$title,$content,$noteId);
$query->execute();
           

    }

    public function delete($noteId)
    {
        //DELETE FROM article WHERE id = articleId
         $query=$this->db->prepare("delete from notes where id=? ");
        $query->bind_param('i',$noteId);
$query->execute();

    }


}
