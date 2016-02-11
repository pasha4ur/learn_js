<?php
    header('Content-type:application/json;charset=utf-8');
    header("Cache-Control: no-store; max-age=0 ");
    echo json_encode(json_decode($_POST['data']));
?>