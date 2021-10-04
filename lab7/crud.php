<?php
include_once 'db.php';

/* code for data insert */
if (isset($_POST['save'])) {

	$tit = $MySQLiconn->real_escape_string($_POST['tit']);
	$aut = $MySQLiconn->real_escape_string($_POST['aut']);
	$year = $MySQLiconn->real_escape_string($_POST['year']);
	$URL = $MySQLiconn->real_escape_string($_POST['URL']);
	$edito = $MySQLiconn->real_escape_string($_POST['edito']);
	$Espe = $MySQLiconn->real_escape_string($_POST['Espe']);

	$SQL = $MySQLiconn->query("INSERT INTO data(tit,aut,year,URL,edito,Espe) VALUES('$tit','$aut','$year','$URL','$edito','$Espe')");


	if (!$SQL) {
		echo $MySQLiconn->error;
	}
}
/* code for data insert */


/* code for data delete */
if (isset($_GET['del'])) {
	
	$SQL = $MySQLiconn->query("DELETE FROM data WHERE id=".$_GET['del']);
	header("Location: registro.php");
}
/* code for data delete */



/* code for data update */
if (isset($_GET['edit'])) {
	
	$SQL=$MySQLiconn->query("SELECT * FROM data WHERE id=".$_GET['edit']);
	$getROW = $SQL->fetch_array();

}

if (isset($_POST['update'])) {
	
	$SQL = $MySQLiconn->query("UPDATE data SET tit='".$_POST['tit']."',aut='".$_POST['aut']."',year='".$_POST['year']."',URL='".$_POST['URL']."',edito='".$_POST['edito']."',Espe='".$_POST['Espe']."' WHERE id=".$_GET['edit']);
	header("Location: registro.php");
}
/* code for data update */

?>