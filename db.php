<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass ='';
$dbname = 'galore_database';

$connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connection){
    die("Could not connect ...... ".mysqli_connect_error());

}
else{
    echo "connection found";
}
// return $connection;
// }