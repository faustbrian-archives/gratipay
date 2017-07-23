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

use BrianFaust\Http\HttpResponse;
use BrianFaust\Gratipay\AbstractAPI;

class About extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function charts(): HttpResponse
    {
        return $this->client->get('about/charts');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function paydays(): HttpResponse
    {
        return $this->client->get('about/paydays');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function stats(): HttpResponse
    {
        return $this->client->get('about/stats');
    }
}
