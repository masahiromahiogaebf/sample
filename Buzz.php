<?php

for($i = 0;$i<=100;$i++){
    if($i % 3 === 0){
        echo "Fizz";
    }elseif($i % 5 === 0){
        echo "Buzz";
    }
    echo $i;
    echo PHP_EOL;
}
?>
<?php 

function sum_number(){
    $result = 0;
    for($i=1;$i<=10;$i++){
        $result = $result + $i;
    }
echo $result . PHP_EOL;    
}
