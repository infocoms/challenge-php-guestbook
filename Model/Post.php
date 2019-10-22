<?php


class Post
{
    private $title;
    private $name;
    private $date;
    private $comment;
    function __construct(string $_title, string $_name, $_date, string $_comment)
    {
        $this->id = $_title;
        $this->name = $_name;
        $this->date = $_date;
        $this->comment = $_comment;
    }
    public function getTitle() : string
    {
        return $this->title;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getComment() : string
    {
        return $this->comment;
    }
}