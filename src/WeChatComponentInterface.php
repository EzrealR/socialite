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
 * Interface WeChatComponentInterface.
 */
interface WeChatComponentInterface
{
    /**
     * Return the open-platform component app id.
     *
     * @return string
     */
    public function getAppId();

    /**
     * Return the open-platform component access token string.
     *
     * @return string
     */
    public function getToken();
}
