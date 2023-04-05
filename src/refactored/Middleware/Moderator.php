<?php

namespace Middleware;

include_once 'Handler.php';

use User;

class Moderator extends Handler
{
    public function checkProfile(User $user): void
    {
        if ($user->permission === 'moderator') {
            echo 'Permissão de moderador.';
        }

        parent::checkProfile($user);
    }
}