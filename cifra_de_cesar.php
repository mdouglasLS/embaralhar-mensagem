<?php

function cifraDeCezar(string $msg, string $option) {

  $method = [
    'encrypt' => 7,
    'decrypt' => 19
  ];
  
  $letters = strlen($msg);
  $alfabeto = range('a','z');
  $msgReplace = '';

  $pattern = "/[a-z]/";

  for($i = 0; $i <= $letters - 1; $i++) {

    if(preg_match($pattern, $msg[$i])) {
      $indexLetra = array_search($msg[$i], $alfabeto);

      $pos = $indexLetra + $method[$option];

      if(($indexLetra + $method[$option]) > 25) {
        $pos = ($indexLetra + $method[$option]) - 26;
      }

      $msgReplace .= $alfabeto[$pos];
      
    }else {
      $msgReplace .= $msg[$i];
    }

      
  }

  return $msgReplace;

}