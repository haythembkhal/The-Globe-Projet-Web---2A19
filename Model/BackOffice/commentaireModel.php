<?php 

class Comments
{

    private ?string $commentId = null;
    private ?string $comment= null;    

    function __construct($commentId,$comment)
    {
        $this->commentId = $commentId;
        $this->comment= $comment;
    }

    public function getId()
    {
        return $this->commentId;
    }
    
    public function getComment()
    {
        return $this->comment;
    }

/////SETTER
    public function setId($commentId)
    {
        $this->commentId= $commentId;

        return $this;
    }

    public function setComment($comment)
    {
        $this->comment= $comment;
        return $this;
    }
}
?>