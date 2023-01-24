<?php

include './cifra_de_cesar.php';

header('Content-Type: application/json');

$message = $_POST['message'];
$level = $_POST['level'];

$encrypted = encrypt($message, $level);

echo json_encode($encrypted);

function encrypt(string $msg, int $lines): string
{

    $msg = cifraDeCezar($msg, 'encrypt');

    $letters = strlen($msg);

    $msg = $msg . '/*' . $letters . '*/';
 
    $letters = strlen($msg);

    $columns = floor($letters / $lines) - 1;

    $lines = $lines -1;
    $returnMsg = '';

    for($i = 0; $i <= $lines; $i++) {
        
        $pos = $i + 1;

        for($c = 0; $c <= $columns + $lines; $c++) {
            
        
            if($c == $i) {
                $returnMsg .= $msg[$c];
            }
            
            if($c < $i) {
                $returnMsg .= rand(0,9);
            }
            
            if($c > $i) {
            $pos = $pos + $lines;
                $returnMsg .= $msg[$pos++] ?? rand(0,9);
            }
            
        }

    }

    return utf8_encode($returnMsg);
}