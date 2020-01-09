<!-- GOAL:
- Definire la classe Persona caratterizzata da nome e cognome
- Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
- Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
- Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
- Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi -->


<?php

include "elencoPersone.php";

$persona_1 = new Persona("Thomas", "Neroni");
$persona_2 = new Persona("Alberto", "Tomba");

$ospite_1 = new Ospite("Marco", "Carta", "1980");

$pagante_1 = new Pagante(Luca, Giurato, 'Via Verdi 12, Roma');

echo $persona_1 . "<br>";
echo $persona_2;

echo "<br>---------------------<br>";

echo $ospite_1;

echo "<br>---------------------<br>";

echo $pagante_1;
