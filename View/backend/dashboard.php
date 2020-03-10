<?php
$title = "Agir - Admin";
?>

<?php ob_start()?>
<?php $startScreen = ob_get_clean() ?>

<?php ob_start()?>

<?php $content = ob_get_clean() ;
require('template.php');
?>