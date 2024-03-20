<?php
require_once __DIR__ . '/getConnection.php';


$connection = getConnection();

$sql = <<<SQL

INSERT INTO customers(id, name, email)
VALUES ('putra', 'putra', 'putra@test.com');
SQL;
$connection->exec($sql);
$connection = null;
