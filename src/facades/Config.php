<?php


    namespace ecwebservices\ecframework\facades;


    use Dotenv\Dotenv;

    class Config
    {
        public function __construct($directory){
            $config = Dotenv::createImmutable($directory);
            $config->load();

            return $config;
        }
    }
