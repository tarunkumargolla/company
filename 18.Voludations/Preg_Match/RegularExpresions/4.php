<?php
echo "we can check mobile no start with 9,8,7 digit or not","<br>";
if(isset($_POST["s1"]))
{
    $mobile=$_POST["mno"];
    if(preg_match("/^9\d{9}$/",$mobile)||preg_match("/^8\d{9}$/",$mobile)||preg_match("/^7\d{9}$/",$mobile))
    {
        echo "Valid";
    }
    else
    {
        echo "Invalid";
    }
}
?>
<html>
    <body>
        <form method="POST">
            Enter MobileNo:<input type="text"name="mno"/>
            <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>