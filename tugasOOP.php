<?php

class BangunDatar {
    protected $luas;
    protected $keliling;

    public function area() {
        return $this->luas;
    }

    public function circumference() {
        return $this->keliling;
    }

    public function enlarge($scale) {
        $this->luas = $this->luas * $scale * $scale;
        $this->keliling = $this->keliling * $scale;
    }

    public function shrink($scale) {
        $this->luas = $this->luas / ($scale * $scale);
        $this->keliling = $this->keliling / $scale;
    }
}


class Lingkaran extends BangunDatar {
    
    protected $jariJari;

    public function __construct($r) {
        $this->jariJari = $r;
        $this->luas = pi() * $r * $r;
        $this->keliling = 2 * pi() * $r;
    }

    public function area() {
        return parent::area();
    }

    public function circumference() {
        return parent::circumference();
    }
}

class Persegi extends BangunDatar {

    protected $sisi;

    public function __construct($s) {
        $this->sisi = $s;
        $this->luas = $s * $s;
        $this->keliling = 4 * $s;
    }

    public function area() {
        return parent::area();
    }

    public function circumference() {
        return parent::circumference();
    }
}

class PersegiPanjang extends BangunDatar {

    protected $panjang;
    protected $lebar;

    public function __construct($p, $l) {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->luas = $p * $l;
        $this->keliling = 2 * ($p + $l);
    }

    public function area() {
        return parent::area();
    }

    public function circumference() {
        return parent::circumference();
    }
}


class Descriptor {

    public static function describe(BangunDatar $bangun) {

        $namaBangun = get_class($bangun);
        
        switch($namaBangun) {
            case "Lingkaran":
                echo "Bangun datar ini adalah Lingkaran yang memiliki luas " . $bangun->area() . " dan keliling " . $bangun->circumference() . "." . "<br>";
                break;
            case "Persegi":
                echo "Bangun datar ini adalah Persegi yang memiliki luas " . $bangun->area() . " dan keliling " . $bangun->circumference() . "." . "<br>";
                break;
            case "PersegiPanjang":
                echo "Bangun datar ini adalah Persegi Panjang yang memiliki luas " . $bangun->area() . " dan keliling " . $bangun->circumference() . "." . "<br>";
                break;
            default:
                echo "Bangun data tidak diketahui." . "<br>";
        }
    }
}

$lingkaran = new Lingkaran(10);
Descriptor::describe($lingkaran); 

$persegi = new Persegi(10);
Descriptor::describe($persegi); 

$persegiPanjang = new PersegiPanjang(10, 12);
Descriptor::describe($persegiPanjang); 