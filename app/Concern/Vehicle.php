<?php

namespace App\Concern;

interface Vehicle
{
	public function start();
	public function fuel_type();
	public function stop();
}