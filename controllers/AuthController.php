<?php
namespace controllers;
class AuthController{

    public function login(){
        view("login");
    }

    public function register(){
        view("register");
    }
    public function createRegister(){

    }
}