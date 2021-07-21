<?php        
    include ('../dbConn/businessDbConn.php');
    include ('../classes/BusinessContact.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $mysqlConn = new businessDbConn();
        //Connect
        $mysqlConn->connect();

        //ID will be available only when the contact is updated
        if (isset($_GET['id'])) {
            $BusinessContact = new BusinessContact(
                $_GET['id'],
                $_POST['FName'], 
                $_POST['LName'], 
                $_POST['Tel'], 
                $_POST['BusinessTel'], 
                $_POST['Email'], 
                $_POST['Addr1'], 
                $_POST['Addr2'], 
                $_POST['City'], 
                $_POST['Postcode']);
            $mysqlConn->updateContact($BusinessContact);
        } else {
            $BusinessContact = new BusinessContact(
                Null,
                $_POST['FName'], 
                $_POST['LName'], 
                $_POST['Tel'], 
                $_POST['BusinessTel'], 
                $_POST['Email'], 
                $_POST['Addr1'], 
                $_POST['Addr2'], 
                $_POST['City'], 
                $_POST['Postcode']);

            $mysqlConn->insertContact($BusinessContact);
        }                   
    }

?>
