<?php 
namespace Nikerz1406\Test\DesignPattern;
class BaseExpression implements Expression{
    private $name;
    public function getName()
    {
        $this->name = str_replace("Nikerz1406\Test\DesignPattern\\","",get_class($this));
        return $this->name;
    }
    public function Interpreter($model){
        print("Interpreter $this->name");
    }
}
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
class EndExpression extends BaseExpression
{
    public function Interpreter($model)
    {
        print_r("=====================".PHP_EOL);
    }
}