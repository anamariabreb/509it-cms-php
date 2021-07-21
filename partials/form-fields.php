<?php
// define variables and set to empty values to avoid undefined variables error
$FNameErr = $LNameErr = $EmailErr = $Addr1Err = $CityErr = $PostcodeErr = "";
$FName = $LName = $Email = $Addr1 = $City = $Postcode = "";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // First Name validation
    if (empty($_POST["FName"])) {
        $FNameErr = "First Name is required";
    } else {
        $FName = test_input($_POST["FName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$FName)) {
            $FNameErr = "Only letters and white space allowed";
        }
    }

    // Last Name validation
    if (empty($_POST["LName"])) {
        $LNameErr = "Last Name is required";
    } else {
        $LName = test_input($_POST["LName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$LName)) {
            $LNameErr = "Only letters and white space allowed";
        }
    }
  
    // Email validation
    if (empty($_POST["Email"])) {
        $EmailErr = "Email is required";
    } else {
        $Email = test_input($_POST["Email"]);
        // check if e-mail address is well-formed
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $EmailErr = "Invalid email format";
        }
    }

    // Address validation
    if (empty($_POST["Addr1"])) {
        $Addr1Err = "Address Line 1 is required";
    } else {
        $Addr1 = test_input($_POST["Addr1"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^\s*[a-z0-9\s]+$/i",$Addr1)) {
            $Addr1Err = "Please enter a valid Address Line 1";
        }
    }

    // City validation
    if (empty($_POST["City"])) {
        $CityErr = "City is required";
    } else {
        $City = test_input($_POST["City"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$City)) {
            $CityErr = "Only letters and white space allowed";
        }
    }

    // Postcode validation
    if (empty($_POST["Postcode"])) {
        $PostcodeErr = "Postcode is required";
    } else {
        $Postcode = test_input($_POST["Postcode"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[A-Z]?[A-Z][0-9][A-Z0-9]?\s[0-9][A-Z]{2}$/",$Postcode)) {
            $PostcodeErr = "Please enter a valid UK Postcode";
        }
    }
}
?>

<p class="error" style="font-size: 1rem;" >* required field</p>
<div class="error" style="font-size: 1rem; color:darkred; width: 100%;"> 
    <p><?php echo $FNameErr;?></p>
    <p><?php echo $LNameErr;?></p>
    <p><?php echo $EmailErr;?></p>
    <p><?php echo $Addr1Err;?></p>
    <p><?php echo $CityErr;?></p>
    <p><?php echo $PostcodeErr;?></p>
</div>


<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" id="FName" 
            name="FName" placeholder="First Name *"   
            value="<?php if (isset($row["contactFName"])) echo $row["contactFName"]; ?>"                                 
        >
    </div>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-user" id="LName" 
            name="LName" placeholder="Last Name *"
            value="<?php if (isset($row["contactLName"])) echo $row["contactLName"]; ?>"
        >
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" id="Tel" 
            name="Tel" placeholder="Tel *"
            value="<?php if (isset($row["contactTel"])) echo $row["contactTel"]; ?>"
        >
    </div>

    <?php // Check if is a Business or Personal page and display the right phone number field ?>
    <?php if ((strpos($_SERVER['REQUEST_URI'], "view-bc-add") !== false) || (strpos($_SERVER['REQUEST_URI'], "view-bc-update") !== false)) : ?>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user" id="BusinessTel" 
                name="BusinessTel" placeholder="Business Tel"
                value="<?php if (isset($row["contactBusinessTel"])) echo $row["contactBusinessTel"]; ?>"
            >
        </div>
    <?php elseif ((strpos($_SERVER['REQUEST_URI'], "view-pc-add") !== false) || (strpos($_SERVER['REQUEST_URI'], "view-pc-update") !== false)) : ?>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user" id="HomeTel" 
                name="HomeTel" placeholder="Home Tel"
                value="<?php if (isset($row["contactHomeTel"])) echo $row["contactHomeTel"]; ?>"
            >
        </div>
    <?php endif; ?>
</div>

<div class="form-group">
    <input type="email" class="form-control form-control-user" id="Email" 
        name="Email" placeholder="Email Address *"
        value="<?php if (isset($row["contactEmail"])) echo $row["contactEmail"]; ?>"
    >
</div>
<div class="form-group">
    <input type="text" class="form-control form-control-user" id="Addr1" 
        name="Addr1" placeholder="Address Line 1 *"
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
            name="City" placeholder="City *"
            value="<?php if (isset($row["contactCity"])) echo $row["contactCity"]; ?>"
        >
    </div>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-user" id="Postcode" 
            name="Postcode" placeholder="Postcode *"
            value="<?php if (isset($row["contactPostcode"])) echo $row["contactPostcode"]; ?>"
        >
    </div>
</div>

<?php // Check if is a the Add Contact or Update Contact page and display the right button text ?>
<?php if ((strpos($_SERVER['REQUEST_URI'], "view-pc-add") !== false) || (strpos($_SERVER['REQUEST_URI'], "view-bc-add") !== false)) : ?>
    <button type="submit" class="btn btn-primary btn-user btn-block">Create Contact</button> 
<?php elseif ((strpos($_SERVER['REQUEST_URI'], "view-pc-update") !== false) || (strpos($_SERVER['REQUEST_URI'], "view-bc-update") !== false)) : ?>
    <button type="submit" class="btn btn-primary btn-user btn-block">Update Contact</button> 
<?php endif; ?>
                                      
<hr>