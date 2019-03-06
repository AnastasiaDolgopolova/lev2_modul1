<?php
$config = include __DIR__ . '/../config.php';
include __DIR__ . '/../database/QueryBuilder.php';
include __DIR__ . '/../database/Connection.php';

//$pdo = Connection::make();

return new QueryBuilder(
	Connection::make($config['database'])
);

?>