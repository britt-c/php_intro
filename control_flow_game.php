<?php 

echo "Let's play a game!\n";
echo "Higher number wins.\n";

$winner = false;
while($winner != true) {
 echo "Pick a number between 0 and 9\n";

 $my_number = rand(0, 9);
 $your_number = rtrim(fgets(STDIN));
 echo "My number: " .  $my_number . "\n";
 echo "Your number: " . $your_number . "\n";
 if (is_numeric($your_number) != true){
	echo "INVALID ENTRY\n";
 } elseif ($your_number <= 9 && $your_number >= 0) {
	if ($my_number < $your_number) {
	 echo "You cheated!!\n";
	 echo "Pick again..\n";
  } elseif ($my_number == $your_number) {
	 echo "It's a tie!\n";
	 $winner = true; 
	} elseif ($my_number > $your_number) {
		echo "I win because my number was " . $my_number . "!\n";
		echo "And your number was " . $your_number . "!\n";
		echo "And in this game...bigger is better.\n";
	  exit;
	}
 } else {
		echo "Choose from the following #'s ONLY!!!\n";
		echo "[1, 2, 3, 4, 5, 6,7, 8, 9, 0]\n";
 }
}
?>
