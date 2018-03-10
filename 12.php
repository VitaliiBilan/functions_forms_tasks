<?php
$textin = "А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
	все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть
	трава не расти.";
echo "Входящий текст:</br>{$textin}<br>";
function invert_sent($text) {
    $res = explode('. ', $text);
    krsort($res);
    $resOut = implode(". ", $res);
    return $resOut;
}
echo "Вывод функции:</br> " . invert_sent($textin);