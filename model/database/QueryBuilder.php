<?php
class QueryBuilder {

  protected $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }
  function getAll($table) {
   
    $sql = "SELECT * FROM {$table}";
    $statement= $this->pdo->prepare($sql);
    $statement->execute();
    
   return $statement->fetchAll(PDO::FETCH_ASSOC); 
  }

  function getOne($table, $id)
  {
    $sql = "SELECT * FROM posts WHERE id=:id";//{$table}
    $statement = $this->pdo->prepare($sql);
    $statement->bindParam(':id',$id);//bindValue (':id','jhh',1),bindParam (':id',$id)привязывает значение;
    $statement->execute([
    'id' => $id
    ]);//(['id'=>$id]);
    $result = $statement->fetch(PDO::FETCH_ASSOC); 
    return $result;
  }

  public function create($table, $data)
  {
    $keys = implode(',', array_keys($data));
    $tags = ":" . implode(', :', array_keys($data));

    $sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
    //  dd($sql);
    $statement = $this->pdo->prepare($sql);
    $statement->execute($data);

    //dd($statement);
  }

  public function update($table, $data, $id)
  {
    
    $keys = array_keys($data);

    $string = '';

    foreach($keys as $key) {
      $string .= $key . '=:' . $key . ',';
    }
    $keys = rtrim($string, ',');
    $data['id'] = $id;
    $sql = "UPDATE posts SET {$keys} WHERE id=:id";
    $statement = $this->pdo->prepare($sql);
    //$statement->bindValue(':id', $id);
    $statement->execute($data);

  }

   function delete($table, $id)
  {
    $sql = "DELETE FROM {$table} WHERE id=:id";
    $statement = $this->pdo->prepare($sql);
    $statement->execute([
      'id' => $id
    ]);
  }

}

?>