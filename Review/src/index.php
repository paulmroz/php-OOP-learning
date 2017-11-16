<?php

require 'AuthController.php';
require 'RegisterUser.php';

$registration = new Acme\RegisterUser;

$authController = new Acme\AuthController($registration);


$authController->register();