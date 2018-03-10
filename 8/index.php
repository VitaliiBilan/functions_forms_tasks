<?php
$file = "comments-mat.txt";
$arrPorno = array("fuck", "fuck you");
if (!empty($_POST["comment"])) {
    $resText = ($_POST['comment']);
    $arr1 = explode(" ", $resText);
    foreach ($arr1 as $key1 => $item1) {
        foreach ($arrPorno as $key2 => $item2){
            if($item2 == $item1){
                $arr1[$key1] = "Censoret!";
            }
        }
    }
    $resText = strip_tags(implode(" ", $arr1)) . PHP_EOL;
    file_put_contents($file, $resText, FILE_APPEND);
    header('Location: index.php');
}

$handle = @fopen($file, "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo "<tr><td>";
        echo $buffer . "<br>";
        echo "</td></tr>";
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
include 'layout.phtml';