<?php
    $str = "文字列です。"; // $strはstring（文字列）型
    $int_number = 4; // $int_numberはinteger（整数）型
    $arr = array(1,2,3,4); // $arrはarray（配列）型
    $null = NULL;
    $boolean = true;
    

    echo gettype($str) . PHP_EOL;
    echo gettype($int_number) . PHP_EOL;
    echo gettype($arr) . PHP_EOL;
    echo gettype($null) . PHP_EOL;
    echo gettype($boolean) . PHP_EOL;
?>
<?php
$input_number = 2;

if($input_number % 2 ==0 ){
    echo $input_number . "は奇数です" . PHP_EOL;
}else{
    echo $input_number . "は偶数です" . PHP_EOL;
    
}