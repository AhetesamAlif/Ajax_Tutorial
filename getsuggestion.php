<?php
// Array with names
$a[] = "Batiaghata";
$a[] = "Dacope";
$a[] = "Dumuria";
$a[] = "Dighalia";
$a[] = "Koyra";
$a[] = "Paikgachha";
$a[] = "Phultala";
$a[] = "Rupsha";
$a[] = "Terokhada";
$a[] = "Daulatpur";
$a[] = "Khalishpur";
$a[] = "Khan Jahan Ali";
$a[] = "Kotwali";
$a[] = "Sonadanga";
$a[] = "Harintana";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>