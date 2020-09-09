<?php 
$name=$_POST['name'];
$cat=$_POST['cat'];
$link=$_POST['links'];
$conv=$_POST['conv'];
$time=$_POST['time'];
$fp = fopen("data.txt","a");
fwrite($fp,$time);
fwrite($fp,$name);
fwrite($fp, $cat);
fwrite($fp, $link);
fwrite($fp, $conv);
fwrite($fp, "\n\n");
echo "Data Submitted <br>".$name."<br>".$cat."<br>".$link;
fclose($fp)
?>