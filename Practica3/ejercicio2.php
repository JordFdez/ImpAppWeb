<?php
print "<h2>Jugdor 1</h2>";
$sumjug1=0;
$sumjug2=0;

for  ($i=0; $i<5; $i++){
    $dado1=rand(1,6);
    $sumjug1+=$dado1;
    print "<img src='img/$dado1.jpg' height='150px' width='150px'>";
}
print "<br>";

print "<h2>Jugdor 2</h2>";
for ($i=0; $i<5; $i++){
    $dado2=rand(1,6);
    $sumjug2+=$dado2;
    print "<img src='img/$dado2.jpg' height='150px' width='150px'>";
}
print "<br>";


print "<h2>Resultado</h2>";
if ($sumjug1 > $sumjug2){
    print "<p>Ha ganado el jugador <b>1</b></p>";
}
else if ($sumjug1 == $sumjug2){
    print "<p><b>Empate</b>, los dos jugadores han obtenido el mismo resultado.</p>";
}
else{
    print "Ha ganado el jugador <b>2</b>";
}

?>
