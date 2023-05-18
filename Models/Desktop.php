<?php
class Desktop extends Computer
{
   public function __construct(protected string $brand, protected string $model, protected string $cpu, protected string $ram, protected string $storage, protected float $price, protected string $gpu, protected string $mbo)
   {
      parent::__construct($brand, $model, $cpu, $ram, $storage, $price);
      $this->gpu = $gpu;
      $this->mbo = $mbo;
   }

   public function getGpu()
   {
      return $this->gpu;
   }

   public function getMbo()
   {
      return $this->mbo;
   }
}