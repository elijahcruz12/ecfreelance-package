<?php


    namespace ecwebservices\ecframework\facades;


    use Dotenv\Dotenv;
    use ecwebservices\ecframework\App;

    class Config
    {
        public function init(){
            $config = Dotenv::createImmutable(App::$directory);
            $config->load();

            return $config;
        }
    }
