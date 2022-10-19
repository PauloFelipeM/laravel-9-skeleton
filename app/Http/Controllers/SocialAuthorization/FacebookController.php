<?php

namespace App\Http\Controllers\SocialAuthorization;

class FacebookController extends SocialController
{
    protected function type(): string
    {
        return 'facebook';
    }
}
