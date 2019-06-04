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
use Plients\Http\HttpResponse;

class About extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function charts(): HttpResponse
    {
        return $this->client->get('about/charts');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function paydays(): HttpResponse
    {
        return $this->client->get('about/paydays');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function stats(): HttpResponse
    {
        return $this->client->get('about/stats');
    }
}
