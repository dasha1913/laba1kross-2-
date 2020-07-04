<?php
class User
{
    protected $name;
    protected $surname;
    protected $login;
    protected $password;
    protected $lang;

    function __construct($user)
    {
        $this->name = $user['name'];
        $this->surname = $user['surname'];
        $this->login=$user['login'];
        $this->password=$user['password'];
        $this->lang=$user['lang'];
    }
}
class Admin  extends User
{
    public function welcome()
    {
         echo "Добрый день админ " . $this->name . " " . $this->surname . ". Вы можете на сайте делать всё.";
    }
}
class Manager  extends User
{
    public function welcome()
    {
        echo "Добрый день менеджер " . $this->name . " " . $this->surname . ". Вы можете на сайте изменять, удалять и создавать клиентов.";
    }
}
class Client extends  User
{
    public function welcome()
    {
        echo "Добрый день клиент " . $this->name . " " . $this->surname . ". Вы можете на сайте просматривать информацию доступную пользователям.";
    }
}
?>