<?php

namespace Middleware;

include_once 'Handler.php';

use User;

class AuthenticatedUser extends Handler
{
    public function checkProfile(User $user): void
    {
        if ($user->permission === 'authenticated_user') {
            echo 'Permissão de usuário autenticado.';
        }

        parent::checkProfile($user);
    }
}