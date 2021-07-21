<?php        
    include ('../dbConn/personalDbConn.php');
    include ('../classes/PersonalContact.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $mysqlConn = new personalDbConn();
        //Connect
        $mysqlConn->connect();

        //ID will be available only when the contact is updated
        if (isset($_GET['id'])) {
            $PersonalContact = new PersonalContact(
                $_GET['id'],
                $_POST['FName'], 
                $_POST['LName'], 
                $_POST['Tel'], 
                $_POST['HomeTel'], 
                $_POST['Email'], 
                $_POST['Addr1'], 
                $_POST['Addr2'], 
                $_POST['City'], 
                $_POST['Postcode']);
            $mysqlConn->updateContact($PersonalContact);
        } else {
            $PersonalContact = new PersonalContact(
                Null,
                $_POST['FName'], 
                $_POST['LName'], 
                $_POST['Tel'], 
                $_POST['HomeTel'], 
                $_POST['Email'], 
                $_POST['Addr1'], 
                $_POST['Addr2'], 
                $_POST['City'], 
                $_POST['Postcode']);

            $mysqlConn->insertContact($PersonalContact);
        }                   
    }

?>
