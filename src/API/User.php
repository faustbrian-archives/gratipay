<?php

/*
 * This file is part of Gratipay PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Gratipay\API;

use BrianFaust\Gratipay\AbstractAPI;

class User extends AbstractAPI
{
    /**
     * @param string $username
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function charts(string $username): HttpResponse
    {
        return $this->client->get("{$username}/charts");
    }

    /**
     * @param string $username
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function profile(string $username): HttpResponse
    {
        return $this->client->get("{$username}/public");
    }

    /**
     * @param string $username
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function tips(string $username): HttpResponse
    {
        return $this->client->get("{$username}/tips");
    }

    /**
     * @param string $username
     * @param float  $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function tip(string $username, float $amount): HttpResponse
    {
        return $this->client->post("{$username}/tips", [
            'username' => $username,
            'platform' => 'gratipay',
            'amount'   => $amount,
        ]);
    }
}
