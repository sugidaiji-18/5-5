<?php
try{
    $db = new PDO('mysql:host=mysql;dbname=mysql','root','12345678');
    $msg = 'Connected To Mysql';
    print $msg;
}catch(PDOException $e){
    $msg = 'Failed connect to MySQL('.$e->getMessage().')';
    print $msg;
}
?>
