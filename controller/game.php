<?php
class Game
{
    function show()
    {
        $gameText = GameModel::show();
        require_once("view/game/show.php");
    }


    function showAll()
    {
        $gameText = GameModel::showAll();
        require_once("view/game/showAll.php");
    }


    function delete()
    {
        $gameText = GameModel::delete();
        require_once("view/game/delete.php");
    }


    function add()
    {
        $gameText = GameModel::add();
        require_once("view/game/add.php");
    }
}
?>