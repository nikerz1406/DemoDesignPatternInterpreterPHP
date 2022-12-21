<?php 
namespace Nikerz1406\Test\DesignPattern;
interface Expression
{
    public function getName();
    
    public function Interpreter(?object $context);
}
?>