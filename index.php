
<div class="table">
<h1>
	<a href="//camelexamples.com">Camel Examples .com</a> 
</h1>
<?php


$routes = ["ftp","ftps","http","https","ssh","imap","smtp","pop3","rest"];



$table = ["key1"=>[1,2,3,4],
		  "key2"=>[2,3,4,5],
		  "key3"=>[3,4,5,6],
		  "key4"=>[4,5,6,7]
		 ];

$table = [];
foreach($routes as $key){
	$table[$key] = [];
	foreach($routes as $subkey){
        	$table[$key][$subkey] = $key . "2" . $subkey;
    }
}
	
//open table
echo '<table>';

//our control variable
$first = true;

foreach($table as $key1 => $val1) {
    //if first time through, we need a header row
    if($first){
        echo '<tr><th></th>';
        foreach($val1 as $key2 => $value2){
            echo '<th>'.$key2.'</th>';
        }
        echo '</tr>';

        //set control to false
        $first = false;
    }

    //echo out each object in the table
    echo '<tr><td>'.$key1.'</td>';
    foreach($val1 as $key2 => $value2){
        echo '<td><a href="#">'.$value2.'</a></td>';
    }
    echo '</tr>';
}

echo '</table>';


$out  = "";
$out .= "<table >";

foreach($table as $key => $element){
    $out .= "<tr>";
    foreach($element as $subkey => $subelement){
        $out .= "<td><a href='#'>$subelement</a></td>";
    }
    $out .= "</tr>";
}
$out .= "</table>";
// echo $out;

?>
</div>

<style>
	table td,
	table th { 
		margin: 5px;
		border: 1px solid gray;
		padding: 9px;
		background-color: #fff;
		font-weight: bolder;
		font-size: 20px;
	}
	body {
		background-color: #777;
	}
	
	body .table {
		margin: 50px 50px;
	}
	
</style>
