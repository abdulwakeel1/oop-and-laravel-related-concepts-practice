<?php

namespace App;

use App\Concern\Vehicle;

use Illuminate\Database\Eloquent\Model;

class Car extends Model implements Vehicle
{
    public function hello_car()
    {
        echo 'Hello Car';
    }

    public function start()
    {
        echo 'Car has been started!';
    }

    public function fuel_type()
    {
        echo 'Fuel type of car is bla bla..';
    }

    public function stop()
    {
        echo 'Car has been stopped!';
    }
}
