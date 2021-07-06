<?php include 'shared/header.php';?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include 'shared/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include 'shared/navbar.php'; ?>

               


                <?php //include 'dbConn/dbConn.php'; ?>
                <?php 

                    //$dbConn = new dbConn();

                    //return $dbConn->connect();
                
                ?>

                <?php 
            
                    include 'dbConn/personalDbConn.php';
                    include 'classes/PersonalContact.php';

                    if ($_SERVER['REQUEST_METHOD'] == "POST") {

                        $mysqlConn = new personalDbConn();
                        //Connect
                        $mysqlConn->connect();

                        
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
                
                ?>

                <?php include 'personal-contact-form.php'; ?>
                
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

<?php include 'shared/footer.php'; ?>