<?php

class Accouting {

    public float $tax;


    public function computeSalary() {
        return $this->tax - 500;
    }


}