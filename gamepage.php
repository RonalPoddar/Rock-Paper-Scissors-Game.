<!DOCTYPE html>
<html>
<head>
<title>GAME RESULTS</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<h2> 50 Rounds of STONE | PAPER | SCISSORS </h2>
<h2> Participants - Player 1 | Player 2 | Player 3 | Player 4 </h2>
<?php

function RPS($onePlayer, $anotherPlayer){
if($onePlayer === $anotherPlayer){
return 0;
}
else if($onePlayer === "Rock"){
if($anotherPlayer === "Scissors") {
return 1;
} else {
return 0;
}}
else if($onePlayer === "Paper") {
if($anotherPlayer === "Rock") {
return 1;
}else {
if($anotherPlayer === "Scissors") {
return 0;
}}}
else if($onePlayer === "Scissors") {
if($anotherPlayer === "Rock") {
return 0;
} else {
if($anotherPlayer === "Paper") {
return 1;
}}}}

$Playerschoice = array ('Rock','Paper','Scissors');

$x = 1;
while($x <= 50) {

echo "<br/>Round Number - $x<br/>";

$randomC1 = rand(0,2);
$randomC2 = rand(0,2);
$randomC3 = rand(0,2);
$randomC4 = rand(0,2);

$Player1SC = $Playerschoice[$randomC1];
$Player2SC = $Playerschoice[$randomC2];
$Player3SC = $Playerschoice[$randomC3];
$Player4SC = $Playerschoice[$randomC4];

$p1Vp2 = RPS($Player1SC,$Player2SC);
$p1Vp3 = RPS($Player1SC,$Player3SC);
$p1Vp4 = RPS($Player1SC,$Player4SC);

$p2Vp1 = RPS($Player2SC,$Player1SC);
$p2Vp3 = RPS($Player2SC,$Player3SC);
$p2Vp4 = RPS($Player2SC,$Player4SC);

$p3Vp1 = RPS($Player3SC,$Player1SC);
$p3Vp2 = RPS($Player3SC,$Player2SC);
$p3Vp4 = RPS($Player3SC,$Player4SC);

$p4Vp1 = RPS($Player4SC,$Player1SC);
$p4Vp2 = RPS($Player4SC,$Player2SC);
$p4Vp3 = RPS($Player4SC,$Player3SC);

echo "<table border='1'>
<br/>
<tr>
<th>Player 1</th>
<th>Player 2</th>
<th>Player 3</th>
<th>Player 4</th>
</tr>";

echo "<tr>";
echo "<td>" .$Player1SC."</td>";
echo "<td>" .$Player2SC."</td>";
echo "<td>" .$Player3SC."</td>";
echo "<td>" .$Player4SC."</td>";
echo "</tr>";

echo "<table>";
echo "<br><br /><tr>
    <th>Total</th>
    <th></th>
    <th colspan = 4 >Against</th>
      </tr>";
echo "<tr>
    <td></td>
    <td></td>
    <td>Player 1</td>
    <td>Player 2</td>
    <td>Player 3</td>
    <td>Player 4</td>
  </tr>";
echo "<tr>";
echo "<td rowspan = 4 > Player Wins</td>";
echo "<td>Player 1</td>
    <td>--</td>
    <td>$p1Vp2</td>
    <td>$p1Vp3</td>
    <td>$p1Vp4</td>
  </tr>";
echo "<tr>
    <td>Player 2</td>
    <td>$p2Vp1</td>
    <td>--</td>
    <td>$p2Vp3</td>
    <td>$p2Vp4</td>
  </tr>";
echo "<tr>
    <td>Player 3</td>
    <td>$p3Vp1</td>
    <td>$p3Vp2</td>
    <td>--</td>
    <td>$p3Vp4</td>
  </tr>";
echo "<tr>";
echo "<td>Player 4</td>";
echo "<td>$p4Vp1</td>
     <td>$p4Vp2</td>
     <td>$p4Vp3</td>
     <td>--</td>
     </tr>";
echo "</table>";
$x++;
}
?>

</body>
</html>






