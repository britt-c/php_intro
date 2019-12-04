<?php 
echo "\n";
echo "\n";
echo "♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ \n";
echo "***********!!LETS PLAY A GAME!!!**********\n";
echo "***********!!HIGHER NUMBER WINS!**********\n";
echo "♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ ♥️ \n";
echo "\n";
echo "First, what's your name?\n";
$player = rtrim(fgets(STDIN));
echo "Tots McGotes excited to meet you, " . strtoupper($player) . "!!\n";
echo "I'm Control_Flow, or C_Flow for short.👋🏼\n";

$winner = false;
while($winner != true) {
 echo "\n";
 echo "🎰   🎰   🎰   🎰   🎰   🎰   🎰   🎰   🎰   🎰\n";
 echo "\n";
 echo "Anyways, pick a number between 0 and 9!\n";

 $my_number = rand(0, 9);
 $your_number = rtrim(fgets(STDIN));
 
 if (is_numeric($your_number) != true){
  echo "\n";	
	echo "😤 😤 😤 😤 😤 😤 😤 😤 😤 😤 😤 😤 😤 😤 😤 😤\n";
	echo "\n";
	echo "Ew... " . strtoupper($player) .  ", don't be annoying!\n";
	echo "Enter a valid number!\n";
	echo "\n";
 } elseif ($your_number <= 9 && $your_number >= 0) {
	if ($my_number < $your_number) {
	  echo "\n";
		echo "✋🏼 🛑 🛑 🛑 🛑 🛑 🛑 🛑 🛑 🛑 🛑 ✋🏼 \n";
	  echo "\n";
		echo "You cheated, " . strtoupper($player)  . "!!\n";
	  echo "Don't do that!\n";
	  echo "UGHHHH..\n";
	  echo "\n";
  } elseif ($my_number == $your_number) {
	  echo "\n"; 
		echo "✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨\n";
		echo "OMG, " . strtoupper($player) . " no way!\n";
		echo "My number was " . $my_number . " too!!\n";
		echo "Twinsies!!👯\n";
		echo "✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨✨\n";
		echo "\n";
		echo "Want to play again?\n";
		echo "Yes/No?\n";
		$answer = rtrim(fgets(STDIN));
		$result = strtolower($answer);
			 switch ($result) {
			case "yes":
				echo "Great!\n";
				break;
			case "no":
				echo "Bye-bye\n";
				exit;
			default:
				echo "Invalid Grade";
				exit;
		}
	} elseif ($my_number > $your_number) {
	  echo "\n";	
		echo "🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇🥇\n";	
		echo "I win because my number was " . $my_number . "!\n";
		echo "And your number was only " . $your_number . "!\n";
		echo "And in this game...BIGGER is better.\n";
		echo "\n";
		echo "No hard feelings. Bye, " . strtoupper($player) . "!\n";
		echo "\n";
	  echo "\n";
		echo "\n";
		echo "☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️  \n";
		echo "☹️ ☹️ ☹️ 😢 " . strtoupper($player) . " IS A LOSER 😢☹️ ☹️ ☹️ \n";
		echo "☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️  \n";
		echo "\n";
		exit; 
	}
 } else {
	  echo "❣️   ❣️   ❣️   ❣️    ❣️   ❣️   ❣️   ❣️   ❣️   ❣️   ❣️   ❣️ \n";
		echo "Ummm, like choose from thses #'s ONLY!!!\n";
		echo "Gosh!\n";
		echo "[1, 2, 3, 4, 5, 6,7, 8, 9, 0]\n";
 }
} 
?>



