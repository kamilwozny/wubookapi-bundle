<?php

namespace Kamwoz\WubookAPIBundle\Model;

use DateTime;

class Reservation implements ReservationInterface {

    private $amount;
    private $customer;
    private $from;
    private $to;
    private $guests;
    private $reservationCode;
    private $origin;
    private $ccard;
    private $ancillary;
    private $ignoreRestriction;
    private $ignoreAvailability;
    private $rooms;

    public function __construct() {
        $this->origin = null;
        $this->ancillary = 0;
        $this->ccard = null;
        $this->guests = null;
        $this->ignoreRestriction = 0;
        $this->ignoreAvailability = 0;
    }

    public function getAmount(): ?int {
        return $this->amount;
    }

    public function getCustomer(): ?Customer {
        return $this->customer;
    }

    public function getFrom(): ?DateTime {
        return $this->from;
    }

    public function getGuests(): ?array {
        return $this->getGuests();
    }

    public function getReservationCode(): ?int {
        return $this->reservationCode;
    }

    public function getTo(): ?DateTime {
        return $this->to;
    }

    public function setAmount(int $amount) {
        $this->amount = $amount;
        return $this;
    }

    public function setCustomer(Customer $from) {
        $this->customer = $from;
        return $this;
    }

    public function setFrom(DateTime $from) {
        $this->from = $from;
        return $this;
    }

    public function setGuests(?array $guests) {
        $this->guests = $guests;
        return $this;
    }

    public function setReservationCode(int $reservationCode) {
        $this->reservationCode = $reservationCode;
        return $this;
    }

    public function setTo(DateTime $from) {
        $this->to = $from;
        return $this;
    }

    public function getAncillary(): int {
        return $this->ancillary;
    }

    public function getCcard() {
        return $this->ccard;
    }

    public function getIgnoreAvailability(): int {
        return $this->ignoreAvailability;
    }

    public function getIgnoreRestriction(): int {
        return $this->ignoreRestriction;
    }

    public function getOrigin() {
        return $this->origin;
    }

    public function setAncillary(int $ancillary) {
        $this->ancillary = $ancillary;
        return $this;
    }

    public function setCcard($ccard) {
        $this->ccard = $ccard;
        return $this;
    }

    public function setIgnoreAvailability(int $ignoreAvailability) {
        $this->ignoreAvailability = $ignoreAvailability;
        return $this;
    }

    public function setIgnoreRestriction(int $ignoreRestriction) {
        $this->ignoreRestriction = $ignoreRestriction;
        return $this;
    }

    public function setOrigin($origin) {
        $this->origin = $origin;
        return $this;
    }
    
    public function getRooms(): array {
        return $this->rooms;
    }

    public function setRooms(array $rooms) {
        $this->rooms = $rooms;
        return $this;
    }


}
