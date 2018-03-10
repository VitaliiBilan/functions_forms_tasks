<?php
function filesInDir($dir)
{
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && !is_dir($file)) {
                    echo "{$file} <br> ";
                }
            }
            closedir($handle);
        }
    } else {
        die;
}
}
filesInDir('c:/xampp/htdocs/functions_forms_tasks');