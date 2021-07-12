<?php $root=$_SERVER["DOCUMENT_ROOT"] ;?>

<?php
require ($root .'/classes/Contact.php');

class BusinessContact extends Contact
{
    private $businessTel;
    
    /*Constructor Method*/
    public function __construct($id, $fName, $lName, $tel, $businessTel, $email, $addrL1, $addrL2, $city, $postcode,)
    {
        parent::__construct($id, $fName, $lName, $tel, $email, $addrL1, $addrL2, $city, $postcode);

        $this->businessTel = $businessTel;
    }
        
    /*A getter method*/
    public function getContactBusinessTel()
    {
        return $this->businessTel;
    }
}