<?php

namespace Odoswitch\Odoswitch;

class User
{

    private $username;
    private $password;
    private $domain;
    private $system;
    public function __construct($domain, $username)
    {
        $this->domain = $domain;
        $this->username = $username;
    }
    public function user($system = 'ddet'): string
    {
        return "Odoswitch Systeme VoIP Cloud  " . $system;
    }
    public function getdomain(): string
    {
        return $this->domain;
    }
}
