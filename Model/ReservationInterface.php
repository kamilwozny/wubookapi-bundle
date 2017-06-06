<?php

namespace Kamwoz\WubookAPIBundle\Model;

use DateTime;

interface ReservationInterface {

    public function getReservationCode(): ?int;

    public function setReservationCode(int $reservationCode);

    public function getRooms(): array;
    
    public function setRooms(array $rooms);
    
    public function getFrom(): ?DateTime;

    public function setFrom(DateTime $from);

    public function getTo(): ?DateTime;

    public function setTo(DateTime $from);

    public function getCustomer(): ?Customer;

    public function setCustomer(Customer $from);

    public function setAmount(int $amount);

    public function getAmount(): ?int;

    public function setGuests(?array $guests);

    public function getGuests(): ?array;

    public function getOrigin();

    public function getCcard();

    public function getAncillary(): int;

    public function getIgnoreRestriction(): int;

    public function getIgnoreAvailability(): int;

    public function setOrigin($origin);

    public function setCcard($ccard);

    public function setAncillary(int $ancillary);

    public function setIgnoreRestriction(int $ignoreRestriction);

    public function setIgnoreAvailability(int $ignoreAvailability);
}
