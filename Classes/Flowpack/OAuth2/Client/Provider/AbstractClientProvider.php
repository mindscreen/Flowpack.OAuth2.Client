<?php
namespace Flowpack\OAuth2\Client\Provider;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Flowpack.OAuth2.Client".*
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Security\Account;
use Neos\Flow\Security\Authentication\Provider\AbstractProvider;
use Neos\Party\Domain\Model\Person;

/**
 */
abstract class AbstractClientProvider extends AbstractProvider
{
    /**
     * @param Account $account
     * @param Person $userData
     * @Flow\Signal
     */
    protected function emitAccountCreated(Account $account, Person $userData) {}
}
