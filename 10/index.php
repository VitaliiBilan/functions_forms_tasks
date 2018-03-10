<?php

if (!empty($_POST["comment"])) {
    $text = $_POST['comment'];
}else{
    echo ("Вы не вели строку!<br>");
    $text = "";
}
function unicWords($text) {
    $res1 = explode(" ", $text);
    sort($res1);
    $tmp = "";
    foreach ($res1 as $key => $item) {
        if ($res1[$key] == $tmp) {
            unset($res1[$key]);
        } else {
            $tmp = $res1[$key];
        }
    }
    echo "Количество уникальных слов в тектсе - " . $res = count($res1);
}
unicWords($text);

include 'layout.phtml';