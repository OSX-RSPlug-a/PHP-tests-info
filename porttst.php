<?php
 $host_connection = 'exemplo.com'; 
 $ports_number = array(21, 25, 80, 81, 110,143, 443, 3306); 

foreach ($ports_number as $port)
{
$connection_check = @fsockopen($host_connection, $port);

if (is_resource($connection_check))
{
echo '<h5>' . $host_connection . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp')     . ') is open now.</h5>' . "\n";

fclose($connection_check);
}

else
{
 echo '<h5>' . $host_connection . ':' . $port . ' is not open now.</h5>' . "\n";
   }
 }
 ?>
