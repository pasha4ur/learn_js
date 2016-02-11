<?php
//header('Content-type:application/json;charset=utf-8');
$obj = new stdClass();
foreach ($_GET as $key => $val){
    if ($key!= 'callback'){
        $obj->$key = $_GET[$key];
    }
}
$data =  $_GET['callback'] . '(' . json_encode($obj) . ');';
echo $data;
?>