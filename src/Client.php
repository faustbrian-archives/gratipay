<?php

/*
 * This file is part of Gratipay PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Gratipay;

use BrianFaust\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $key;

    /**
     * Create a new client instance.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\Gratipay\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("https://gratipay.com/?apikey={$this->key}");

        $class = "BrianFaust\\Gratipay\\API\\{$name}";

        return new $class($client);
    }
}