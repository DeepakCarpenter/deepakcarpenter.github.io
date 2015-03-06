<?

$host = "localhost";

$username = "zymiart";

$password = "memeke2";
$dbname = "zymiart_dataku";



$connection = mysql_connect($host,$username,$password);
if (!$connection)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");



?>
