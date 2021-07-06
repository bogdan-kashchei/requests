<?php

namespace App;

use GuzzleHttp\Client;

class GuzzleRequest
{
    public $client;
    public $url;
    public $data = [];

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRequest($url)
    {
        return $this->client->get($url);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postRequest($url, $data)
    {
        return $this->client->post($url, $data);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postApiRequest($url)
    {
        return $this->client->post($url);
    }
}