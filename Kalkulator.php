<?php

class Kalkulator {
    public $angka1;
    public $angka2;
    public $kalk;

    public function __construct($angka1Input, $angka2Input, $kalkInput) {
        $this->angka1 = $angka1Input;
        $this->angka2 = $angka2Input;
        $this->kalk = $kalkInput;
    }

    public function kalkMethod() {
        if ($this->kalk == 'add' ) {
            $hasil = $this->angka1 + $this->angka2;
        } elseif ($this->kalk == 'sub' ) {
            $hasil = $this->angka1 - $this->angka1;
        } elseif ($this->kalk == 'mul' ) {
            $hasil = $this->angka1 * $this->angka2;
        } elseif ($this->kalk == 'div') {
            $hasil = $this->angka1 / $this->angka2;
        } else {
            $hasil = "Error";
        }
        return $hasil;
    }
}
?>