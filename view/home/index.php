<?php include('view/header.php') ?>
<h3>
    <?php
    echo $homeText;
    ?>
</h3>
<a href="index.php?controller=home&action=show"><button>Show HomeModel</button></a>
<a href="index.php?controller=home&action=showAll"><button>ShowAll HomeModel</button></a>
<a href="index.php?controller=home&action=delete"><button>Delete HomeModel</button></a>
<a href="index.php?controller=home&action=add"><button>Add HomeModel</button></a>
<a href="index.php?controller=game&action=show"><button>Show GameModel</button></a>
<a href="index.php?controller=game&action=showAll"><button>ShowAll GameModel</button></a>
<a href="index.php?controller=game&action=delete"><button>Delete GameModel</button></a>
<a href="index.php?controller=game&action=add"><button>Add GameModel</button></a>
<?php include('view/footer.php') ?>