<?php

    /**
     *  Interfaces vieram para especificar quais métodos as classes devem implementar, seu uso torna mais fácil o uso de uma variedade de classes
     */

     interface Desktop {
        public function viewCPU();
        
     }

     class Amd implements Desktop {
        public function viewCPU(){
            echo "Linha Ryzen, Athon, etc";
        }
     }

     class Intel implements desktop {
        public function viewCPU(){
            echo "Linha Celeron, Intel Core, etc";
        }
     }


     $pc1 = new Amd();
     $pc2 = new Intel();

     $pc1->viewCPU();
     $pc2->viewCPU();

