<?php
echo "Enter a word: ";
$input = rtrim(fgets(STDIN));
$word = $input;
echo "Your word is " . strlen($word) . " letters long!!\n";
function flip($word) {
if (strlen($word) >= 5) {
return strrev(substr($word, 0, 4));
} else {
return $word;
}
}

$flipped= flip($word);
echo $flipped;
echo "\n"
?>
