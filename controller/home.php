<?php
class Home
{
    function start()
    {
        $homeText = HomeModel::start();
        require_once("view/home/index.php");
    }


    function show()
    {
        $homeText = HomeModel::show();
        require_once("view/home/show.php");
    }


    function showAll()
    {
        $homeText = HomeModel::showAll();
        require_once("view/home/showAll.php");
    }


    function delete()
    {
        $homeText = HomeModel::delete();
        require_once("view/home/delete.php");
    }


    function add()
    {
        $homeText = HomeModel::add();
        require_once("view/home/add.php");
    }
}
?>