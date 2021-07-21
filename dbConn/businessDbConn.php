<?php
require ('../dbConn/dbConn.php');

class businessdbConn extends dbConn
{
    public $link_address = "../views/view-bc-manage.php";

    // View
    public function viewContact()
    {
        $sql = "SELECT * FROM BusinessContact ";

        return $this->conn->query($sql);
    }

    // View
    public function viewSingleContact($id)
    {
        $sql = "SELECT * FROM `BusinessContact` WHERE ID = " . $id;

        return $this->conn->query($sql);
    }

    // Insert
	public function insertContact($busCon)
	{
		$sql = 
            "INSERT INTO `BusinessContact` " .
            "(`ID`, "
            . "`contactFName`, `contactLName`, "
            . "`contactTel`, `contactBusinessTel`, "
            . "`contactEmail`, "
            . "`contactAddr1`, `contactAddr2`, "
            . "`contactCity`, `contactPostcode`) " .
            "VALUES " 
            . "(NULL,'
            ". $busCon->getContactFName() . "','
            ". $busCon->getContactLName() . "','
            ". $busCon->getContactTel() . "','
            ". $busCon->getContactBusinessTel() . "','
            ". $busCon->getContactEmail() . "','
            ". $busCon->getContactAddr1() . "','
            ". $busCon->getContactAddr2() . "','
            ". $busCon->getContactCity() . "','
            ". $busCon->getContactPostcode() . "
            ')";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully. Go to <a href='". $this->link_address ."'> Manage Contacts </a>";
        } else {
            echo "Error: "  . $this->conn->error;
        }
    }

    // Update
    public function updateContact($busCon)
    {
        $sql = "UPDATE `BusinessContact`
            SET " .
            "contactFName = '" . $busCon->getContactFName() . "'," .
            "contactLName = '" . $busCon->getContactLName() . "'," .
            "contactTel = '" . $busCon->getContactTel() . "'," .
            "contactBusinessTel = '" . $busCon->getContactBusinessTel() . "'," .
            "contactEmail = '" . $busCon->getContactEmail() . "'," .
            "contactAddr1 = '" . $busCon->getContactAddr1() . "'," .
            "contactAddr2 = '" . $busCon->getContactAddr2() . "'," .
            "contactCity = '" . $busCon->getContactCity() . "'," .
            "contactPostcode = '" . $busCon->getContactPostcode() . "'" .
            " WHERE " . "ID = " . $busCon->getContactId();

        if ($this->conn->query($sql) === TRUE) {
            echo "Record updated successfully. Go to <a href='". $this->link_address ."'> Manage Contacts </a>";
          } else {
            echo "Error updating record: " . $this->conn->error;
          }
    }

    // Delete
    public function deleteContact($id)
    {
        $sql = "DELETE FROM `BusinessContact` WHERE ID = " . $id;

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully. Go to <a href='". $this->link_address ."'> Manage Contacts </a>";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }
    }
}
