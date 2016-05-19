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
        foreach ($catalog as $item){

            echo "<div class=\"bouteille\"><img class='bouteille' alt='$item[alt]' src='$item[filename]'/><p>$item[title]</p></div>";


        }
        ?>

</div>
<?php
                    require_once('footer.php');

?>
