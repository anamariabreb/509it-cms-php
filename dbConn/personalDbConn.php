<?php
require 'dbConn/dbConn.php';

class personaldbConn extends dbConn
{
    //Insert
	public function insertContact($persCon)
	{

		$sql = 
            "INSERT INTO `PersonalContact` " .
            "(`ID`, "
            . "`contactFName`, `contactLName`, "
            . "`contactTel`, `contactHomeTel`, "
            . "`contactEmail`, "
            . "`contactAddr1`, `contactAddr2`, "
            . "`contactCity`, `contactPostcode`) " .
            "VALUES " . "(NULL,'" 
            . $persCon->getContactFName() . "','" 
            . $persCon->getContactLName() . "','" 
            . $persCon->getContactTel() . "','" 
            . $persCon->getContactHomeTel() . "','" 
            . $persCon->getContactEmail() . "','" 
            . $persCon->getContactAddr1() . "','"  
            . $persCon->getContactAddr2() . "','" 
            . $persCon->getContactCity() . "','"  
            . $persCon->getContactPostcode() . "')";


        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
}
