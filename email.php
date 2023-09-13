<?php
// Additional array with email suggestions
$emailSuggestions = array(
    "aa@gmail.com",
    "bb@yahoo.com",
    "cc@hotmail.com",
    "dd@example.com",
    "ee@outlook.com"
);

$q = $_REQUEST["q"];

$hint = "";

// Lookup hints from the email suggestions array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    
    foreach ($emailSuggestions as $email) {
        if (stristr($q, substr($email, 0, $len))) {
            if ($hint === "") {
                $hint = $email;
            } else {
                $hint .= ", $email";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
