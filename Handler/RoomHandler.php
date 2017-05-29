<?php

namespace Kamwoz\WubookAPIBundle\Handler;

use Kamwoz\WubookAPIBundle\Exception\WubookException;
use Kamwoz\WubookAPIBundle\Model\Room;

class RoomHandler extends BaseHandler {

    /**
     * Fetch all rooms from wubook
     *
     * @return mixed
     * @throws WubookException
     */
    public function fetchRooms() {
        return parent::defaultRequestHandler('fetch_rooms', []);
    }

    /**
     * Add new room to wubook
     *
     * @param Room $room
     *
     * @return int
     * @throws WubookException
     */
    public function addRoom(Room $room): int {
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
    public function updateRoom(Room $room): int {
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
    public function deleteRoom(Room $room): int {
        return parent::defaultRequestHandler('del_room', [$room->getId()]);
    }

    /**
     * @param Room $room
     *
     * @return null
     * @throws WubookException
     */
    public function roomImages(Room $room) {
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
