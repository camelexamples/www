<?php

echo "test"

$table = ["key1"=>[1,2,3,4],
                 "key2"=>[2,3,4,5],
                 "key3"=>[3,4,5,6],
                 "key4"=>[4,5,6,7]
           ];

$out  = "";
$out .= "<table>";
foreach($table as $key => $element){
    $out .= "<tr>";
    foreach($element as $subkey => $subelement){
        $out .= "<td>$subelement</td>";
    }
    $out .= "</tr>";
}
$out .= "</table>";

echo $out;
