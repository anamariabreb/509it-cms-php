<?php include '../shared/header.php';?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include 'shared/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include 'shared/navbar.php'; ?>

                <?php 
            
                    include 'dbConn/businessDbConn.php';
                    include 'classes/BusinessContact.php';

                    if ($_SERVER['REQUEST_METHOD'] == "GET") {

                        $mysqlConn = new businessDbConn();
                        $mysqlConn->connect();

                        if (isset($_GET['id'])) {
                            $result = $mysqlConn->viewSingleContact($_GET['id']);
                        }

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                include 'view-bc-form.php';
                            }                           
                        }
                        else {
                            echo "No results";
                        }                      
                    }
                ?>

                
                
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

<?php include 'shared/footer.php'; ?>