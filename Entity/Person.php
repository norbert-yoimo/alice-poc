<?php

namespace POC\Entity;

class Person {
    private $city;
    private $country;

    public static function createWithAddress($address) {
        $instance = new self();
        $instance->city = $address->getCity();
        $instance->country = $address->getCountry();
        return $instance;
    }

}
