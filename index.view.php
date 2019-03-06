<!doctype html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<title>test</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="/">Homepage</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      
  </div>
</nav>
	<div class="container">
    <div class="row">
      <div class="col-md-8 offest-md-2">
        <a href="/add" class="btn btn-success">Add Post</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($posts as $post):?>
               <tr>
              <th scope="row"><?php echo $post['id'];?></th>
              <td><a href="/show?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></td>
              <td>
                <a href="/edit?id=<?php echo $post['id'];?>" class="btn btn-warning">Edit</a>
                <a href="/delete?id=<?php echo $post['id'];?>"  class="btn btn-danger" onclick="return confirm('are you shure?')">Delete</a>
              </td>
              
            </tr>
            <?php endforeach;?>
           
          </tbody>
        </table>
</body>
</html>