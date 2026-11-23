<?php

class Hewan {
    private string $nama;
    private int $umur;

    public function __construct(string $nama = "", int $umur = 0) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function setNama(string $nama): void {
        $this->nama = $nama;
    }

    public function getNama(): string {
        return $this->nama;
    }

    public function setUmur(int $umur): void {
        $this->umur = $umur;
    }

    public function getUmur(): int {
        return $this->umur;
    }

}



