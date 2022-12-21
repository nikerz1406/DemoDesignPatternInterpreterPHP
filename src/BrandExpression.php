<?php 
namespace Nikerz1406\DesignPattern;
class BrandExpression extends BaseExpression
{
    public function Interpreter($model)
    {   
        if(($model instanceof AircraftModel)){
            if ($model->getIsAircraft() == true)
            {
                if ($model->getFirstChar() == "A")
                    print_r("Brand is Airbus".PHP_EOL);
                else if ($model->getFirstChar() == "B")
                    print_r("Brand is Boeing".PHP_EOL);
            }
            else
                print_r("Brand could not be interpreted".PHP_EOL);
        }

        if(($model instanceof HotelModel)){
            if ($model->getIsHotel() == true)
            {
                if ($model->getFirstChar() == "C")
                    print_r("Name is Caravelle".PHP_EOL);
                else if ($model->getFirstChar() == "R")
                    print_r("Name is Red".PHP_EOL);
            }
            else
                print_r("Name could not be interpreted".PHP_EOL);
        }

    }
}