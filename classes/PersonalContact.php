<?php $root=$_SERVER["DOCUMENT_ROOT"] ;?>

<?php
require ($root .'/classes/Contact.php');

class PersonalContact extends Contact
{
    private $homeTel;

    /*Constructor Method*/
    public function __construct($id, $fName, $lName, $tel, $homeTel, $email, $addrL1, $addrL2, $city, $postcode,)
    {
        parent::__construct($id, $fName, $lName, $tel, $email, $addrL1, $addrL2, $city, $postcode);

        $this->homeTel = $homeTel;
    }
        
    /*A getter method*/
    public function getContactHomeTel()
    {
        return $this->homeTel;
    }
}