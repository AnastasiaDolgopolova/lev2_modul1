<?php
$db =include __DIR__ . '/../model/database/start.php';

$posts = $db->getAll('posts');
//$users = $db->getAll('users');
//$posts = getAllPosts($pdo) ;

require_once __DIR__ . '/../views/index.view.php';
?>
