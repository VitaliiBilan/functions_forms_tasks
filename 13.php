<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
echo "<b>Входящий текст:</b> {$string}<br>";
function count_unic_item($text){
    $res = explode(" ", $text);
    $res = array_count_values($res);
    array_multisort($res, SORT_DESC);
    echo "<br>";
    foreach($res as $key => $item){
        echo $key . " - " . $item . "<br>";
    }
    return $res;
}
var_dump(count_unic_item($string));