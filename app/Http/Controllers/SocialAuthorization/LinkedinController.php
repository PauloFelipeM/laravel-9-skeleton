<?php

namespace App\Http\Controllers\SocialAuthorization;

class LinkedinController extends SocialController
{
    protected function type(): string
    {
        return 'linkedin';
    }
}
