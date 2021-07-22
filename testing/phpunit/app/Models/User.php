<?php

namespace App\Models;

class User
{

    public $first_name;
    public $last_name;
    public $email_address;

    public function setFirstName($firstname)
    {
        $this->first_name = trim($firstname);
    }

    public function getFirstName()
    {
        return $this->first_name;
        //return "Alice";
    }

    public function setLastName($lastname)
    {
        $this->last_name = trim($lastname);
    }

    public function getLastName()
    {
        return $this->last_name;
        //return "Smith";
    }

    public function getFullName()
    {
        return "$this->first_name $this->last_name";
        //return $this->first_name . " " . $this->last_name;
        //return "Alice Smith";
    }

    public function setEmailAddress($emailaddress)
    {
        $this->email_address = $emailaddress;
    }

    public function getEmailAddress()
    {
        //return $this->email_address;
        return "alicesmith@email.com";
    }

    public function getEmailVariables()
    {
        return [
            'full_name' => $this->getFullName(),
            'email' => $this->getEmailAddress()
        ];
    }
}

?>
