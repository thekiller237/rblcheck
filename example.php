<?php
// Sal Sodano
// www.salscode.com

require("rblcheck.php");

$blockedList = rblcheck("1.2.3.4");
if(count($blockedList) > 0)
{
	// Your IP is blocked somewhere.
	echo "IP is blocked on:\n";
	print_r($blockedList);
}
else
{
	echo "The IP is not blocked.";
}
?>