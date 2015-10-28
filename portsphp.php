<?php
 
$host_connection = '192.168.0.181'; // domain name
for ($i = 1; $i <= 66000; $i++) {
    $connection_check = @fsockopen($host_connection, $i);
	if (is_resource($connection_check))
	{
		echo '<h1>' . $host_connection . ':' . $i . ' ' . '(' . getservbyport($i, 'tcp')     . ')   PORTA '  .$i.   ' ABERTA .</h1>' . "\n";
		
		//fclose($connection_check);
	}

	else
	{
	 //echo '<h1>' . $host_connection . ':' . $i . '   PORT '.$i. ' IS NOT OPEN .</h1>' . "\n";
	 echo "";
	}
}
	
?>
