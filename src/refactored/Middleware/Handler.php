<?php

namespace Middleware;

include_once 'UserHandler.php';

use User;

abstract class Handler implements UserHandler
{
    private ?Handler $nextHandler = null;

    public function setNext(Handler $nextHandler): Handler
    {
        $this->nextHandler = $nextHandler;

        return $nextHandler;
    }

    public function checkProfile(User $user): void
    {
        $this->nextHandler?->checkProfile($user);
    }
}