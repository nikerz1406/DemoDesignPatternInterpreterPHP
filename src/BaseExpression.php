<?php 
namespace Nikerz1406\DesignPattern;
class BaseExpression implements Expression{
    public function __construct()
    {
        $name_space = __NAMESPACE__."\\";
        $this->name = str_replace($name_space,"",get_class($this));
    }
    private $name;
    public function getName()
    {
        return $this->name;
    }
    public function Interpreter($model){
        print("Interpreter $this->name");
    }
}