<?php 

/**
 * 
 */
class Artiste 
{
	private int $id;
	private string $nomArt;
	private string $nation;
	private string $genre;
	private int $age;
	private string $descrip;
    private int $categories;
    private string $image;
	
	function __construct(string $nomArt, string $nation, string $genre, int $age, string $descrip, int $categories, string $image)
	{
		$this->nomArt=$nomArt;
		$this->nation=$nation;
		$this->genre=$genre;
		$this->age=$age;
		$this->descrip=$descrip;
        $this->categories=$categories;
        $this->image=$image;
	}

	 //getters
    public function getnomArt():string{
        return $this->nomArt;
    }

        public function getnation():string{
        return $this->nation;
    }

        public function getgenre():string{
        return $this->genre;
    }

        public function getage():int{
        return $this->age;
    }

    public function getdescrip():string{
        return $this->descrip;
    }

    public function getcategories():int{
        return $this->categories;
    }

        public function getimage():string{
        return $this->image;
    }




    //setters
    public function setnomCt(string $nomArt):void{
        $this->nomArt = $nomArt;
    }

        public function setnation(string $nation):void{
        $this->nation = $nation;
    }

        public function setgenre(string $genre):void{
        $this->genre = $genre;
    }

        public function setage(int $age):void{
        $this->age = $age;
    }

    public function setdescrip(string $descrip):void{
        $this->descrip = $descrip; 
    }

    public function setcategories(int $categories):void{
        $this->categories = $categories;
    }

        public function setimage(string $image):void{
        $this->image = $image;
    }
}








 ?>