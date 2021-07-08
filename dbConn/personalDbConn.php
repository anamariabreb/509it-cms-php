<?php
require 'dbConn/dbConn.php';

class personaldbConn extends dbConn
{
    // View
    public function viewContact()
    {
        $sql = "SELECT * FROM PersonalContact ";

        return $this->conn->query($sql);
    }

    // Insert
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
            "VALUES " 
            . "(NULL,'
            ". $persCon->getContactFName() . "','
            ". $persCon->getContactLName() . "','
            ". $persCon->getContactTel() . "','
            ". $persCon->getContactHomeTel() . "','
            ". $persCon->getContactEmail() . "','
            ". $persCon->getContactAddr1() . "','
            ". $persCon->getContactAddr2() . "','
            ". $persCon->getContactCity() . "','
            ". $persCon->getContactPostcode() . "
            ')";


        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    // Update
    public function updateContact($persCon)
    {
        $sql = "UPDATE `PersonalContact`
            SET " .
            "contactFName = '" . $persCon->getContactFName() . "'," .
            "contactLName = '" . $persCon->getContactLName() . "'," .
            "contactTel = '" . $persCon->getContactTel() . "'," .
            "contactHomeTel = '" . $persCon->getContactHomeTel() . "'," .
            "contactEmail = '" . $persCon->getContactEmail() . "'," .
            "contactAddr1 = '" . $persCon->getContactAddr1() . "'," .
            "contactAddr2 = '" . $persCon->getContactAddr2() . "'," .
            "contactCity = '" . $persCon->getContactCity() . "'," .
            "contactPostcode = '" . $persCon->getPostcode() . "'" .
            "WHERE " . "ID = " . $persCon->getContactId();

        if ($this->conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $this->conn->error;
          }
    }

    // Delete
    public function deleteContact($id)
    {
        $sql = "DELETE FROM `PersonalContact` WHERE ID = " . $id;

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }
    }
}
