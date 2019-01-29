B1;95;0c<?php
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
$p = json_decode($_REQUEST["hook"]); // json转换
$fp = fopen("./log.txt", 'a');
$lastcommit = $p->push_data->commits[count($js->push_data->commits) - 1]; 
print_r($_SERVER);
    echo "<br>\n---- PRINTENV ----- \n\n<br>";
    echo exec("printenv", $res2);
    var_dump($res2);
    echo "<br>\n---- RUNNING : sudo supervisor restart all ----- \n\n<br>";
    echo exec("sudo supervisorctl restart all ", $res3); 
    echo "\n<br>";
    var_dump($res3);
    echo "<br>";
    echo "cd /home/nginx/quiz/quizapp-be && git pull ; git log --graph --oneline";
    echo exec("cd /home/nginx/quiz/quizapp-be && git pull ; git log --graph --oneline", $res4); 
    for($i=0;$i<count($res4);$i++){
        echo 	$res4[$i] . "<br>\n";
    }
    echo "<br>";
    fwrite($fp, "※" . date('Y-m-d H:i:s') . "\t" . $lastcommit->message . "\t" . $lastcommit->author->name . "\n"); // 进行记录

fclose($fp);

?>