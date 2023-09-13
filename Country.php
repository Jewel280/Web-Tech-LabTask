<?php
// Additional array with email suggestions
$nameSuggestions = array(
    "Bangladesh",
    "Pakistan",
    "USA",
    "UK",
    "Canada",
    
);

$q = $_REQUEST["q"];

$hint = "";

// Lookup hints from the email suggestions array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    
    foreach ($nameSuggestions as $name) {
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
