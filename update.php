<?php
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");

$p = json_decode($_REQUEST["hook"]);
$fp = fopen("./log.txt", 'a');
$lastcommit = $p->push_data->commits[count($js->push_data->commits) - 1]; 

if(!isset($_REQUEST['cdsuifninuo23ioidnsvnuvdbicdnnjcjssdcn'])) {
die("AUTHORIZE FIRST");
}

print_r($_SERVER);

//if (strstr($lastcommit->message, "release")) // 这里意为：如果最后的commit包含"release"则进行自动发布。
//{ 

function exec_print($one)
{
    $res4="";
    echo "Executing : $one <br>\n";
    echo exec($one , $res4); 
    echo "<code>";
    for($i=0;$i<count($res4) && $i<50;$i++){
        echo 	$res4[$i] . "<br>";
    }
    echo "</code>";
}

function pull_dir($dir_one) 
{ 
    echo "<p>";
    echo "***************************************************<br>\n";
    echo "*** Pulling $dir_one ****<br>\n";
    echo "***************************************************<br>\n";
    echo "<div><br>\n---- PWD ----- \n\n<br></div>\n";
    exec_print("pwd"); 
    echo "<br>\n---- PRINTENV ----- \n\n<br>\n";
    exec_print("printenv");
    echo "<br>\n---- CD ----- \n\n<br>\n";
    exec_print("cd ". $dir_one); 
    echo "<br>\n---- GIT ----- \n\n<br>\n";
    exec_print("cd ". $dir_one . " && git pull origin master"); 
    echo "<br>\n---- GIT LOG ------\n\n<br>";
    exec_print("cd ". $dir_one . " && git log --graph");
    echo "<br>\n---- Pull Dir ($dir_one) Success ----<br>\n";
    echo "***************************************************<br>\n";
    echo "***************************************************<br>\n";
    echo "***************************************************<br>\n";
    echo "</p>";
}

pull_dir("/home/xc5/git/html");
pull_dir("/home/xc5/git/xcalibyte");

fwrite($fp, "※" . date('Y-m-d H:i:s') . "\t" . $lastcommit->message . "\t" . $lastcommit->author->name . "\n"); 

fclose($fp);

?>