<?php
namespace P4F\Components\Utilities;

include("include.php");

use P4F\Components\Utilities\abstracts\Entity as AEntity;

class User extends AEntity{
    protected $id = 0;
    protected $name;
    protected $lastname;
    protected $email;
}

$user = new User([
    'name'     => "Testínka",
    'lastname' => "Rohlíková",
    'email'    => "test@test.com",
]);

var_dump($user);

var_dump("property name: ". $user->getName());
var_dump("property email: ". $user->getEmail());
var_dump("property set email (testinka,rohlikova@productoo.com): ", $user->setEmail("testinka,rohlikova@productoo.com"));
var_dump("property new email: ". $user->getEmail());
