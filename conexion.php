<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexion = "sql11.freemysqlhosting.net:3306";
$database_conexion = "sql11525356";
$username_conexion = "sql11525356";
$password_conexion = "kq7kpWFZD7";
$conexion = mysql_pconnect($hostname_conexion, $username_conexion, $password_conexion) or trigger_error(mysql_error(),E_USER_ERROR); 
?>