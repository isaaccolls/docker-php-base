<?php
$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'some_dev', '12345678', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query('SHOW VARIABLES like "version"');
$row = $query->fetch();
echo 'MySQL version:' . $row['Value'];
phpinfo();
