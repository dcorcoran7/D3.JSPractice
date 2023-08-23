<!DOCTYPE html>

<html>
    <head>
        <title>
            HW 15
        </title>
    </head>    

    <body>
        <form method="get" action="showProducts.php">
          
          <select name = "supplierID">
            <?php 
              require_once("getDatadb.php"); 
              $sql = "SELECT SupplierID FROM suppliers";
              $result = $mydb->query($sql);

              while($row = mysqli_fetch_array($result)){
                echo "<option>" . $row['SupplierID'] . "</option>";
              }
              
            ?>
          </select>
          <br><br>
          
          <input type="submit" name="submit" value="Submit" />

        </form> 

        <div id = "contentArea">&nbsp;</div> 

    </body>
</html>