<?php

class BusinessContact extends Contact
{
    private $businessTel;
    
    /*Constructor Method*/
    public function BusinessContact($id, $businessTel)
    {
        if ($id!=null) {
            $this->id = $id;
        }
        $this->businessTel = $businessTel;
    }
        
    /*A getter method*/
    public function getbusinessTel()
    {
        return $this->businessTel;
    }
}