<?php
require_once('../data/data.php');
?>
<?php require_once ('header.php');

?>
<div id="main">
    <?php

    ?>


    <?php
    include '../data/data.php';
    foreach ($galerie as $item){

        echo "<ul class='galerie'>
				<li><img src='$item' alt=''/></li></ul>";


    }
    ?>

</div>
<?php
require_once('footer.php');

?>
