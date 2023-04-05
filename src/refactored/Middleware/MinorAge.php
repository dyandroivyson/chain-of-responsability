<?php

namespace Middleware;

include_once 'Handler.php';

use User;

class MinorAge extends Handler
{
    public function checkProfile(User $user): void
    {
        if ($user->age < 18) {
            echo 'Usuário tem menos de 18 anos.<br>';
        }

        parent::checkProfile($user);
    }
}