<?php
class Desktop extends Computer
{
   public function __construct(protected string $brand, protected string $model, protected string $cpu, protected string $ram, protected string $storage, protected string $gpu, protected string $mbo)
   {
      parent::__construct($brand, $model, $cpu, $ram, $storage);
      $this->gpu = $gpu;
      $this->mbo = $mbo;
   }
}