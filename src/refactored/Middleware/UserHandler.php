<?php

namespace Middleware;

use User;

interface UserHandler
{
    public function checkProfile(User $user);
}