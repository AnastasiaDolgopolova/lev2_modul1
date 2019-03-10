<?php

require_once  __DIR__ . '/../views/include_header.php';

include __DIR__ . '/../functions.php';
$db =include __DIR__ . '/../database/start.php';

$id = $_GET['id'];
$post = $db->getOne('post', $id);
//dd($post);

?>

    <div class="container">
      <div class="row">
        <div class="col-md-8 offet-md-2">
         <form action="/update?id=<?php echo $post['id'];?>" method="POST" >
          <div class="form-group">
              <label for="">Title</label>
              <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
          </div>
          <label for="">Description</label>
          <div class="form-group">
            <textarea name="description" class="form-control"rows="2" cols="60" maxlength="250" value="<?php echo $post['description'];?>"></textarea>
         </div> 
        <label for="">Text</label>
          <div class="form-group">
            <textarea name="text" class="form-control" rows="10" cols="60"  maxlength="5000" value="<?php echo $post['text'];?>"></textarea>
        </div>
        <div class="form-group">
            <img src="/../uploads/<?=$post['image'] ?>" alt="" width="100" >
            <input type="hidden" name="oldImage" value="<?=getImage($post['image']) ?>">
        </div>
         <div class="form-group">
            <label for="exampleFormControlFile1">Add image</label>
            <input type="file" class="form-control-file" name="image">
         </div>
          <div class="form-group">
              <button class="btn btn-warning">Edit Post</button>
              <a href="/" class="btn btn-info">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>