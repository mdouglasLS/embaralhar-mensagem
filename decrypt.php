<?php

include './cifra_de_cesar.php';

header('Content-Type: application/json');

$message = $_POST['message'];
$level = $_POST['level'];

$decrypted = decrypt($message, $level);

echo json_encode($decrypted);

function decrypt(string $msg, int $lines)
{
    $msg = utf8_decode($msg);

    $msg = cifraDeCezar($msg, 'decrypt');

    $letters = strlen($msg);
    $columns = $letters / $lines - 1;
    $lines = $lines -1;

    $decrypted  = '';

    $p = 0;
    for($i = 0; $i <= $lines; $i++) {
        for($c = 0; $c <= $columns; $c++) {
            $matriz[$i][$c] = $msg[$p++]; 
        }
    }
    

    $vector = [];
    $returnMsg = '';

    for($i = 0; $i <= $lines; $i++) {
        $pos = $i + 1;
        for($c = 0; $c <= $columns; $c++) {
            if($c == $i || $c > $i) {
                $vector[$pos] = $matriz[$i][$c];
                $pos = $pos + ($lines + 1);  
            }
        }
       
    }

    for($i = 0; $i <= $letters; $i++) {
        if(array_key_exists($i, $vector)) {
            $returnMsg .= $vector[$i];
        }
    }

    $pattern = '/(\/*[0-9]+)*\//';
    
    $pregPattern = preg_match($pattern, $returnMsg, $matches);

    $message = explode($matches[0], $returnMsg);

    return $message[0];
}