<?php 
$dbhost = 'localhost';
$dbuser = 'id13523093_root';
$dbpass ='PcwXcYTD1(n_3~}<';
$dbname = 'id13523093_galore_database';

$connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connection){
    die("Could not connect ...... ".mysqli_connect_error());

}
else{
    echo "connection found";
}
// return $connection;
// }