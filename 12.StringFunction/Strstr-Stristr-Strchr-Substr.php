<?php
$s="hello world";
echo $s,"<br>";
echo "---------------------------","<br>";
echo "Using strstr()","<br>";
echo "we are retriving String information from selected charecter<br>It's a case sensitive","<br>";
echo "---------------------------","<br>";
echo strstr($s,"w"),"<br>";
echo strstr($s,"l"),"<br>";
echo strstr($s,"r"),"<br>";
echo strstr($s,"L"),"<br>";
echo "---------------------------","<br>";
echo "Using stristr()","<br>";
echo "we are retriving String information from selected charecter<br>It's not a case sensitive","<br>";
echo "---------------------------","<br>";
echo stristr($s,"L"),"<br>";
echo "---------------------------","<br>";
echo "Using strchr()","<br>";
echo "Strchr() is a alies of Strstr()","<br>";
echo "---------------------------","<br>";
echo strchr($s,"w"),"<br>";
echo strchr($s,"l"),"<br>";
echo "---------------------------","<br>";
echo "Using substr()","<br>";
echo "we are retriving part of the String","<br>"; 
echo "---------------------------","<br>";
echo substr($s,2,3),"<br>";
echo substr($s,4),"<br>";
echo substr($s,2),"<br>";
?>