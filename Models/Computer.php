<?php
class Computer
{
   public function __construct(protected string $brand, protected string $model, protected string $cpu, protected string $ram, protected string $storage)
   {
      $this->brand = $brand;
      $this->model = $model;
      $this->cpu = $cpu;
      $this->ram = $ram . 'Gb';
      $this->storage = $storage;
   }

   public function getBrand()
   {
      return $this->brand;
   }

   public function getModel()
   {
      return $this->model;
   }

   public function getCpu()
   {
      return $this->cpu;
   }
   public function getRAM()
   {
      return $this->ram;
   }
   public function getStorage()
   {
      return $this->storage;
   }
}