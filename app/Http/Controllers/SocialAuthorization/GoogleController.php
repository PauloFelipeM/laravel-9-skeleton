<?php

namespace App\Http\Controllers\SocialAuthorization;

class GoogleController extends SocialController
{
    protected function type(): string
    {
        return 'google';
    }
}
