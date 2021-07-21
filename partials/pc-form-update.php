
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Update Personal Account</h1>
                        </div>
                        <form class="user" action="view-pc-add.php?id=<?php if (isset($_GET["id"])) echo $_GET["id"]; ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="FName" 
                                        name="FName" placeholder="First Name"                                    
                                        value="<?php if (isset($row["contactFName"])) echo $row["contactFName"]; ?>"
                                    >
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="LName" 
                                        name="LName" placeholder="Last Name"
                                        value="<?php if (isset($row["contactLName"])) echo $row["contactLName"]; ?>"
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="Tel" 
                                        name="Tel" placeholder="Tel"
                                        value="<?php if (isset($row["contactTel"])) echo $row["contactTel"]; ?>"
                                    >
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="HomeTel" 
                                        name="HomeTel" placeholder="Home Tel"
                                        value="<?php if (isset($row["contactHomeTel"])) echo $row["contactHomeTel"]; ?>"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="Email" 
                                    name="Email" placeholder="Email Address"
                                    value="<?php if (isset($row["contactEmail"])) echo $row["contactEmail"]; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="Addr1" 
                                    name="Addr1" placeholder="Address Line 1"
                                    value="<?php if (isset($row["contactAddr1"])) echo $row["contactAddr1"]; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="Addr2" 
                                    name="Addr2" placeholder="Address Line 2"
                                    value="<?php if (isset($row["contactAddr2"])) echo $row["contactAddr2"]; ?>"
                                >
                            </div>                 
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="City" 
                                        name="City" placeholder="City"
                                        value="<?php if (isset($row["contactCity"])) echo $row["contactCity"]; ?>"
                                    >
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="Postcode" 
                                        name="Postcode" placeholder="Postcode"
                                        value="<?php if (isset($row["contactPostcode"])) echo $row["contactPostcode"]; ?>"
                                    >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Update Contact</button>                                         
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

