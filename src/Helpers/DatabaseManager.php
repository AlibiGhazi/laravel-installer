<?php

namespace AlibiGhazi\Installer\Helpers;

use Brotzka\DotenvEditor\DotenvEditor as Env;

class DatabaseManager
{

    private $DatabaseParams = [];

    public function SetDatabaseParams($db_host, $db_user, $db_pass, $db_name, $db_port)
    {
        $this->DatabaseParams['db_host'] = $db_host;
        $this->DatabaseParams['db_username'] = $db_user;
        $this->DatabaseParams['db_password'] = $db_pass;
        $this->DatabaseParams['db_database'] = $db_name;
        $db_port == NULL
            ? $this->DatabaseParams['db_port'] = 3306
            : $this->DatabaseParams['db_port'] = $db_port;


        return $this->DatabaseParams;
    }


    public function check()
    {
        $mysqlConnection = @mysqli_connect(
            $this->DatabaseParams['db_host'],
            $this->DatabaseParams['db_username'],
            $this->DatabaseParams['db_password'],
            $this->DatabaseParams['db_database'],
            $this->DatabaseParams['db_port']
        );
        if (!$mysqlConnection) {
            return false;
        } else {
            return true;
        }
    }

    public function setDatabaseParamsEnv()
    {
        $env = new Env();

        foreach ($this->DatabaseParams as $key => $value) {
            $env->changeEnv([
                strtoupper($key) => $value
            ]);
        }

    }


}