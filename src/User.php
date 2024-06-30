<?php

namespace Odoswitch\Odoswitch;

class User
{

    private $username;
    private $password;
    private $system;

    public function user($system = 'ddet')
    {
        return "Odoswitch Systeme VoIP Cloud  " . $system;
    }
}
