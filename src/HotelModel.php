<?php
namespace Nikerz1406\DesignPattern;
class HotelModel implements Expression{
    private $ht_model = "";
    private $isHotel = false;

    public function __construct($ac_model)
    {
        $this->ht_model = $ac_model;
    }
    public function getName()
    {
        return $this->ht_model;
    }

    public function setIsHotel($isHotel)
    {
        $this->isHotel = $isHotel;
    }

    public function getIsHotel()
    {
        return $this->isHotel;
    }

    public function getInstance(){
        return $this;
    }
    public function startWith($char = ''){
        return substr($this->ht_model,0,1) == $char;
    }
    public function getLength()
    {
        return strlen($this->ht_model);
    }
    public function secondWith($text){
        return substr($this->ht_model,1,1) == $text;
    }
    public function endWith($text)
    {
        return substr($this->ht_model,2,$this->getLength() - 2) == $text;
    }

    public function getFirstChar()
    {
        return $this->ht_model[0];
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
        $LocaleExpression = $context->lookUp('LocaleExpression');
        $LocaleExpression->Interpreter($this);

        //EndExpression
        $EndExpression = $context->lookUp('EndExpression');
        $EndExpression->Interpreter($this);

    }
}
?>