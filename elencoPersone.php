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
