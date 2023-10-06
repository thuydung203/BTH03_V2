<?php
class Sach{
    private $id;
    private $fullname;
   

    public function __construct($id, $fullname){
        $this->id = $id;
        $this->fullname = $fullname;
       
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id): self {
		$this->id = $id;
		return $this;
	}
    public function getFullname(){
        return $this->fullname;
    }
    public function setFullname($fullname): self {
		$this->id = $id;
		return $this;
	}
   
    
}
?>
