<?php

namespace MannikJ\Laravel\SingleTableInheritance\Tests\Models\Vehicles;

class Car extends Vehicle
{
    protected static $stiSubClasses = [SUV::class];

}
