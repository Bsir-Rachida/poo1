<?php
class Car

{
    protected int $nbWheels;
    public  int $currentSpeed;
    protected  string $color;
    protected  int $nbSeats;
    protected  string $energy;
    protected  int $energyLevel;


    public function __construct(string $color,int $nbSeats ,string $energy)

        {
            $this->color =$color;
            $this->nbSeats =$nbSeats;
            $this->energy =$energy;
          
        }
    
      public function forward(): string

        {
             $this->currentSpeed = 40;
             return  " Go ";
        } 
     
      public function brake(): string

        {

            $result = "";

            while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            $result .= "Brake !!!";

        }

            $result .= "I'm stopped !";

             return $result;

        }

        public function getnbWheels(): int
        {
              return $this->nbWheels;
        }

        public function getcurrentSpeed(): int
        {
              return $this->currentSpeed;
        }

        public function getcolor(): string
        {
              return $this->color;
        }

        public function getnbSeats(): int
        {
              return $this->nbSeats;
        }

        public function getenergy(): string
        {
              return $this->energy;
        }

        public function getenergyLevel(): int
        {
              return $this->energyLevel;
        }

    }