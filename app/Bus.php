<?php

namespace App;

use App\Concern\Vehicle;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model implements Vehicle
{
    public function start()
    {
        echo 'Bus has been started';
    }

    public function fuel_type()
    {
        echo 'Fuel type of bus is bla bla..';
    }

    public function stop()
    {
        echo 'Bus has been stopped!';
    }
}
