<?php
declare(strict_types=1);

require 'classes/blackjack.php';



//sesion player;
//sesion dealer;
//blackjack object inside of them
//var this


session_start();


function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
}
whatIsHappening();




$player = new Blackjack();
$dealer = new Blackjack();




$_SESSION['player'] = $player;
$_SESSION['dealer'] = $dealer;


?>
<!DOCTYPE html>
<html>
<head>
    <title>Blackjack Game</title>
</head>
<body>
<h2>Blackjack game</h2>

<?php
if(isset($_GET['hit'])) {
echo($player->Hit());
}
if(isset($_GET['Surrender'])) {
echo($player->Surrender());
}
?>

<form method="get">
<button name="hit" type="submit" value="draw">Hit</button>
<button name="Stand" type="submit" value="hold">Stand</button>
<button name="Surrender" type="submit" value="Surrender">Surrender</button>
</form>
</body>
</html>







