<?php 

    getenv('PORTA');
    
    $val = rand(1,100);
    echo "Server Id: " . $val."<br>";
    echo "Porta: " . getenv('PORTA');
?>
