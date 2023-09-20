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
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getInfo() {
        echo "Nama: " . $this->nama . "<br>";
    }
}

// Subkelas Hewan
class Kucing extends Hewan {
    use SifatFisik, Perilaku;

    private $namaKucing; // Properti tambahan untuk nama kucing

    public function __construct($nama, $warnaBulu, $suara, $namaKucing) {
        parent::__construct($nama);
        $this->setWarnaBulu($warnaBulu);
        $this->setSuara($suara);
        $this->namaKucing = $namaKucing;
    }

    public function getInfo() {
        parent::getInfo();
        echo "Warna Bulu: " . $this->getWarnaBulu() . "<br>";
        $this->bersuara();
        echo "Nama Kucing: " . $this->namaKucing . "<br>";
    }
}

// Membuat objek kucing
$kucing = new Kucing("Kucing", "Putih", "Meong", "Whiskers");
$kucing->getInfo();

?>
