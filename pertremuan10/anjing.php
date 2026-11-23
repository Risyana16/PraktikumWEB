<?php
require_once 'hewann.php';

class Anjing extends Hewan {
    public function getJenis(): string {
        return "Anjing";
    }

    public function getSuara(): string {
        return "Guk guk";
    }
}