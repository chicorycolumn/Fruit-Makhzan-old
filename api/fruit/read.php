<?php

include_once '../config/database.php';
include_once '../objects/fruit_class.php';
 
$database = new Database();
$db = $database->getConnection();
 
$fruit = new Fruit($db);
 
$stmt = $fruit->read();
$num = $stmt->rowCount();

if($num>0){
    $fruit_arr=array();
    $fruit_arr["fruit"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $fruit_item=array(
            "id" => $id,
            "name" => $name,
            "quantity" => $quantity,
            "selling_price" => $selling_price,
            "total_sales" => $total_sales,
            "created" => $created
        );
        array_push($fruit_arr["fruit"], $fruit_item);
    }
 
    echo json_encode($fruit_arr["fruit"]);
}
else{
    echo json_encode(array());
}
?>