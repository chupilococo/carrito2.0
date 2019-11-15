<?php
    include_once ('logic/getContentent.php');
    session_start();
?>
<?php
    require_once('parts/header.php');
?>
<div class="content">
    <?php getContent()?>
</div>
<?php
    require_once ('scripts/js.php');
    require_once('parts/footer.php');