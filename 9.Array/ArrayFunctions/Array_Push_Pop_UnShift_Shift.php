<?php
echo "-----------------------","<br>";
echo "Using Array_push()","<br>";
echo "we can add array values in last","<br>";
echo "-----------------------","<br>";
$a=array(90,10);
echo count($a),"<br>";
echo print_r($a),"<br>";
array_push($a,30);
echo count($a),"<br>";
echo print_r($a),"<br>";
array_push($a,70,40,20);
echo count($a),"<br>";
echo print_r($a),"<br>";
echo "-----------------------","<br>";
echo "Using Array_pop()","<br>";
echo "we can remove array values in last add","<br>";
echo "-----------------------","<br>";
array_pop($a);
array_pop($a);
array_pop($a);
echo count($a),"<br>";
echo print_r($a),"<br>";
echo "-----------------------","<br>";
echo "Using Array_Unshift()","<br>";
echo "we can add array values in first from array","<br>";
echo "-----------------------","<br>";
array_unshift($a,90);
echo count($a),"<br>";
echo print_r($a),"<br>";
echo "-----------------------","<br>";
echo "Using Array_shift()","<br>";
echo "we can remove values in array first from array)","<br>";
echo "-----------------------","<br>";
array_shift($a);
echo count($a),"<br>";
echo print_r($a),"<br>";
?>