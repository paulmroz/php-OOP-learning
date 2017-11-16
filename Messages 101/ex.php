<?php


use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$pawel = new Person('Paweł Mróz');

$staff = new Staff([$pawel]);

$laracast = new Business($staff);

$laracast->hire(new Person('Adam Małysz'));

var_dump($laracast->getStaffMembers());



