<?php 

class Contact 
{
    private $id;
    private $fName;
    private $lName;
    private $tel;
    private $email;
    private $addrL1;
    private $addrL2;
    private $city;
    private $postcode;
 
    /*Constructor Method*/
    public function __construct($id, $fName, $lName, $tel, $email, $addrL1, $addrL2, $city, $postcode){
    if($id!=null){
        $this->id = $id;
    }
        $this->fName = $fName;
        $this->lName = $lName;
        $this->tel   = $tel;
        $this->email = $email;
        $this->addrL1 = $addrL1;
        $this->addrL2 = $addrL2;
        $this->city = $city;
        $this->postcode = $postcode;
    }
    
    /*A getter method*/
    public function getId(){
        return $this->id;
    }
    
    public function getContactFName(){
        return $this->fName;
    }
    
    public function getContactLName(){
        return $this->lName;
    }

    public function getContactTel(){
        return $this->tel;
    }

    public function getContactEmail(){
        return $this->email;
    }

    public function getContactAddr1(){
        return $this->addrL1;
    }

    public function getContactAddr2(){
        return $this->addrL2;
    }

    public function getContactCity(){
        return $this->city;
    }

    public function getContactPostcode(){
        return $this->postcode;
    }

}
    
