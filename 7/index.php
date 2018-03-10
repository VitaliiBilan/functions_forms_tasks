<?php
$file = "comments.txt";

if (!empty($_POST["comment"])) {
    $resText = ($_POST['comment']) . PHP_EOL;
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