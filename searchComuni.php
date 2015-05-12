<?php
require_once('connection.php');
class Comune
{
	
	public $label='';
	public $value='';
	public $cap="";

	// method declaration
	public function __construct($v, $l, $c) {
		$this->label = $l;
		$this->value = $v;
		$this->cap = $c;
	}
}

$cercaPer = trim($_REQUEST['term']);
$cercaPer = $cercaPer . "%";
$qry = 	"SELECT ".
"id" .
",UPPER(citta) as citta" .
",UPPER(provincia) as provincia" .
",CONCAT(UPPER(citta), ' (',UPPER(IFNULL(provincia,'')),')') as result" .
",cap " .
"FROM " .
"locations " .
"WHERE " .
"CONCAT(UPPER(citta), ' (',UPPER(provincia),')') LIKE '" .
 $cercaPer . "' ".
"ORDER BY " .
"citta " .
"LIMIT " .
"20";
//echo $qry;


$result = mysql_query($qry);
$list = array();
$count=0;
while($row = mysql_fetch_array($result)) {
	$list[$count]=new Comune($row['id'], $row['result'], $row['cap']);
	$count++;
}
$jsonList = json_encode($list);
echo ($jsonList);
