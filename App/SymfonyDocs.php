<?php

namespace App;

use Symfony\Component\HttpClient\HttpClient;

class SymfonyDocs
{
    public $client;
    public $url;
    public $data = [];

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    /**
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function getRequest($url)
    {
        return $this->client->request(
            'GET', $url
        );
    }

    /**
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function postRequest($url, $data){

        return $this->client->request('POST', $url,$data);
    }

    /**
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function authentification($url, $data){

        return $this->client->request('GET', $url,$data);
    }
}