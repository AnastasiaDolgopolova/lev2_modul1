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
    <title>Create Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 offet-md-2">
         <form action="/update?id=<?php echo $post['id'];?>" method="POST" >
          <div class="form-group">
              <label for="">Title</label>
              <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
          </div>

          <div class="form-group">
              <button class="btn btn-warning">Edit Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>