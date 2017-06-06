<?php

/*
 * This file is part of Gratipay PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Gratipay;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\Gratipay\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_url' => 'https://gratipay.com/',
        'headers' => [
           'User-Agent' => 'BrianFaust/Gratipay',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];
}
