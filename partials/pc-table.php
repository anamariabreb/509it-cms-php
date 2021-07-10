<?php $root=$_SERVER["DOCUMENT_ROOT"]; ?>

<?php 
    include $root . '/dbConn/personalDbConn.php';
    $mysqlConn = new personalDbConn();
    //Connect
    $mysqlConn->connect();


    $result = $mysqlConn->viewContact();               
?>
                       
<?php if ($result->num_rows > 0): ?>                           
    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row["ID"]; ?></td>
            <td><?php echo $row["contactFName"]; ?></td>
            <td><?php echo $row["contactLName"]; ?></td>
            <td><?php echo $row["contactTel"]; ?></td>
            <td><?php echo $row["contactHomeTel"]; ?></td>
            <td><?php echo $row["contactEmail"]; ?></td>
            <td><?php echo $row["contactAddr1"]; ?></td>
            <td><?php echo $row["contactAddr2"]; ?></td>
            <td><?php echo $row["contactCity"]; ?></td>
            <td><?php echo $row["contactPostcode"]; ?></td>
            <td>
                <a href="pc-update.php?id=<?php echo $row["ID"]; ?>" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Update</span>
                </a>
            </td>
            <td>
                <a href="pc-delete.php?id=<?php echo $row["ID"]; ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Delete</span>
                </a>
            </td>
        <tr>
    <?php endwhile; ?>                  
<?php else: ?>                       
    <?php echo "No results"; ?>
<?php endif; ?>
