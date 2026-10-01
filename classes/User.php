<?php
class User extends UserAbstract
{
    public $name;
    public $login;
    public $password;

    public static $count = 0;

    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;

     
        if (get_class($this) === __CLASS__) {
            self::$count++;
        }
    }

    public function __destruct()
    {
        echo "Пользователь {$this->login} удален<br>";
    }

    public function showInfo()
    {
        echo "Имя: {$this->name}<br>";
        echo "Логин: {$this->login}<br>";
        echo "Пароль: {$this->password}<br><br>";
    }
}
