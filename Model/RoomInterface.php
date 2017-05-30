<?php

namespace Kamwoz\WubookAPIBundle\Model;

/**
 * Description of RoomInterface
 *
 * @author Damian Zschille
 */
interface RoomInterface {

    public static function createFromData(array $data): RoomInterface;

    public function getId();

    public function setId($id);

    public function getWoodoo();

    public function getName();

    public function getBeds();

    public function getPrice(): float;

    public function getAvail();

    public function getShortname();

    public function getDefboard();

    public function getNames();

    public function getDescriptions();

    public function getBoards();

    public function getRoomType();

    public function setWoodoo($woodoo);

    public function setName($name);

    public function setBeds($beds);

    public function setPrice(float $price);

    public function setAvail($avail);

    public function setShortname($shortname);

    public function setDefboard($defboard);

    public function setNames($names);

    public function setDescriptions($descriptions);

    public function setBoards($boards);

    public function setRoomType($rtype);

    public function getMinPrice(): float;

    public function getMaxPrice(): float;

    public function setMinPrice(float $minPrice);

    public function setMaxPrice(float $maxPrice);

    public function getOccupancy();

    public function getMen();

    public function getBoard();

    public function getDescreasedAvailbaility();

    public function getRoomTypeName();

    public function setOccupancy($occupancy);

    public function setMen($men);

    public function setBoard($board);

    public function setDescreasedAvailbaility($descreasedAvailbaility);

    public function setRoomTypeName($rtypeName);

    public function getChildren();

    public function setChildren($children);

    public function getAnchorate();

    public function getSubroom();

    public function setAnchorate($anchorate);

    public function setSubroom($subroom);
}
