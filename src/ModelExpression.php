<?php 
namespace Nikerz1406\DesignPattern;
class ModelExpression extends BaseExpression
{
    public function Interpreter($model)
    {
        if($model instanceof AircraftModel){
            if ($model->getIsAircraft() == true)
            {
                print_r("Model is : " . substr($model->getName(),1,3).PHP_EOL);
            }
            else
                print_r("Model could not be interpreted".PHP_EOL);    
        }

        if($model instanceof HotelModel){
            if ($model->getIsHotel() == true)
            {
                if($model->secondWith("4")){
                    print_r("Model is : 4 stars".PHP_EOL);
                }else if($model->secondWith("5")){
                    print_r("Model is : 5 stars".PHP_EOL);
                }
            }
            else
                print_r("Model could not be interpreted".PHP_EOL);    
        }

        
    }
}