<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=loja_;host=127.0.0.1;port=3308';
$user = 'root';
$password ='';

$dbh = new PDO($dsn, $user, $password);

?>
