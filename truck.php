<?php
class Truck extends Vehicle
{

    // attributen
    private $Towrope;


    // constructor
    public function __construct($licenseplate, $buildingyear, $model, $brand, $milage, $availability, $cleaned, bool $towrope)
    {
        parent::__construct($licenseplate, $buildingyear, $model, $brand, $milage, $availability, $cleaned);
        $this->Towrope = $towrope;
    }

    public function __toString()
    {
        return parent::__toString() .
        "<br> trektouw: " . $this->Towrope;
    }
}
