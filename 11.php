<?php
function text($text){
    $b = '';
    $text = mb_strtoupper(mb_substr($text,0,1)).mb_substr($text,1,strlen($text));
    for($i = 0;$i < mb_strlen($text); $i++){
        if($text[$i] == '.'){
            $text[$i + 2] = mb_strtoupper($text[$i + 2]);
        }
        $b .= $text[$i];
    }
    return $b;
}
$a = 'а васька слушает да ест. a воз и ныне там. a вы друзья как ни садитесь, все в музыканты не годитесь. 
a король-то — голый. a ларчик просто открывался. a там хоть трава не расти.';
echo text($a);