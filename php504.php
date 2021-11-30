<?php
$name = array("Thailand" , "Malaysia");
$emp = array
(
    array(1,"Thailand",66),
    array(2,"Singapore",55),
    array(3,"malatsia",44),

);
for($row = 0; $row<=2; $row<=++;){
    for($col=0; $col<=2; $col++){
        echo $emp[$row][$col]." ";
    }
    echo "<br />";
}
foreach($emp as $raw){
    foreach($emp as $col){
        echo $emp[$row][$col]." ";
}
    echo "<br />";
}
foreach($name as $i){
    echo $i. "<br />";
}
?>