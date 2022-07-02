<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function test()
    {
        $array_of_vehicles = [];
        
        $car = new Car();
        $car1 = new Car();
        $car2 = new Car();
        $bus = new Bus();
        $bus1 = new Bus();
        $bus2 = new Bus();

        array_push($array_of_vehicles, $car1);
        array_push($array_of_vehicles, $bus);
        array_push($array_of_vehicles, $bus2);
        array_push($array_of_vehicles, $car2);
        array_push($array_of_vehicles, $car);
        array_push($array_of_vehicles, $bus1);

        foreach($array_of_vehicles as $vehicle)
        {
            $vehicle->start();
            $vehicle->fuel_type();
            $vehicle->stop();
        }
    }
    
}
