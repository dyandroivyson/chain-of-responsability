<?php

include_once 'Middleware/Administrator.php';
include_once 'Middleware/AuthenticatedUser.php';
include_once 'Middleware/MinorAge.php';
include_once 'Middleware/Moderator.php';
include_once 'Middleware/OfLegalAge.php';

use Middleware\Administrator;
use Middleware\AuthenticatedUser;
use Middleware\MinorAge;
use Middleware\Moderator;
use Middleware\OfLegalAge;

include_once 'User.php';

$user = new User('Tester', 21, 'authenticated_user');

$handler = new MinorAge;
$handler->setNext(new OfLegalAge)
    ->setNext(new AuthenticatedUser)
    ->setNext(new Moderator)
    ->setNext(new Administrator);
$handler->checkProfile($user);