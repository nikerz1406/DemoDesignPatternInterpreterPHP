<?php 
namespace Nikerz1406\DesignPattern;
class TypeExpression extends BaseExpression
{
    public function Interpreter($model)
    {
  
        if(!($model instanceof AircraftModel)){
            throw new \Exception("model input must instance of AircraftModel");
        }
        
        if ($model->getIsAircraft() == true)
        {
            // $ac_model = $context->getName();
            if ($model->getLength() == 5 && $model->getLastChar() == "F")//F-> Freighter
            {
                print_r("Aircraft type is Cargo/Freighter".PHP_EOL);
            }
            else
                print_r("Aircraft type is Passenger Transportation".PHP_EOL);
        }
        else
            print_r("Type could not be interpreted".PHP_EOL);
        

    }
}