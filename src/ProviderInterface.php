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

interface ProviderInterface
{
    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect();

    /**
     * Get the User instance for the authenticated user.
     *
     * @param \Ezreal\Socialite\AccessTokenInterface $token
     *
     * @return \Ezreal\Socialite\User
     */
    public function user(AccessTokenInterface $token = null);
}
