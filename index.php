<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
    $connect_data= "host=localhost port=5432 dbname=postgres user=postgres password=1234";
    $db_connect = pg_connect($connect_data);

    $result = pg_query($db_connect, "SELECT a, b, c FROM numbers");
    $action = $_GET;

    ob_clean();
    ob_end_clean();
    while ($row = pg_fetch_row($result)) {
        echo " $row[0], $row[1], $row[2],";
    }


