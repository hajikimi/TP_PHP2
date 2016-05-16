<?php
require_once('data/data.php');
var_dump($_GET);
$item_id = 0;
if(array_key_exists('item_id',$_GET)){
    echo $_GET['item_id'];
}
$item = $data[$item_id];
?>
<?php

?>
<?php require_once ('views/page_top.php');

?>
<div id="main">

</div>

<?php require_once('views/footer.php');

?>
