<?php 
namespace Nikerz1406\Test\DesignPattern;
class Interpreter
{
    public function __construct()
    {
        print("Interpreter Design Pattern Example - The Code program".PHP_EOL);
        (new EndExpression())->interpreter(null);
        $this->list = new Context();

    }
    public function load(){

        // load content aircraft
        $this->list->assign(new AircraftModel("A330"));
        $this->list->assign(new AircraftModel("A330F"));
        $this->list->assign(new AircraftModel("B777"));
        $this->list->assign(new AircraftModel("B777F"));
 
        // load content hotel
        $this->list->assign(new HotelModel("C5HCM"));
        $this->list->assign(new HotelModel("R4HCM"));
        $this->list->assign(new HotelModel("C5HN"));
        $this->list->assign(new HotelModel("R4HN"));

        // load expression
        $this->list->assign(new CheckExpression());
        $this->list->assign(new BrandExpression());
        $this->list->assign(new ModelExpression());
        $this->list->assign(new TypeExpression());
        $this->list->assign(new LocaleExpression());
        $this->list->assign(new EndExpression());

    }
    public function interpreter($text){

        $item = $this->list->lookUp($text);
        if($item instanceof Expression){
            return $item->interpreter($this->list);
        }
        
        print_r("Can't interpreter this word".PHP_EOL);
        ($this->list->lookUp("EndExpression"))->interpreter(null);
    }
}

?>