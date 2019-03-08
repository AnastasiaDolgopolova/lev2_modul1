<?php
include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';

$id = $_GET['id'];
$post = $db->getOne('post', $id);
//dd($post);

?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="col-lg-9">
    <h2 class="mb-4"> <i><?=  $post['title']; ?></i> </h2>
    <div class="row">
        <div class="col-12">
            <div class="post mb-4">
              
                <div class="post-content">
                    
                    <hr>
   					<h3><?php echo $post['description'] ?></h3>
  
  					 <hr>
   					<?php echo $post['text'] ?>
   					 <hr>
                    <p>Запись добавлена: <b><?=$post['date'] ?></b></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
