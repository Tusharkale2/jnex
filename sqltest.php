<?php
    $serverName = "jnexincorp.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "janexdb", // update me
        "Uid" => "jnexadmin", // update me
        "PWD" => "5Members" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "insert into Persons values(2,'abc','abc','abc','pune');";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row. PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
	
?>
