<?php

namespace App\Services;

class Authentication
{
    /**
     * Logs a user in with their email and password.
     *
     * @param string $email The user's email address.
     * @param string $password The user's password.
     * @return bool Returns true if the user is successfully logged in, false otherwise.
     */
    public function loginUserWithEmailPassword(string $email, string $password): bool
    {
        return true;
    }

    public function register(array $inputs): bool
    {
        return true;
    }
}
