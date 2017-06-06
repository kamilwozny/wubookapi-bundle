<?php

namespace Kamwoz\WubookAPIBundle\Handler;

use Kamwoz\WubookAPIBundle\Exception\WubookException;
use Kamwoz\WubookAPIBundle\Model\RoomInterface;
use Kamwoz\WubookAPIBundle\Model\Room;
use ReflectionClass;
use LogicException;

class RoomHandler extends BaseHandler {
    
    private $model;
    
    public function __construct(string $model) {
        $this->model = $model;
    }

        /**
     * Fetch all rooms from wubook
     *
     * @return array
     * @throws WubookException
     */
    public function fetchRooms(): array {
        $reflection = new ReflectionClass($this->model);
        if(!$reflection->implementsInterface(RoomInterface::class)){
            throw new LogicException('Room model must implements ' . RoomInterface::class);
        }
        
        $allData = parent::defaultRequestHandler('fetch_rooms', []); 
        if(empty($allData)){
            return [];
        }
        
        foreach($allData as &$roomData){
            $roomData = $this->model::createFromData($roomData);
        }
        
        return $allData;
    }

    /**
     * Add new room to wubook
     *
     * @param Room $room
     *
     * @return int
     * @throws WubookException
     */
    public function addRoom(RoomInterface $room): int {
        return parent::defaultRequestHandler('new_room', [
                    $room->getWoodoo(),
                    $room->getName(),
                    $room->getBeds(),
                    $room->getPrice(),
                    $room->getAvail(),
                    $room->getShortname(),
                    $room->getDefboard(),
                    $room->getNames(),
                    $room->getDescriptions(),
                    $room->getBoards(),
                    $room->getRoomType(),
                    $room->getMinPrice(),
                    $room->getMaxPrice(),
        ]);
    }

    /**
     * Update existing room on wubook
     *
     * @param Room $room
     *
     * @return int
     * @throws WubookException
     */
    public function updateRoom(RoomInterface $room): int {
        return parent::defaultRequestHandler('mod_room', [
                    $room->getId(),
                    $room->getName(),
                    $room->getBeds(),
                    $room->getPrice(),
                    $room->getAvail(),
                    $room->getShortname(),
                    $room->getDefboard(),
                    $room->getNames(),
                    $room->getDescriptions(),
                    $room->getBoards(),
                    $room->getMinPrice(),
                    $room->getMaxPrice(),
        ]);
    }

    /**
     * Delete existing room from wubook
     *
     * @param Room $room
     *
     * @return int
     * @throws WubookException
     */
    public function deleteRoom(RoomInterface $room): int {
        return parent::defaultRequestHandler('del_room', [$room->getId()]);
    }

    /**
     * @param Room $room
     *
     * @return null
     * @throws WubookException
     */
    public function roomImages(RoomInterface $room) {
        return parent::defaultRequestHandler('room_images', [$room->getId()]);
    }

    /**
     * @param $url
     *
     * @return mixed
     * @throws WubookException
     */
    public function pushUpdateActivation($url) {
        return parent::defaultRequestHandler('push_update_activation', [$url]);
    }

    /**
     * @return mixed
     * @throws WubookException
     */
    public function pushUpdateUrl() {
        return parent::defaultRequestHandler('push_update_url', []);
    }

}
