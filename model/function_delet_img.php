<?php
function deleteImage($delete_img){
        unlink('uploads/'. $delete_img);
    }
?>