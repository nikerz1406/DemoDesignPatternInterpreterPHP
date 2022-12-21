<?php 
namespace Nikerz1406\Test\DesignPattern;
class Context
    {
        private array $poolVariable;

        public function lookUp(string $name)
        {
            if (!key_exists($name, $this->poolVariable)) {
                print_r("No exist variable: $name".PHP_EOL);
                return null;
            }

            return $this->poolVariable[$name];
        }

        public function assign($model)
        {
            $name = $model->getName();
            $this->poolVariable[$name] = $model;
        }        
    }   

    ?>