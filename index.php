<?php

/* 
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.
BONUS:
pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari).
*/

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Models/Laptop.php';
require_once __DIR__ . '/db.php';

function getComputerType($pc)
{
   if ($pc instanceof Desktop) {
      return "Desktop";
   } else {
      return "Laptop";
   }
}

//var_dump($personalPcs);

?>

<!doctype html>
<html lang="en">

<head>
   <title>Computers</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- fa -->
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
      integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
      crossorigin='anonymous' referrerpolicy='no-referrer' />

   <!-- Bootstrap CSS v5.2.1 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
   <header>
      <nav class="navbar navbar-expand-lg bg-dark">
         <div class="container-fluid">
            <a class="navbar-brand  text-white" href="#"><i class="fa fa-laptop" aria-hidden="true"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categories
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Desktop</a></li>
                        <li><a class="dropdown-item" href="#">Laptop</a></li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">All</a></li>
                     </ul>
                  </li>
               </ul>
               <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
            </div>
         </div>
      </nav>
   </header>
   <main>

      <div class="p-5 mb-4 bg-light rounded-3">
         <div class="container py-5">
            <h1 class="display-5 fw-bold">The best Personal Computer for you!</h1>
            <p class="col-md-8 fs-4">
               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam ipsam aut libero
               consectetur tenetur minus.
            </p>
            <button class="btn btn-primary btn-lg" type="button">Build your PC here</button>
         </div>
      </div>

      <div class="container">
         <h2 class="text-muted text-center my-5">
            Our Bilds
         </h2>
         <div class="row row-cols-2 mb-4">
            <?php foreach ($personalPcs as $pc): ?>
               <div class="col mb-3">
                  <div class="card">
                     <div class="card-header">
                        <h2>
                           <?= getComputerType($pc) ?>
                        </h2>
                     </div>
                     <div class="card-body">
                        <div>
                           <span><b>Brand:</b></span>
                           <?= $pc->getBrand() ?>
                        </div>
                        <div>
                           <span><b>Model:</b></span>
                           <?= $pc->getModel() ?>
                        </div>
                        <div>
                           <span><b>CPU:</b></span>
                           <?= $pc->getCpu() ?>
                        </div>
                        <div>
                           <span><b>RAM:</b></span>
                           <?= $pc->getRAM() ?>
                        </div>
                        <div>
                           <span><b>Storage:</b></span>
                           <?= $pc->getStorage() ?>
                        </div>
                        <div>
                           <span>
                              <b>
                                 <?= getComputerType($pc) == 'Desktop' ? 'GPU:' : 'Screen Inches:' ?>
                              </b>
                           </span>
                           <?= getComputerType($pc) == 'Desktop' ? $pc->getGpu() : $pc->getInches() ?>
                        </div>
                        <div>
                           <span>
                              <b>
                                 <?= getComputerType($pc) == 'Desktop' ? 'MBO:' : 'Battery:' ?>
                              </b>
                           </span>
                           <?= getComputerType($pc) == 'Desktop' ? $pc->getMbo() : $pc->getBattery() ?>
                        </div>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                        <div>
                           <span><b>Price:</b></span>
                           <?= $pc->getPrice() ?>
                        </div>
                        <button class="btn btn-outline-success">
                           Buy Now
                        </button>
                     </div>
                  </div>
               </div>

            <?php endforeach ?>

         </div>
      </div>

   </main>
   <footer>
      <!-- place footer here -->
   </footer>
   <!-- Bootstrap JavaScript Libraries -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
</body>

</html>