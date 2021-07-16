<?php 

Class myClass {
    public $x,$y,$z; //properties

    public function __construct($a, $b) {
        $this->x = $a;
        $this->y = $b;
    }

    public function mysum() {
        $this->z = $this->x + $this->y;
        return $this->z;
    }
}

$sum = new myClass(500, 100);
echo $sum->mysum();

// without constructor
// $sum = new myClass();
// $sum->x = 100;
// $sum->y = 350;
// echo $sum->mysum();





?>