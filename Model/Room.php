<?php

namespace Kamwoz\WubookAPIBundle\Model;

use Kamwoz\WubookAPIBundle\Exception\WubookModelException;

class Room implements RoomInterface {

    protected $id;
    protected $woodoo;
    protected $name;
    protected $beds;
    protected $price;
    protected $avail;
    protected $shortname;
    protected $defboard;
    protected $names;
    protected $descriptions;
    protected $boards;
    protected $rtype;
    protected $minPrice;
    protected $maxPrice;
    protected $occupancy;
    protected $men;
    protected $children;
    protected $board;
    protected $descreasedAvailbaility;
    protected $rtypeName;
    protected $anchorate;
    protected $subroom;

    public function __construct() {
        $this->names = [];
        $this->descriptions = [];
        $this->boards = '';
        $this->rtype = 1;
        $this->minPrice = 0;
        $this->maxPrice = 0;
        $this->children = 0;
    }

    /**
     * 
     * @param array $data
     * @return Room
     */
    public static function createFromData(array $data): RoomInterface {
        $room = new self();
        $room->setId($data['id'])
                ->setName($data['name'])
                ->setShortname($data['shortname'])
                ->setOccupancy($data['occupancy'])
                ->setMen($data['men'])
                ->setChildren($data['children'])
                ->setAnchorate($data['anchorate'])
                ->setSubroom($data['children'])
                ->setPrice($data['price'])
                ->setAvail($data['availability'])
                ->setBoard($data['board'])
                ->setBoards($data['boards'])
                ->setWoodoo($data['woodoo'])
                ->setDescreasedAvailbaility($data['dec_avail'])
                ->setMinPrice($data['min_price'])
                ->setMaxPrice($data['max_price'])
                ->setRoomType($data['rtype'])
                ->setRoomTypeName($data['rtype_name']);

        return $room;
    }

    public function getAnchorate() {
        return $this->anchorate;
    }

    public function getAvail(): ?int {
        return $this->avail;
    }

    public function getBeds(): ?int {
        return $this->beds;
    }

    public function getBoard(): ?string {
        return $this->board;
    }

    public function getBoards(): ?string {
        return $this->boards;
    }

    public function getChildren(): ?int {
        return $this->children;
    }

    public function getDefboard(): ?string {
        return $this->defboard;
    }

    public function getDescreasedAvailbaility(): ?int {
        return $this->descreasedAvailbaility;
    }

    public function getDescriptions(): ?array {
        return $this->descriptions;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getMaxPrice(): float {
        return $this->maxPrice;
    }

    public function getMen(): ?int {
        return $this->men;
    }

    public function getMinPrice(): float {
        return $this->minPrice;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getNames(): ?array {
        return $this->names;
    }

    public function getOccupancy(): ?int {
        return $this->occupancy;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getRoomType(): ?int {
        return $this->rtype;
    }

    public function getRoomTypeName(): ?string {
        return $this->rtypeName;
    }

    public function getShortname(): ?string {
        return $this->shortname;
    }

    public function getSubroom() {
        return $this->subroom;
    }

    public function getWoodoo(): ?int {
        return $this->woodoo;
    }

    public function setAnchorate($anchorate) {
        $this->anchorate = $anchorate;
        return $this;
    }

    public function setAvail(int $avail) {
        $this->avail = $avail;
        return $this;
    }

    public function setBeds(int $beds) {
        $this->beds = $beds;
        return $this;
    }

    public function setBoard(?string $board) {
        $this->board = $board;
        return $this;
    }

    public function setBoards(?string $boards) {
        $this->boards = $boards;
        return $this;
    }

    public function setChildren(int $children) {
        $this->children = $children;
        return $this;
    }

    public function setDefboard(string $defboard) {
        $this->defboard = $defboard;
        return $this;
    }

    public function setDescreasedAvailbaility(?int $descreasedAvailbaility) {
        $this->descreasedAvailbaility = $descreasedAvailbaility;
        return $this;
    }

    public function setDescriptions(?array $descriptions) {
        $this->descriptions = $descriptions;
        return $this;
    }

    public function setId(?int $id) {
        $this->id = $id;
        return $this;
    }

    public function setMaxPrice(float $maxPrice) {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    public function setMen(int $men) {
        $this->men = $men;
        return $this;
    }

    public function setMinPrice(float $minPrice) {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }

    public function setNames(?array $names) {
        $this->names = $names;
        return $this;
    }

    public function setOccupancy(?int $occupancy) {
        $this->occupancy = $occupancy;
        return $this;
    }

    public function setPrice(float $price) {
        $this->price = $price;
        return $this;
    }

    public function setRoomType(?int $rtype) {
        $this->rtype = $rtype;
        return $this;
    }

    public function setRoomTypeName(string $rtypeName) {
        $this->rtypeName = $rtypeName;
        return $this;
    }

    public function setShortname(string $shortname) {
        $this->shortname = $shortname;
        return $this;
    }

    public function setSubroom($subroom) {
        $this->subroom = $subroom;
        return $this;
    }

    public function setWoodoo(?int $woodoo) {
        $this->woodoo = $woodoo;
        return $this;
    }

}
