<?php

declare(strict_types=1);

/*
 * This file is part of Gratipay PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Gratipay\API;

use Plients\Gratipay\AbstractAPI;

class User extends AbstractAPI
{
    /**
     * @param string $username
     *
     * @return \Plients\Http\HttpResponse
     */
    public function charts(string $username): HttpResponse
    {
        return $this->client->get("{$username}/charts");
    }

    /**
     * @param string $username
     *
     * @return \Plients\Http\HttpResponse
     */
    public function profile(string $username): HttpResponse
    {
        return $this->client->get("{$username}/public");
    }

    /**
     * @param string $username
     *
     * @return \Plients\Http\HttpResponse
     */
    public function tips(string $username): HttpResponse
    {
        return $this->client->get("{$username}/tips");
    }

    /**
     * @param string $username
     * @param float  $amount
     *
     * @return \Plients\Http\HttpResponse
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
