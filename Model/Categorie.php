<?php 


/*******************************************************************************************************************************************************************************************************************************************************************************************
 * 
 */
class categorie
{
	private int $ID;
	private string $nomCt;
	private string $description;
	private int $nombre_artiste;




	
	public function __construct(string $nomCt, string $description)
	{
		$this->nomCt = $nomCt;
		$this->description = $description;

	}



	 //getters
    public function getnomCt():string{
        return $this->nomCt;
    }

    public function getdescription():string{
        return $this->description;
    }



    //setters
    public function setnomCt(string $nomCt):void{
        $this->nomCt = $nomCt;
    }

    public function setdescription(string $description):void{
        $this->description = $description; 
    }
}




















 ?>