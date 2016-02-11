<?php
$result = '<p>Answer from PHP: </p><ul>';
foreach ($_GET as $key=>$var){
    $result .= '<li>' . $key . ": " . $_GET[$key] . '</li>';
}

header('Content-type:text/html;charset=utf-8');
header("Cache-Control: no-store; max-age=0 ");
echo $result.'</ul>';
?>