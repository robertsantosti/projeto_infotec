<?php

$filmes = array('Vingadores','Deadpool','Pantera Negra', 'Os Incriveis', 'Jurassic World 2', 'Guerra Mundial Z');

$contador = count($filmes);

echo "Minha lista contém ".$contador." filmes </br>";

echo "Os filmes são: ";

echo "<ul>";
    for ($i=0; $i<$contador  ; $i++) { 
        echo "<li>".$filmes[$i]."</li>";
    }
echo "</ul>";
?>