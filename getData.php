<?php
    require_once("getDatadb.php");

    $supplid = 0;
    if(isset($_GET['sid'])) $supplid=$_GET['sid'];

    $sql = "select ProductName as name, (UnitsInStock*UnitPrice) as value from products where SupplierID = $supplid";

    $result = $mydb->query($sql);

    $data = array(); 
    for($x = 0; $x < mysqli_num_rows($result); $x++) {
        $data[] = mysqli_fetch_assoc($result);
    }

    echo json_encode($data); 
?>