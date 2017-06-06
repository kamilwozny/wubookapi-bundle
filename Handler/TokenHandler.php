<?php

namespace Kamwoz\WubookAPIBundle\Handler;

use Kamwoz\WubookAPIBundle\Exception\WubookException;
use Kamwoz\WubookAPIBundle\Utils\ResponseDecoder;
use Kamwoz\WubookAPIBundle\Model\TokenData;

class TokenHandler extends BaseHandler {

    private $username;
    private $password;
    private $provider_key;

    public function setTokenData(TokenData $tokenData) {
        $this->username = $tokenData->getUsername();
        $this->password = $tokenData->getPassword();
        $this->provider_key = $tokenData->getProviderKey();
    }

    /**
     * Creates new token
     * @return mixed
     * @throws WubookException
     */
    public function acquireToken() {
        
        if($this->isNotCredentialsSetted()){
            throw new WubookException('Credentials for wubook api must be setted!');
        }
        
        $args = [
            $this->username,
            $this->password,
            $this->provider_key
        ];

        $token = parent::defaultRequestHandler('acquire_token', $args, false, false, false);

        $this->client->tokenProvider->setToken($token);
        return $token;
    }
    
    private function isNotCredentialsSetted(){
        return empty($this->username) || empty($this->password) || empty($this->provider_key);
    }

    /**
     * @return bool true if token is valid
     */
    public function isCurrentTokenValid() {
        $response = $this->client->request('is_token_valid', [], true, false, false);
        $parsedResponse = ResponseDecoder::decodeResponse($response);

        $isTokenValid = $parsedResponse[0] == 0;

        return $isTokenValid;
    }

    /**
     * @return bool true if token was sucessfully released
     */
    public function releaseCurrentToken() {
        $response = $this->client->request('release_token', [], true, false, false);
        $parsedResponse = ResponseDecoder::decodeResponse($response);

        $isTokenReleased = $parsedResponse[0] == 0;
        if ($isTokenReleased) {
            $this->client->tokenProvider->removeCurrentSavedToken();
        }

        return $isTokenReleased;
    }

    /**
     * Gets stats about current token
     * @return mixed
     * @throws WubookException
     */
    public function providerInfo() {
        return parent::defaultRequestHandler('provider_info', [], true, false, false);
    }

}
