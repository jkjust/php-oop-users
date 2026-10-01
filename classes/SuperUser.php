<?php
class SuperUser extends User implements ISuperUser, IAuthorizeUser
{
    public $role;

    public static $count = 0;

    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        self::$count++;
    }

    public function showInfo()
    {
        parent::showInfo();
        echo "Роль: {$this->role}<br><br>";
    }

    public function getInfo()
    {
        return get_object_vars($this);
    }

    public function auth($login, $password)
    {
        return $this->login === $login && $this->password === $password;
    }
}
