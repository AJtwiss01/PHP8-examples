<?php


class User
{
    public function profile()
    {
        return null;
        // return new profile;
    }
}


class Profile
{
    public function employement()
    {
        return 'web developer';
    }
}


$user = new User;

echo $user->profile()?->employement() ?? 'not profided';
