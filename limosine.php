<?php
class Limosine extends Vehicle
{

    // attributen
    private $Minibar;


    // constructor
    public function __construct($licenseplate, $buildingyear, $model, $brand, $milage, $availability, $cleaned, bool $minibar)
    {
        parent::__construct($licenseplate, $buildingyear, $model, $brand, $milage, $availability, $cleaned);
        $this->Minibar = $minibar;
    }

    public function __toString()
    {
        return parent::__toString() .
        "<br> minibar: " . $this->Minibar;
    }
}
