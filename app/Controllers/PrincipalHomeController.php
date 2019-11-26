<?php


class HomeController
{
    function __construct()
    {

    }

    function index()
    {
        require_once('Views/Home/index.php');
    }
}