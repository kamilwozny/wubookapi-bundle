<?php

namespace Kamwoz\WubookAPIBundle\Model;

class Customer {
    
    private $firstName;
    private $surname;
    private $email;
    private $city;
    private $street;
    private $country;
    private $lang;
    private $phone;
    private $arrivalHour;
    private $notes;
    private $zip;
    
    public function generateDataArray(){
        return [
            'fname'=> $this->getFirstName(),
            'email'=>  $this->getEmail(),
            'lname'=>  $this->getSurname(),
            'city' =>  $this->getCity(),
            'street'=>  $this->getStreet(),
            'country' =>  $this->getCountry(),
            'lang' =>  $this->getLang(),
            'phone' =>  $this->getPhone(),
            'arrival_hour'=>  $this->getArrivalHour(),
            'notes' =>  $this->getNotes(),
            'zip' =>  $this->getZip(),
        ];
    }
    
    public function getFirstName() {
        return $this->firstName;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCity() {
        return $this->city;
    }

    public function getStreet() {
        return $this->street;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getLang() {
        return $this->lang;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getArrivalHour() {
        return $this->arrivalHour;
    }

    public function getNotes() {
        return $this->notes;
    }

    public function getZip() {
        return $this->zip;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function setLang($lang) {
        $this->lang = $lang;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setArrivalHour($arrivalHour) {
        $this->arrivalHour = $arrivalHour;
    }

    public function setNotes($notes) {
        $this->notes = $notes;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }



}
