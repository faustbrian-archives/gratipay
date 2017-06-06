<?php

/*
 * This file is part of Gratipay PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Gratipay\Api;

use BrianFaust\Gratipay\AbstractApi;

class About extends AbstractApi
{
    public function charts()
    {
        return $this->get('about/charts');
    }

    public function paydays()
    {
        return $this->get('about/paydays');
    }

    public function stats()
    {
        return $this->get('about/stats');
    }
}
