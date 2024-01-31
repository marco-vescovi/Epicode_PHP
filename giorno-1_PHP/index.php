<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa Data, Capopalestra e Pokémon</title>
</head>
<body>

<?php
$oggi = date("d-m-y");
echo "<h2>Data di oggi: $oggi</h2>";

$capopalestra_pokemon = array(
    "Brock" => array("Geodude", "Onix"),
    "Misty" => array("Staryu", "Starmie"),
    "Lt. Surge" => array("Voltorb", "Pikachu", "Raichu"),
    "Erika" => array("Victreebel", "Tangela", "Vileplume"),    
);

$incontri_pokemon = array(
    array(
        "capopalestra_casa" => "Brock",
        "capopalestra_ospite" => "Misty",
        "pokemon_casa" => array("Geodude", "Onix"),
        "pokemon_ospite" => array("Staryu", "Starmie"),
    ),
    array(
        "capopalestra_casa" => "Lt. Surge",
        "capopalestra_ospite" => "Erika",
        "pokemon_casa" => array("Voltorb", "Pikachu", "Raichu"),
        "pokemon_ospite" => array("Victreebel", "Tangela", "Vileplume"),
    ),
);

echo "<h2>Capopalestra e Pokémon</h2>";
echo "<ul>";
foreach ($capopalestra_pokemon as $capopalestra => $pokemon) {
    echo "<li><strong>$capopalestra:</strong> ";
    echo implode(", ", $pokemon);
    echo "</li>";
}
echo "</ul>";

echo "<h2>Incontri Pokémon</h2>";
echo "<ul>";
foreach ($incontri_pokemon as $incontro) {
    echo "<li><strong>{$incontro['capopalestra_casa']} vs {$incontro['capopalestra_ospite']}:</strong><br>";
    echo "<strong>Capopalestra Casa:</strong> " . implode(", ", $incontro['pokemon_casa']) . "<br>";
    echo "<strong>Capopalestra Ospite:</strong> " . implode(", ", $incontro['pokemon_ospite']) . "</li>";
}
echo "</ul>";
?>

</body>
</html>
