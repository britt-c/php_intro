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
 if (is_numeric($your_number) != true) {
  echo "Invalid entry...\n";
 }
 if ($your_number < 9 && $your_number > 0) {
	if ($my_number < $your_number) {
	 echo "You cheated!!\n";
	 echo "Pick again..\n";
	 $winner = false;
  } elseif ($my_number == $your_number) {
	 echo "It's a tie!\n";
	 $winner = true;
  } else {
	 echo "HAHA!! I won! You lose!\n";
	 echo "My number was " .  $my_number . "!!\n";
	 exit;
  } 
 } else { 
    echo "Please enter a NUMBER between 0 and 9.";
	  echo "(e.g., 0, 1, 2, 3, 4, 5, 6, 7, 8, 9)\n";
  }
}
?>
