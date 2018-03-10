<?php

$str = $_POST['comment'];
function reverse ($str){
    $res1 = preg_split('//u',$str,-1,PREG_SPLIT_NO_EMPTY);
    krsort($res1);

    echo $res2 = implode($res1);
}
reverse("$str");

include 'layout.phtml';