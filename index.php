<?php

/* 
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.
BONUS:
pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari).
*/
class Computer
{
   /*    protected $brand;
      protected $model;
      protected $cpu;
      protected $ram;
      protected $storage; */

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
}
class Desktop extends Computer
{
   public function __construct(protected string $brand, protected string $model, protected string $cpu, protected string $ram, protected string $storage, protected string $gpu, protected string $mbo)
   {
      parent::__construct($brand, $model, $cpu, $ram, $storage);
      $this->gpu = $gpu;
      $this->mbo = $mbo;
   }
}
class Laptop extends Computer
{
   public function __construct(protected string $brand, protected string $model, protected string $cpu, protected string $ram, protected string $storage, protected string $screen_size, protected string $battery)
   {
      parent::__construct($brand, $model, $cpu, $ram, $storage);
      $this->screen_size = $screen_size . '"';
      $this->battery = $battery . 'mAh';
   }
}

$personalPcs = [
   $pc_1 = new Desktop("MSI", "M-COMP-12445", "Intel Core i7", "2 x 8", "1T", "ASUS Tuf Gaming ABC-23-Z", "NVIDIA GeForce RTX 4020"),
   $pc_1 = new Laptop("Asus", "ZenBook", "Intel Core i5", "8", "512 SSD", "24", "8000"),
];

var_dump($personalPcs);

?>