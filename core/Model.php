<?php

namespace core;

class Model
{
    public $db = null;
    public function __construct()
    {
        try{
            $this->db = $this->getConnetion();
        }catch(\PDOException $ex){
            die("Error: {$ex->getMessage()}");
        }
    }
    private function getConnetion(){
         
        $opt = [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC];
        $connetion = new \PDO(DATABASE['driver'].':host='. DATABASE['host'] . ';dbname=' . DATABASE['name'] . ';charset=' . DATABASE['charset'], DATABASE['user'], DATABASE['pass'], $opt);
        $connetion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        // \var_dump($connetion);
        return $connetion;
    }
}