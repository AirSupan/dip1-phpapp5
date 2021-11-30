<?php
    echo "<h1>";
    function add(){
        $a = 10; $b = 5;
        $add = $a + $b; echo "a + b = $add <br/>";
    }add();

    function sub(){
        $a = 10; $b = 5;
        $sub = $a - $b; echo "a - b = $sub <br/>";
    }sub(); 

    function mul(){
        $a = 10; $b = 5;
        $mul = $a*$b; echo "a * b = $mul <br/>";
    }mul();

    function div(){
        $a = 10; $b = 5;
        $div = $a/$b; echo "a / b = $div <br/>";
    }div();

    function per(){
        $a = 10; $b = 5;
        $per = $a%$b; echo "a % b = $per <br/>"; 
    }per();

    echo "</h1>";
?>