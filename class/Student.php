<?php


class Student
{
    public $name;
    public $email;
    public $address;
    public $groupID;
    public function __construct($name, $email, $address, $groupID)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->groupID = $groupID;
    }
}