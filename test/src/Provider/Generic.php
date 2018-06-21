<?php

namespace League\OAuth2\Client\Test\Provider;

use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Psr\Http\Message\ResponseInterface;

class Generic extends GenericProvider
{
    public function __construct($options = array(), array $collaborators = array())
    {
        // Add the required defaults for AbstractProvider
        $options += array(
            'clientId'     => 'mock_client_id',
            'clientSecret' => 'mock_secret',
            'redirectUri'  => 'none',
        );

        parent::__construct($options);
    }

    protected function fetchResourceOwnerDetails(AccessToken $token)
    {
        return array(
            'mock_response_uid' => 1,
            'username'          => 'testmock',
            'email'             => 'mock@example.com',
        );
    }
}
