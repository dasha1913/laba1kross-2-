<?php
include "user_class.php";
include "user_data.php";
$login = $_POST['login'];
$password = $_POST['password'];
if (!empty($login) && !empty($password))
    {
        foreach ($users as $user)
        {
           if ($login == $user['login'] && $password == $user['password'])
           {
               switch ($user['role'])
               {
                   case 'admin':
                       {
                            $admin = new Admin($user);
                            $admin->welcome();
                            break;
                       }
                   case 'manager':
                       {
                           $manager = new Manager($user);
                           $manager->welcome();
                           break;
                        }
                  case 'client':
                  {
                      $client = new Client($user);
                      $client->welcome();
                      break;
                  }
              }
           }
        }
    }
    else
        {

            echo "Данные не верны.";
            ?>
            <br>
            <a href="index.php">Вернуться назад</a><?php
        }?>