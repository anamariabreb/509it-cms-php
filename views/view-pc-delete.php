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

                <?php // This needs attention!!! ?>
                <?php 
            
                    include 'dbConn/personalDbConn.php';
                    include 'classes/PersonalContact.php';

                    if ($_SERVER['REQUEST_METHOD'] == "GET") {

                        $mysqlConn = new personalDbConn();
                        $mysqlConn->connect();

                        if (isset($_GET['id'])) {
                           $mysqlConn->deleteContact($_GET['id']);
                        }    
                        
                        header("Location: /view-ps-manage.php");
                    }
                ?>  
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

<?php include 'shared/footer.php'; ?>