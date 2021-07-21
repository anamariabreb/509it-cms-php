<?php include ('../shared/header.php'); ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include ('../shared/sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include ('../shared/navbar.php'); ?>
          
                <?php include ('../partials/pc-database.php'); ?> 

                <div class="card">
                    <div class="card-body text-right">                   
                        <a href="view-pc-add.php" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Add Personal Contact</span>
                        </a>  
                    </div>
                </div>        
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

<?php include ('../shared/footer.php'); ?>