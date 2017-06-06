<?php

namespace Kamwoz\WubookAPIBundle\Model;

/**
 * Description of RoomInterface
 *
 * @author Damian Zschille
 */
interface RoomInterface {

    public static function createFromData(array $data): RoomInterface;

    public function getId(): ?int;

    public function setId(?int $id);

    public function getWoodoo(): ?int;

    public function getName(): ?string;

    public function getBeds(): ?int;

    public function getPrice(): float;

    public function getAvail(): ?int;

    public function getShortname(): ?string;

    public function getDefboard(): ?string;

    public function getNames(): ?array;

    public function getDescriptions(): ?array;

    public function getBoards(): ?string;

    public function getRoomType(): ?int;

    public function setWoodoo(?int $woodoo);

    public function setName(string $name);

    public function setBeds(int $beds);

    public function setPrice(float $price);

    public function setAvail(int $avail);

    public function setShortname(string $shortname);

    public function setDefboard(string $defboard);

    public function setNames(?array $names);

    public function setDescriptions(?array $descriptions);

    public function setBoards(?string $boards);

    public function setRoomType(?int $rtype);

    public function getMinPrice(): float;

    public function getMaxPrice(): float;

    public function setMinPrice(float $minPrice);

    public function setMaxPrice(float $maxPrice);

    public function getOccupancy(): ?int;

    public function getMen(): ?int;

    public function getBoard(): ?string;

    public function getDescreasedAvailbaility(): ?int;

    public function getRoomTypeName(): ?string;

    public function setOccupancy(?int $occupancy);

    public function setMen(int $men);

    public function setBoard(?string $board);

    public function setDescreasedAvailbaility(?int $descreasedAvailbaility);

    public function setRoomTypeName(string $rtypeName);

    public function getChildren(): ?int;

    public function setChildren(int $children);

    public function getAnchorate();

    public function getSubroom();

    public function setAnchorate($anchorate);

    public function setSubroom($subroom);
}
