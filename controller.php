<?php
session_start();

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
    public function post()
    {
        $chave = array(post('login'), post('senha'));
        if ($chave == array('teste', 'teste')) {
            $_SESSION['login'] = $chave;
            header('Location: '.BASE_URL.'/');
        }
    }
}

class Logout
{
    public function get()
    {
        $_SESSION = array();
        session_destroy();
        header('Location: '.BASE_URL.'/');
    }

    public function post()
    {
        $this->get();
    }
}
