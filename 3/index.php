<?php
$lenght_world = $_POST['lenght'];
$file = file_get_contents('text.txt');
$arr = (explode(' ', $file));
for ($i = 0; $i < count($arr); $i++) {
    if (mb_strlen($arr[$i]) == $lenght_world){
        unset($arr[$i]);
    }
}
file_put_contents('text_new.txt', implode(" ", $arr));

include 'layout.phtml';