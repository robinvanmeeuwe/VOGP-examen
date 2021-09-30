<?php

include_once("./truck.php");
include_once("./limosine.php");

class Vehicle {
  
    protected $Licenseplate;
    protected $Buildingyear;
    protected $Model;
    protected $Brand;
    protected $Milage;
    protected $Availability;
    protected $Cleaned;

    public function __construct(string $licenseplate, int $buildingyear, string $model, string $brand, int $milage, bool $availability, bool $cleaned)
    {
        $this->Licenseplate = $licenseplate;
        $this->Buildingyear = $buildingyear;
        $this->Model = $model;
        $this->Brand = $brand;
        $this->Milage = $milage;
        $this->Availability = $availability;
        $this->Cleaned = $cleaned;
    }

    public function __toString()
    {
        return "<br> Kenteken: " . $this->Licenseplate . 
                "<br> Bouwjaar: " . $this->Buildingyear . 
                "<br> Model: " . $this->Model . 
                "<br> Merk: " . $this->brand . 
                "<br> kilometerstand: " . $this->Milage . 
                "<br> beschikbaar: " . $this->Availability . 
                "<br> schoongemaakt: " . $this->Cleaned;
                

    }

    public function GetName()
    {
        return $this->Brand . " " . $this->Model . ", " . $this->LicensePlate;
    }



    public function ReturnVehicle($vehicle, $cleaned, $distance) 
    {
        if ($this->Availability == false) {
            $this->Availability = true;
            $this->Cleaned = $cleaned;
            $this->Milage = $this->Milage + $distance;
            return "<br> auto <span style='font-style:italic;'>\"" . $this->GetName() . "\"</span> is terug. " .
                " | " . (boolval($cleaned) ? 'schoonmaken nodig.' : 'geen schoonmaak nodig.') .
                " | de prijs is: "  . $vehicle->Price($distance) .
                " | Kilometerstand: " . $this->Milage . "km";
        } else {
            return "<br> auto <span style='font-style:italic;'>\"" . $this->GetName() . "\"</span> is al terug.";
        }
    }


    public function Rentvehicle($vehicle) 
    {
        if($this->Availability == true){
            $this->Availability = false;
            return "mogelijk om te huren";
        } else {
            return "niet beschikbaar";
        }

    }
}





?>