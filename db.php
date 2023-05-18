<?php

try {
   $personalPcs = [
      new Desktop(
         "MSI",
         "M-COMP-12445",
         "Intel Core i7",
         "2 x 8",
         "1T",
         99.99,
         "NVIDIA GeForce RTX 4020",
         "ASUS Tuf Gaming ABC-23-Z",
      ),

      new Laptop(
         "Asus",
         "ZenBook",
         "Intel Core i5",
         "8",
         "512 SSD",
         150.95,
         "15",
         "8000"
      ),
      new Desktop(
         "Dell",
         "HH-JK12",
         "Intel Core i3",
         "4",
         "500 Gb",
         99.98,
         "AMD Radeon RX 600 XT",
         "ASUS Prime B450M-A",
      ),
      new Laptop(
         "Lenovo",
         "Legion",
         "Intel Core i9-12900HX",
         "2 x 16",
         "2T SSD",
         99.91,
         "16",
         "10000"
      ),
   ];
} catch (Exception $err) {
   echo $err->getMessage();
}