<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
   protected int $storageCapacity; 
   protected int $loading = 0; 

   public function __construct(int $storageCapacity, int $loading, string $color, int $nbSeats, string $energy)
   {
    parent::__construct($color, $nbSeats); 
    $this->storageCapacity= $storageCapacity;
    $this->loading= $loading;
    $this->energy= $energy;
   }

   public function getStorageCapacity(): int
   {
    return $this->storageCapacity;
   }

   public function getLoading(): int
   {
    return $this->loading;
   }

   public function storage(): string 
   {
        if ($this->loading === 100) {
            return "full";
    }else{
            return "in filling";
    }
   }
   public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
   
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
}
