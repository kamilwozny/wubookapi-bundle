<?php

namespace Kamwoz\WubookAPIBundle\Model;

class TokenData {

    private $username;
    private $password;
    private $providerKey;

    public function __construct(string $username, string $password, string $providerKey) {
        $this->username = $username;
        $this->password = $password;
        $this->providerKey = $providerKey;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getProviderKey(): string {
        return $this->providerKey;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function setProviderKey(string $providerKey) {
        $this->providerKey = $providerKey;
    }

}
