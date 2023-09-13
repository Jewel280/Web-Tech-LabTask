<?php
$citySuggestions = array(
    //Bangladesh
    "Dhaka","sylhet","chattogram","cumilla","chadput",

    //Pakistan
    "Islamabad ","Lahor","karachi","Pashware","Faisalabad", "Rawalpindi", "Multan", "Peshawar", "Quetta",

    //USA
    "Washington D.C.","New York City ", "Los Angeles", "Chicago", "Houston", "Philadelphia", "Phoenix", "San Antonio", 
    //UK
    "London", "Birmingham", "Manchester", "Glasgow", "Liverpool", "Leeds", "Edinburgh", "Bristol",
    //Canada
    "Ottawa", "Toronto", "Montreal", "Vancouver", "Calgary", "Edmonton", "Winnipeg", "Quebec",
);
$q = $_REQUEST["q"];

$hint = "";

// Lookup hints from the email suggestions array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    
    foreach ($citySuggestions as $name) {
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
<!--
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





<!--$a[] = "Anna",
    $a[] = "Brittany",
    $a[] = "Cinderella",
    $a[] = "Diana",
    $a[] = "Eva",
    $a[] = "Fiona",
    $a[] = "Gunda",
    $a[] = "Hege",
    $a[] = "Inga",
    $a[] = "Johanna",
    $a[] = "Kitty",
    $a[] = "Linda",
    $a[] = "Nina",
    $a[] = "Ophelia",
    $a[] = "Petunia",
    $a[] = "Amanda",
    $a[] = "Raquel",
    $a[] = "Cindy",
    $a[] = "Doris",
    $a[] = "Eve",
    $a[] = "Evita",
    $a[] = "Sunniva",
    $a[] = "Tove",
    $a[] = "Unni",
    $a[] = "Violet",
    $a[] = "Liza",
    $a[] = "Elizabeth",
    $a[] = "Ellen",
    $a[] = "Wenche",
    $a[] = "Vicky",
?>-->