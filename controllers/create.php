<?php 
require_once  __DIR__ . '/../views/include_header.php';
?>
    <div class="container">
      <div class="row">
        <div class="col-md-8 offet-md-2">
         <form action="/store" method="POST" enctype="multipart/form-data">
          <div class="form-group">
              <label for="">Title</label>
              <input type="text"  name="title" class="form-control">
          </div>
          <label for="">Description</label>
          <div class="form-group">
            <textarea name="description" class="form-control"rows="2" cols="60" maxlength="250"></textarea>
         </div> 
        <label for="">Text</label>
          <div class="form-group">
            <textarea name="text" class="form-control" rows="10" cols="60"  maxlength="5000"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Add image</label>
          <input type="file" class="form-control-file" name="image">
         </div>
          <div class="form-group">
              <button class="btn btn-success">Add Post</button>
              <a href="/" class="btn btn-info">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>