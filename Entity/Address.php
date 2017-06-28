<?php

namespace POC\Entity;

class Address {
    private $country;
    private $city;

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getCity() {
        return $this->city;
    }
}
