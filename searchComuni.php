<?php
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
$f=fopen("tb_location.csv","r");
$list = array();
$count=0;

while($riga=fgets($f))
{
	$campi=explode(",",$riga);
	$list[$count]=new Comune($campi[0], $campi[1], $campi[5]);
	$count++;
}
$jsonList = json_encode($list);
echo ($jsonList);

//IMPORTANTE !!! una cosa simile a questa ci servirà quando usermo il database quindi per ora lo lascio

//$cercaPer = trim($_GET['term']);
//$cercaPer = setApos($cercaPer . "%");
/*$qry = 	"SELECT ".
"id" .
",UPPER(citta) as citta" .
",UPPER(provincia) as provincia" .
",CONCAT(UPPER(citta), ' (',UPPER(IFNULL(provincia,'')),')') as result" .
",cap " .
"FROM " .
"tbl_locations " .
"WHERE " .
"CONCAT(UPPER(citta), ' (',UPPER(provincia),')') LIKE " .
 $cercaPer . " ".
"ORDER BY " .
"citta " .
"LIMIT " .
"20";*/
//echo $qry;

/*mysqli_set_charset($con, 'utf8');
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,$qry);
$list = array();
$count=0;
while($row = mysqli_fetch_array($result)) {
	$list[$count]=new Comune($row['id'], removeApos($row['result']), $row['cap']);
	$count++;
}
$jsonList = json_encode($list);
echo ($jsonList);
mysqli_close($con);*/
?>