<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=HW4-3;charset=utf8', 'root', 'mysql');
//    $db = new PDO('mysql:host=localhost;dbname=rmakarov;charset=utf8', 'rmakarov', 'neto1741');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

