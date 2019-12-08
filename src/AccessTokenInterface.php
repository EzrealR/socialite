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

/**
 * Interface AccessTokenInterface.
 */
interface AccessTokenInterface
{
    /**
     * Return the access token string.
     *
     * @return string
     */
    public function getToken();
}
