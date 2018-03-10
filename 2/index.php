<?php

function sorting($sort)
{
    function mySort($a, $b)
    {
        if (mb_strlen($a) < mb_strlen($b)) {
            return 1;
        } elseif (mb_strlen($a) > mb_strlen($b)) {
            return -1;
        } else {
            return 0;
        }
    }
    $words = explode(" ", $sort);
    usort($words, 'mySort');
    echo "ТОП 3 длинных слова:<br>";
    for ($i = 0; $i < 3; $i++) {
        if (isset($words[$i])) {
            echo $words[$i] . "<br>";
        }
    }
}
if (isset($_POST['myText'])) {
    sorting($_POST['myText']);
}
include 'layout.phtml';