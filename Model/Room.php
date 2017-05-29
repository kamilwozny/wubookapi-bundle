<?php

namespace Kamwoz\WubookAPIBundle\Model;

use Kamwoz\WubookAPIBundle\Exception\WubookModelException;

class Room {

    private $id;
    private $woodoo;
    private $name;
    private $beds;
    private $price;
    private $avail;
    private $shortname;
    private $defboard;
    private $names;
    private $descriptions;
    private $boards;
    private $rtype = 1;
    private $minPrice = 0;
    private $maxPrice = 0;

    public function __construct() {
        $this->names = [];
        $this->descriptions = [];
        $this->boards = [];
        $this->rtype = 1;
        $this->minPrice = 0;
        $this->maxPrice = 0;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getWoodoo() {
        if (empty($this->woodoo)) {
            throw new WubookModelException('Room Woodoo cannot be empty!');
        }
        return $this->woodoo;
    }

    public function getName() {
        if (empty($this->name)) {
            throw new WubookModelException('Room name cannot be empty!');
        }
        return $this->name;
    }

    public function getBeds() {
        if (empty($this->beds)) {
            throw new WubookModelException('Room beds cannot be empty!');
        }
        return $this->beds;
    }

    public function getPrice(): float {
        if (empty($this->price)) {
            throw new WubookModelException('Room price cannot be empty!');
        }
        return $this->price;
    }

    public function getAvail() {
        if (empty($this->avail)) {
            throw new WubookModelException('Room availbaility cannot be empty!');
        }
        return $this->avail;
    }

    public function getShortname() {
        if (empty($this->shortname)) {
            throw new WubookModelException('Room shortname cannot be empty!');
        }
        return $this->shortname;
    }

    public function getDefboard() {
        if (empty($this->defboard)) {
            throw new WubookModelException('Room defboard cannot be empty!');
        }
        return $this->defboard;
    }

    public function getNames() {
        if (empty($this->names)) {
            throw new WubookModelException('Room names cannot be empty!');
        }
        return $this->names;
    }

    public function getDescriptions() {
        if (empty($this->descriptions)) {
            throw new WubookModelException('Room descriptions cannot be empty!');
        }
        return $this->descriptions;
    }

    public function getBoards() {
        if (empty($this->boards)) {
            throw new WubookModelException('Room boards cannot be empty!');
        }
        return $this->boards;
    }

    public function getRoomType() {
        if (empty($this->rtype)) {
            throw new WubookModelException('Room room type cannot be empty!');
        }
        return $this->rtype;
    }

    public function setWoodoo($woodoo) {
        $this->woodoo = $woodoo;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setBeds($beds) {
        $this->beds = $beds;
        return $this;
    }

    public function setPrice(float $price) {
        $this->price = $price;
        return $this;
    }

    public function setAvail($avail) {
        $this->avail = $avail;
        return $this;
    }

    public function setShortname($shortname) {
        $this->shortname = $shortname;
        return $this;
    }

    public function setDefboard($defboard) {
        $this->defboard = $defboard;
        return $this;
    }

    public function setNames($names) {
        $this->names = $names;
        return $this;
    }

    public function setDescriptions($descriptions) {
        $this->descriptions = $descriptions;
        return $this;
    }

    public function setBoards($boards) {
        $this->boards = $boards;
        return $this;
    }

    public function setRooType($rtype) {
        $this->rtype = $rtype;
        return $this;
    }

    public function getMinPrice(): float {
        return $this->minPrice;
    }

    public function getMaxPrice(): float {
        return $this->maxPrice;
    }

    public function setMinPrice(float $minPrice) {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function setMaxPrice(float $maxPrice) {
        $this->maxPrice = $maxPrice;
        return $this;
    }

}
