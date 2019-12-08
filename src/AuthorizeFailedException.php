<?php

/*
 * This file is part of the Ezreal/socialite.
 *
 * (c) Ezreal <i@Ezreal.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Ezreal\Socialite;

class AuthorizeFailedException extends \RuntimeException
{
    /**
     * Response body.
     *
     * @var array
     */
    public $body;

    /**
     * Constructor.
     *
     * @param string $message
     * @param array  $body
     */
    public function __construct($message, $body)
    {
        parent::__construct($message, -1);

        $this->body = $body;
    }
}
