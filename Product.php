<?php
include("./Model.php");

class Product extends Model{
Public function insert(){
    echo "Product inserted";
}
Public function view(){
    echo "Product view";
}
Public function update(){
    echo "Product updated";
}
Public function delete(){
    echo "Product deleted";
}
}

?>