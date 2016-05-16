<?php
require_once ('data/data.php');
?>
<?php require_once ('views/page_top.php');

?>
<div id="main">
    <?php

    ?>
    <ul>

        <?php foreach ($data as $id => $item){?>
            <li>
                <div>
                    <p> <?= $item['nom']?>, <span class="prix"><?=$item['prix'] ?></span></p>
                    
                    <img src="<?= $item['photo']"?>" alt=""/>

                </div>
            </li>

        <?php } ?>
    </ul>
</div>
<?php
                    require_once ('views/page_bottom.php');

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>

</body>
</html>