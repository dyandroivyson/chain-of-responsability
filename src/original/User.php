<?php

class User
{
    public function __construct(
        public readonly string $name,
        public readonly string $age,
        public readonly string $permission,
    ){
    }
}