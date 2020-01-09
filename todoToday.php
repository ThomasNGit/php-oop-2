<!-- GOAL:
- Definire la classe Persona caratterizzata da nome e cognome
- Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
- Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
- Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
- Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi -->


<?php
class Persona {

  public $nome;
  public $cognome;
  function __construct($nome, $cognome){

    $this -> nome = $nome;
    $this -> cognome = $cognome;
  }

  function __toString(){

    return "Nome: " . $this -> nome . "<br>"
           . "Cognome: " . $this -> cognome . "<br>";
  }
}

class Ospite extends Persona {

  public $annoNascita;
  function __construct($nome, $cognome, $annoNascita){
    parent::__construct($nome, $cognome);
    $this -> annoNascita = $annoNascita;
  }

  function __toString(){

    return "Nome: " . $this -> nome . "<br>"
           . "Cognome: " . $this -> cognome . "<br>"
           . "Anno di nascita: " . $this -> annoNascita;
  }
}

class Pagante extends Persona {

  public $indirizzoResidenza;
  function __construct($nome, $cognome, $indirizzo){
    parent::__construct($nome, $cognome);
    $this -> indirizzo = $indirizzo;
  }

  function __toString(){

    return "Nome: " . $this -> nome . "<br>"
           . "Cognome: " . $this -> cognome . "<br>"
           . "Indirizzo di residenza: " . $this -> indirizzo;
  }
}


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
