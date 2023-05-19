<?php
class Computer
{
   public function __construct(protected string $brand, protected string $model, protected string $cpu, protected string $ram, protected string $storage, protected float $price)
   {
      $this->brand = $brand;
      $this->model = $model;
      $this->cpu = $cpu;
      $this->ram = $ram . 'Gb';
      $this->storage = $storage;
      $this->price = $price;
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
   public function getPrice()
   {
      if (!is_numeric($this->price)) {
         throw new Exception('Is not a number');
      }
      return $this->price . '$';
   }

   /* set */
   /*   public function setPrice(float $price)
     {
        
     } */
}