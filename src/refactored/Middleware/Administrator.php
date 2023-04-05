<?php

namespace Middleware;

include_once 'Handler.php';

use User;

class Administrator extends Handler
{
    public function checkProfile(User $user): void
    {
        if ($user->permission === 'administrator') {
            echo 'Permissão de administrador.';
        }

        parent::checkProfile($user);
    }
}