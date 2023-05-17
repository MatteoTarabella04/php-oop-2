<?php
class Laptop extends Computer
{
   public function __construct(protected string $brand, protected string $model, protected string $cpu, protected string $ram, protected string $storage, protected string $screen_size, protected string $battery)
   {
      parent::__construct($brand, $model, $cpu, $ram, $storage);
      $this->screen_size = $screen_size . '"';
      $this->battery = $battery . 'mAh';
   }
}