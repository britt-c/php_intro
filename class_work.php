<?php
echo "Enter a word: ";
$input = rtrim(fgets(STDIN));
$word = $input;
echo "Your word is " . strlen($word) . " letters long!!\n";
if (strlen($word) > 5) {
echo strrev($word);
echo "\n";
} else {
echo $word;
echo "\n";
}
?>
