
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <?php if (strpos($_SERVER['REQUEST_URI'], "view-pc-add") !== false) : ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create Personal Account</h1>
                            </div>
                            <form class="user" action="view-pc-add.php" method="POST">
                                <?php include 'form-fields.php'; ?>
                            </form>

                        <?php elseif (strpos($_SERVER['REQUEST_URI'], "view-pc-update") !== false) : ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Personal Account</h1>
                            </div>
                            <form class="user" action="view-pc-add.php?id=<?php if (isset($_GET["id"])) echo $_GET["id"]; ?>" method="POST">
                                <?php include 'form-fields.php'; ?>
                            </form>
                        <?php endif; ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


