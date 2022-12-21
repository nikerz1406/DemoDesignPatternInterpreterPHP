<?php 
namespace Nikerz1406\DesignPattern;
interface Expression
{
    public function getName();
    
    public function Interpreter(?object $context);
}
?>