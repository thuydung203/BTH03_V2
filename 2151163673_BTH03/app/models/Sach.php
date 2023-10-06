<?php
class Sach{
    private $id;
    private $name;
    private $year;
    private $idtg;


    public function __construct($id, $fullname, $gender, $city, $mobile){
        $this->id = $id;
        $this->fullname = $name;
        $this->gender = $gender;
        $this->city = $igtg;
      
    }
    public function getName(){
        return $this->fullname;
    }
    public function setName($name): self {
		$this->name = $name;
		return $this;
	}
    public function getId(){
        return $this->id;
    }
    public function setId($id): self {
		$this->id = $id;
		return $this;
	}
    public function getYear(){
        return $this->id;
    }
    public function setYear($year): self {
		$this->id = $id;
		return $this;
	}
    public function getIdTg(){
        return $this->id;
    }
    public function setIdTg($idtg): self {
		$this->id = $id;
		return $this;
	}
   
   
    
}


?>