<?php
namespace Nikerz1406\DesignPattern;

class AircraftModel implements Expression{
    private $ac_model = "";
    private $isAircraft = false;

    public function __construct($ac_model)
    {
        $this->ac_model = $ac_model;
    }
    public function getName()
    {
        return $this->ac_model;
    }
    public function getInstance(){
        return $this;
    }
    public function startWith($char = ''){
        return substr($this->ac_model,0,1) == $char;
    }

    public function getLength()
    {
        return strlen($this->ac_model);
    }

    public function getLastChar()
    {
        return substr($this->ac_model,$this->getLength() - 1,1);
    }

    public function getFirstChar()
    {
        return $this->ac_model[0];
    }

    public function setIsAircraft($isAircraft)
    {
        $this->isAircraft = $isAircraft;
    }

    public function getIsAircraft()
    {
        return $this->isAircraft;
    }

    public function Interpreter($context){
        if(!($context instanceof Context)){
            throw new \Exception("context input must instance of Context");
        }          
        
        // CheckExpression
        $CheckExpression = $context->lookUp('CheckExpression');
        $CheckExpression->Interpreter($this);

        // BrandExpression
        $BrandExpression = $context->lookUp('BrandExpression');
        $BrandExpression->Interpreter($this);

        // ModelExpression
        $ModelExpression = $context->lookUp('ModelExpression');
        $ModelExpression->Interpreter($this);

        // TypeExpression
        $TypeExpression = $context->lookUp('TypeExpression');
        $TypeExpression->Interpreter($this);

        //EndExpression
        $EndExpression = $context->lookUp('EndExpression');
        $EndExpression->Interpreter($this);

    }
}