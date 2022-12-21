<?php 
namespace Nikerz1406\DesignPattern;
class LocaleExpression extends BaseExpression{
    public function Interpreter($model){
        if(!($model instanceof HotelModel)){
            throw new \Exception("model input must instance of HotelModel");
        }
            
        if ($model->getIsHotel() == true)
        {
            if ($model->endWith("HCM"))
            {
                print_r("The hotel in Ho Chi Minh".PHP_EOL);
            }
            else if ($model->endWith("HN"))
                print_r("The hotel in Hanoi".PHP_EOL);
        }
        else
            print_r("Locale could not be interpreted".PHP_EOL);
        
    }
}