<?php
namespace P4F\Components\Utilities;

include("include.php");

use P4F\Components\Utilities\interfaces\Singleton as ISingleton;

use P4F\Components\Utilities\traits\Singleton as TSingleton;

class Server extends Container implements ISingleton{
    use TSingleton;

    const RESOURCE = "_SERVER";

    public function __construct(){
        parent::__construct();
    }
}
$server = new Server();

var_dump($server);

var_dump("Old Value");
var_dump("Global var value: ".$_SERVER['APP_ENV']);
var_dump("Object var value: ".$server->get('APP_ENV'));

$server->set("prod", "APP_ENV");
var_dump("New Value");
var_dump("Global var value: ".$_SERVER['APP_ENV']);
var_dump("Object var value: ".$server->get('APP_ENV'));
