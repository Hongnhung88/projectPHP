<?php 
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=localhost;dbname=shop_ping","root","");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>