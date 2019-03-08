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
            <textarea name="text" class="form-control" rows="13" cols="60"  maxlength="5000"></textarea>
        </div>
        <div class="custom-file my-3">
            <input type="file" class="custom-file-input" id="customFile" name="file">
            <label class="custom-file-label" for="customFile">Choose picture</label>
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