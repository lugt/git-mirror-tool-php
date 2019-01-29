<?php
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
$p = json_decode($_REQUEST["hook"]); // json转换
$fp = fopen("./log.txt", 'a');
$lastcommit = $p->push_data->commits[count($js->push_data->commits) - 1]; // 获取最后的commit
print_r($_SERVER);
//if (strstr($lastcommit->message, "release")) // 这里意为：如果最后的commit包含"release"则进行自动发布。
//{ 
    echo "<br>\n---- PWD ----- \n\n<br>";
    echo exec("pwd",$res1); // 进入目录
    print_r($res1);
    echo "<br>\n---- PRINTENV ----- \n\n<br>";
    echo exec("printenv", $res2); // 进入目录
    print_r($res2);
    echo "<br>\n---- CD ----- \n\n<br>";
    echo exec("cd ./"); // 进入目录
    echo "<br>\n---- GIT ----- \n\n<br>";
    echo exec("git pull origin master", $res3); // 进行git拉取，前提是使用了ssh
    print_r($res3);
    echo "<br>";
    echo exec("git log --graph", $res4); // 进行git拉取，前提是使用了ssh
    for($i=0;$i<count($res4);$i++){
        echo 	$res4[$i] . "<br>";
    }
    echo "<br>";
    fwrite($fp, "※" . date('Y-m-d H:i:s') . "\t" . $lastcommit->message . "\t" . $lastcommit->author->name . "\n"); // 进行记录
    echo "Pull Success";
    echo exec("git push github master", $res3); // 进行git拉取，前提是使用了ssh
    var_dump($res3);
//} else {
//    fwrite($fp, date('Y-m-d H:i:s') . "\t" . $lastcommit->message . "\t" . $lastcommit->author->name . "\n");
//}

fclose($fp);

?>