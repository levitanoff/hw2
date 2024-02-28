<?php

declare(strict_types=1);

namespace Levitanoff\Hw4;


use GuzzleHttp\Client;

class SiteChecker
{
    public object $client;
    public object $response;

    public function __construct() {
        $this->client = new Client();
    }

    public function getRequest($url) {
        $this->response = $this->client->request('GET', $url);
    }

    public function getCode() {
        return $this->response->getStatusCode();
    }

}