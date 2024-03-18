<?php 
for ($x = 0; $x <= 10; $x++){
    echo"Numero: $x <br>";
}

$pokemons = array(
    "Pikachu",
    "Bulbassauro",
    "Squirtle",
    "Charmander",
    "Eeavee"
);

echo count($pokemons);
echo "<br>";

for ($x = 0; $x < count($pokemons); $x++) {
    echo $pokemons[$x], "<br>";
}
?>