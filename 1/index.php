<?php

include 'functions.php';

function getCommonWords($string1, $string2)
{
    $words1 = getWords($string1);
    $words2 = getWords($string2);

    return array_unique(array_intersect($words1, $words2));
}

function getWordsCount($string)
{
    $words = getWords($string);

    return count($words);
}

function getWords($string)
{
    $words = explode(' ', $string);

    return array_filter($words);
}

$message = null;
$words = [];

if ($_POST) {
    $s1 = requestPost('string1'); // strlen
    $s2 = requestPost('string2');

    $words = getCommonWords($s1, $s2);
    $message = 'Common words: ';
} else {
    $message = 'Invalid';
}

include 'layout.phtml';