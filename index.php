<?php $root=$_SERVER["DOCUMENT_ROOT"]; ?>

<?php include ($root . '/shared/header.php');?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include 'shared/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include 'shared/navbar.php'; ?>
                
                <div class="text-center">
                    <br>
                    <h1>Welcome!</h1>
                    <br>
                    <h4 class="h4 text-gray-900 mb-4">What would you like to do?</h4>
                    <br>
                    <br>
                
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <a href="/views/view-pc-manage.php" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">Manage Personal Contacts</span>
                            </a>
                        </div>

                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <a href="/views/view-bc-manage.php" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">Manage Business Contacts</span>
                            </a>
                        </div>
                    </div>                   
                </div>         
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

<?php include ($root . '/shared/footer.php'); ?>