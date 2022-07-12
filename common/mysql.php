<?php
 function Connect($config = array()){
    $conn = mysqli_connect($config['host'], $config['user'], $config['pass'], $config['db']);
    mysqli_set_charset($conn, $config['encoding']);

    return ($conn);
 }

function Execute($sql, $conn){
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;
}

function Execute_query($sql, $conn){
    
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        do{
            $rows[] = $row;
        }
        while( $row = mysqli_fetch_array($result, MYSQLI_BOTH));
    }
    else{
        $rows = null;
    }
    mysqli_free_result( $result );
    return $rows;
}

function Close($conn){
    mysqli_close($conn);
    unset($conn);
}
