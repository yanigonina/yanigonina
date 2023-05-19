<?php
$serverName = "Имя сервера";
$connectionInfo = array("Database"=>"БД", "UID"=>"Пользователь", "PWD"=>"Пароль");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
 
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
     
}
 
$sql = "INSERT INTO Пользователи (логин, пароль) VALUES (?, ?)";
$params = array("$_POST[логин]", "$_POST[пароль]");
 
$stmt = sqlsrv_query( $conn, $sql, $params);
 
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true)); 
}else{
     echo "";
}
?>