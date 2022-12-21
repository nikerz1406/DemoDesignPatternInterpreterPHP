<?php 
namespace Nikerz1406\DesignPattern;
class CheckExpression extends BaseExpression
    {
        public function Interpreter($model)
        {
            $name = $model->getName();
            if($model instanceof AircraftModel){
                //We assume tthe aircraft models only start with A or B and contains 4 or 5 chars.
                if ($model->startWith("A") || $model->startWith("B"))
                {
                    if ($model->getLength() == 4 || $model->getLength() == 5)
                    {
                        $model->setIsAircraft(true);
                        print_r($name .  " is an aircraft...".PHP_EOL);
                    }
                    else
                    {
                        $model->setIsAircraft(false);
                        print_r($name .  " is not aircraft...".PHP_EOL);
                    }
                }
            }

            if($model instanceof HotelModel){
                if($model->startWith("C") || $model->startWith("R")){
                    //We assume tthe hotel models only start with C or R and contains 4 or 5 chars.
                    if($model->getLength() == 4 || $model->getLength() == 5){
                        $model->setIsHotel(true);
                        print_r($name .  " is an hotel...".PHP_EOL);
                    }else{
                        $model->setIsHotel(false);
                        print_r($name .  " is not hotel...".PHP_EOL);
                    }
                
                }
            }
            
            if(!($model instanceof HotelModel) && !($model instanceof AircraftModel)){
                throw new \Exception("model input must instance of AircraftModel or HotelModel");
            }
            
        }
    }
