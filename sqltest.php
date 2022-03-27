<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:jnexincorp.database.windows.net,1433; Database = jnexdb", "jnexadmin", "5Members");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
$sql = "INSERT INTO `Persons`(`PersonID`, `LastName`, `FirstName`, `Address`,'City')
VALUES(:id,:lastname,:firstname,:add,:city)";
 $stm->execute(array(':id' => 2 , ':lastnamename' => 'Saquib' , ':firstname' => 'Rizwan' , ':add' => 'saquib.rizwan@cloudways.com',':city '=>'pune'));
 
    echo "New record created successfully";
?>	
	
?>