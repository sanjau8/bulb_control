<?php
$file = "buttonStatus.txt";
$fid = fopen($file,'w+');
if (isset($_POST['ON']))
{

fwrite($fid,"ON");

}
else if(isset($_POST['OFF']))
{

fwrite($fid, "OFF");

}
fclose($fid);

?>


