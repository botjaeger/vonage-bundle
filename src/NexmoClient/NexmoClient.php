<?php

namespace Botjaeger\NexmoBundle\NexmoClient;

use Nexmo\Client;

class NexmoClient
{
    private $client;
    private $brand;

    /**
     * NexmoClient constructor.
     * @param Client $client
     * @param string $brand
     */
    public function __construct(Client $client, string $brand)
    {
        $this->client = $client;
        $this->brand = $brand;
    }

    /**
     * @param string $recipient
     * @param string $message
     * @return \Nexmo\Message\Message
     * @throws Client\Exception\Exception
     * @throws Client\Exception\Request
     * @throws Client\Exception\Server
     */
    public function send(string $recipient, string $message)
    {
        return $this->client->message()->send([
            'to'    => $recipient,
            'from'  => $this->brand,
            'text'  => $message,
        ]);
    }

    /**
     * @param string $recipient
     * @return \Nexmo\Verify\Verification
     */
    public function verify(string $recipient)
    {
        return $this->client->verify()->start([
            'number'    => $recipient,
            'brand'     => $this->brand
        ]);
    }

    /**
     * @param string $requestId
     * @return \Nexmo\Verify\Verification
     */
    public function resendCode(string $requestId)
    {
        return $this->client->verify()->trigger($requestId);
    }

    /**
     * @param string $requestId
     * @param string $code
     * @return array
     */
    public function verifyCode(string $requestId, string $code)
    {
        try {
            $verification = $this->client->verify()->check($requestId, $code);
        } catch (\Exception $exception) {
            return [
                'status'    => $exception->getEnity()['status'],
                'message'   => $exception->getEntity()['error_text']
            ];
        }

        return $verification;
    }
}
