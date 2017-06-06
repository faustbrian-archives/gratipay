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

class User extends AbstractApi
{
    public function charts($username)
    {
        return $this->get("$username/charts");
    }

    public function profile($username)
    {
        return $this->get("$username/public");
    }

    public function tips($username)
    {
        return $this->get("$username/tips");
    }

    public function tip($username, $amount)
    {
        $this->setFormParameters([
            'username' => $username,
            'platform' => 'gratipay',
            'amount' => $amount,
        ]);

        return $this->post("$username/tips");
    }
}
