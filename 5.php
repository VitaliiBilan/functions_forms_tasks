 */<?php
 function filesInDir($dir, $fileName)
 {
     if (is_dir($dir)) {
         if ($handle = opendir($dir)) {
             while (false !== ($file = readdir($handle))) {
                 if ($file != "." && $file != ".." && !is_dir($file) && strstr($file, $fileName) == true) {
                     echo "{$file} <br> ";
                 }
             }
             closedir($handle);
         }
     } else {
         die;
     }
 }
 filesInDir('c:/xampp/htdocs/functions_forms_tasks', "5");