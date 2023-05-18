<?php
class Laptop extends Computer
{
   public function __construct(protected string $brand, protected string $model, protected string $cpu, protected string $ram, protected string $storage, protected float $price, protected string $screen_size, protected string $battery)
   {
      parent::__construct($brand, $model, $cpu, $ram, $storage, $price);
      $this->screen_size = $screen_size . '"';
      $this->battery = $battery . 'mAh';
   }

   public function getInches()
   {
      return $this->screen_size;
   }
   public function getBattery()
   {
      return $this->battery;
   }
}