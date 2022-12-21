<?php

include(__DIR__."/src/AbstractionExpression.php");
include(__DIR__."/src/Context.php");
include(__DIR__."/src/NonterminalExpression.php");
include(__DIR__."/src/TerminalExpression.php");
include(__DIR__."/src/Interpreter.php");

use Nikerz1406\Test\DesignPattern\Interpreter;

// Call pattern
$speaker = new Interpreter();

// The different way load content outside, ex : $speaker->load($object)
// Source content can be api, database, object code....

$speaker->load();

// Interpreter 
// C5HCM,R4HCM,C5HN,R4HN,B777F,B777,A330F,A330

$speaker->interpreter("A330F");
$speaker->interpreter("B777");

$speaker->interpreter("TheCode");

$speaker->interpreter("R4HN");
$speaker->interpreter("C5HCM");


?>