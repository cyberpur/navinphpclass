<?php
$lamp = false; //lamp doesn't work
$plug = readline('plug lamp (YES/NO):');
$plug = strtolower($plug); // strtlower - string to lower case
echo $plug."\r\n";
if ($plug == 'yes')
{
    $switch = true;
}
else {
    $switch = false;
}
if ($switch == true){
    echo 'Lamp Plugged';
}
else {
    echo 'Lamp Unplugged';
}
?>
