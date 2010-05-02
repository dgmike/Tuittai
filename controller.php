<?php

class Home
{
    public function get()
    {
        if (isset($_SESSION['login']) AND $_SESSION['login']) {
            print 'Logado';
            die;
        } else {
            include 'template/login.php';
            die;
        }
    }

}
