<?php
require_once  __DIR__ . '/../views/include_header.php';

include __DIR__ . '/../model/functions.php';
$db =include __DIR__ . '/../model/database/start.php';

$id = $_GET['id'];
$post = $db->getOne('post', $id);
//dd($post);

?>


<div class="col-lg-9">
    <h2 class="mb-4"> <i><?=  $post['title']; ?></i> </h2>
    <div class="row">
        <div class="col-12">
            <div class="post mb-4">
              <div class="post-image mr-3 ">
                   <img src="/../uploads/<?=$post['image'] ?>" alt="" width="400" >    
                </div>
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
