<?php 

echo "Let's play a game!\n";
echo "Higher number wins.\n";
echo "Pick a number between 0 and 9\n";

$my_number = rand(0, 9);
$your_number = rtrim(fgets(STDIN));
echo "My number: " .  $my_number . "\n";
echo "Your number: " . $your_number . "\n";

 if ($your_number > 9 || $your_number < 0) {
  echo "Please type a number between 0 and 9\n";
	exit;
 }
 
 if ($my_number < $your_number) {
	echo "You cheated!!\n";
	echo "Pick again..\n";
 } elseif ($my_number == $your_number) {
	echo "It's a tie!\n";
	exit;
 } else {
	echo "HAHA!! I won! You lose!\n";
	echo "My number was " .  $my_number.to_s . "!!\n";
	exit;
 }

?>
