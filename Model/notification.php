<?php


class Notification{

    private string $message;
   
	private int $etat;
   
    

    public function __construct(string $message,int $etat){
        $this->message = $message;
      
		$this->etat=$etat;
    }

    public function getMessage():string{
        return $this->message;
    }

   
	 public function getEtat():int{
        return $this->etat;
    }


    //setters
    public function setMessage(string $message):void{
        $this->message = $message;
    }

    

}


?>