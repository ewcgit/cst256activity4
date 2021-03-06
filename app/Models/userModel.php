<?php

namespace App\Models;

class userModel{

// Private variables created as previously instructed.
private $username;
private $password;

function __construct($username, $password){ // Username and password constructor.
    $this->username=$username;
    $this->password=$password;
}

// Auto-generated getters and setters are now all below.
/**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

/**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

/**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

/**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}