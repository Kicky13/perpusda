<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_login');
        $this->load->library('session');
    }
    public function index()
    {
        if (isset($_SESSION['login'])){
            $this->load->view('home');
        } else {
            $this->load->view('login');
        }
    }
    public function login()
    {
        if ('login'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data = $this->m_login->cek($username, $password);
            $cek = count($data);
            if ($cek > 0){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $data['id_user'];
                $_SESSION['login'] = true;
                redirect('/home');
            } else {
                echo 'User tak tersedia';
            }
        }
    }
    public function logout()
    {
        unset(
            $_SESSION['username'],
            $_SESSION['password'],
            $_SESSION['login']
        );
        $this->index();
    }
}
