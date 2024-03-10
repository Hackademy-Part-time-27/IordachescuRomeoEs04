<?php

// Esercizio 2
class Vertebrates {
        protected static function vert(){
            echo "Sono un animale Vertebrato" . "\n";
        }
        public function __construct(){
            Vertebrates::vert();
    }
}

class WarmBlooded extends Vertebrates {
        protected static function warm(){
            echo "Sono un animale a Sangue Caldo" . "\n";
        }
        public function __construct(){
            Vertebrates::vert();
            WarmBlooded::warm();
    }
}

class ColdBlooded extends Vertebrates {
        protected static function cold(){
            echo "Sono un animale a Sangue Freddo" . "\n";
        }
        public function __construct(){
            Vertebrates::vert();
            ColdBlooded::cold();
    }
}

class Mammals extends WarmBlooded {
        protected static function mamm(){
            echo "Sono un mamifere"."\n";
        }
        public function __construct(){
            Vertebrates::vert();
            WarmBlooded::warm();
            Mammals::mamm();
    }
}

class Birds extends WarmBlooded {
        protected static function bird(){
            echo "Sono un uccello";
        }
        public function __construct(){
            Vertebrates::vert();
            WarmBlooded::warm();
            Birds::bird();
    }
}

class Fish extends ColdBlooded {
        protected static function fish(){
            echo "Sono un pesce";
        }
        public function __construct(){
            Vertebrates::vert();
            ColdBlooded::cold();
            Fish::fish();
    }
}  

class Reptiles extends ColdBlooded {
        protected static function rept(){
            echo "Sono un rettile";
        }
        public function __construct(){
            Vertebrates::vert();
            ColdBlooded::cold();
            Reptiles::rept();
    }
}

class Amphibians extends ColdBlooded  {
        protected static function amphi(){
            echo "Sono un anfibia";
        }
        public function __construct(){
            Vertebrates::vert();
            ColdBlooded::cold();
            Amphibians::amphi();
    }
}

$magikarp = new Fish();

?>