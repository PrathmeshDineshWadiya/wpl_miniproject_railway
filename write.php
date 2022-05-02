<?php
$filename = "C:\File Handling\welcome.txt";    
$file = fopen($filename, 'a+');
$text = "\nPHP stands for Hypertext Preprocessor";
fwrite($file, $text);     //writing contents to the file
fclose($file);    //close file    
$file = fopen($filename, 'r');
if ($file = fopen("$filename", "r")) 
{
while(!feof($file)) 
{
$line = fgets($file);
echo ("$line");
echo ("<br>");
}
fclose($file);
}    
?>