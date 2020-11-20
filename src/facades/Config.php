<?php


    namespace ecwebservices\ecframework\facades;


    use Dotenv\Dotenv;
    use RuntimeException;

    class Config
    {
        public $config;

        /**
         * Config constructor.
         * @param $directory
         */
        public function __construct($directory)
        {
            $config = Dotenv::createImmutable($directory);
            $this->config = $config->load();
        }

        public function env($item) {
            try{
                $_ENV[$item];
            }
            catch (RuntimeException $e) {
                echo 'Enviroment Variable Does Not Exist. \n';
            }

        }
    }
