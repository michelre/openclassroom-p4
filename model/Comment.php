<?php

class Comment
{
    private $id;
    private $title;
    private $content;
    private $author;
    private $date;
    private $is_notified;
    private $note_id;



    public function __construct($id, $title, $content, $author, $date, $is_notified, $note_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->is_notified = $is_notified;
        $this->note_id = $note_id;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
        
    {
       
        return $this->title;
    }

    public function setTitle($title)
    {
         $_POST ['title'];
        $this->title = $title;
    }

    public function getContent()
    {
         
        return $this->content;
    }


    public function setContent($content)
        
    {
         $_POST ['content'];
        $this->content = $content;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getAuthor()
        
    {
        
        return $this->author;
    }

    public function setAuthor($author)
    {
        $_POST ['author'];
        $this->author = $author;
    }

    public function isNotified()
    {
        return $this->is_notified;
    }

    public function setIsNotified($is_notified)
    {
        $this->is_notified = $is_notified;
    }

    public function getNoteId()
    {
        return $this->note_id;
    }

    public function setNoteId($note_id)
    {
        $this->note_id = $note_id;
    }



}
