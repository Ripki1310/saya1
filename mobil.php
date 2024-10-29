<?php
class Mobil {
    public $merk;
    public $kecepatan = 0;

    public function __construct($merk) {
        $this->merk = $merk;
    }

    public function aturKecepatan($kecepatanBaru) {
        $this->kecepatan = $kecepatanBaru;
    }

    public function info() {
        echo "Mobil $this->merk dengan kecepatan $this->kecepatan km/jam.<br>";
    }
}

$mobil1 = new Mobil("Toyota");
$mobil2 = new Mobil("Honda");

$mobil1->aturKecepatan(60);
$mobil1->info();

$mobil2->aturKecepatan(80);
$mobil2->info();
?>
