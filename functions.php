<?php
function dd($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
  }

 function clean ($value){

         $value = trim($value);
         $value = stripslashes($value);
         $value = strip_tags($value);
         $value = htmlspecialchars($value);

      return $value;
}

function deleteImage($delete_img){
        unlink('uploads/'. $delete_img);
    }
?>