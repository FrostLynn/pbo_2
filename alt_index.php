<?php

// Trait untuk sifat fisik hewan
trait SifatFisik {
    private $warnaBulu;

    public function setWarnaBulu($warna) {
        $this->warnaBulu = $warna;
    }

    public function getWarnaBulu() {
        return $this->warnaBulu;
    }
}

// Trait untuk perilaku hewan
trait Perilaku {
    protected $suara;

    public function setSuara($suara) {
        $this->suara = $suara;
    }

    public function getSuara() {
        return $this->suara;
    }

    public function bersuara() {
        echo "Hewan ini bersuara: " . $this->suara . "<br>";
    }
}

class Hewan {
    use SifatFisik, Perilaku;

    private $nama;

    public function __construct($nama, $warnaBulu, $suara) {
        $this->nama = $nama;
        $this->setWarnaBulu($warnaBulu);
        $this->setSuara($suara);
    }

    public function getInfo() {
        echo "Nama: " . $this->nama;
        echo "<br>";
        echo "Warna Bulu: " . $this->getWarnaBulu();
        echo "<br>";
        $this->bersuara();
    }
}

// Membuat objek hewan
$kucing = new Hewan("Kucing", "Putih", "Meong");
$kucing->getInfo();

?>
