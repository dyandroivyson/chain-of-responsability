<?php

include_once 'User.php';

$user = new User('Tester', 21, 'authenticated_user');

if ($user->age < 18 && $user->permission === 'authenticated_user') {
    echo 'Usuário tem menos de 18 anos.<br>';
    echo 'Permissão de usuário autenticado.';
} else if ($user->age >= 18 && $user->permission === 'authenticated_user') {
    echo 'Usuário tem mais de 18 anos.<br>';
    echo 'Permissão de usuário autenticado.';
} else if ($user->age < 18 && $user->permission === 'moderator') {
    echo 'Usuário tem menos de 18 anos.<br>';
    echo 'Permissão de moderador.';
} else if ($user->age >= 18 && $user->permission === 'moderator') {
    echo 'Usuário tem mais de 18 anos.<br>';
    echo 'Permissão de moderador.';
} else if ($user->age < 18 && $user->permission === 'administrator') {
    echo 'Usuário tem menos de 18 anos.<br>';
    echo 'Permissão de administrador.';
} else if ($user->age >= 18 && $user->permission === 'administrator') {
    echo 'Usuário tem mais de 18 anos.<br>';
    echo 'Permissão de administrador.';
}