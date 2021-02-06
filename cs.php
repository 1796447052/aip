<?php
require_once("./functions.php");
$flag = sendMail($_GET["email"],$_GET["title"],$_GET["nr"]);
if($flag){
    echo "发送邮件成功！";
}else{
    echo "发送邮件失败！";
}
?>
