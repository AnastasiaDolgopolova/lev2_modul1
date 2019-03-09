<?php 
include  __DIR__ .'/include_header.php';
?>


<div class="container">
    <div class="row">
      <div class="col-md-8 offest-md-2">
        <a href="/add" class="btn btn-success">Add Post</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Image</th>
              <th scope="col">Date</th>
              <th scope="col">Actions</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach($posts as $post):?>
               <tr>
              <th scope="row"><?php echo $post['id'];?></th>
              <td><a href="/show?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></td>
              <td><img src="uploads/<?php echo $post['picture'];?> " width="100"></td>
              <td><?php echo $post['date'];?></td>
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