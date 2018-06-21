<?php require_once ("../resources/config.php");?>
<?php include(TEMPLATE_FRONT.DS."header.php") ?>

<?php
     process_transaction();
    //session_destroy();
?>
    <div class="container">
        <h1>THANK YOU</h1>
    </div>

<?php include(TEMPLATE_FRONT.DS."footer.php") ?>