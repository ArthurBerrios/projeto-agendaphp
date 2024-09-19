<?php
include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html")?>
    <h1 id="main-title"><?=$contact["name"]?></h1>
    <p class="bold">Telefone:
        <p><?=$contact["phone"]?></p>
    </p>
    <p class="bold">Observações:
        <p><?=$contact["observations"]?></p>
    </p>
</div>


<?php
include_once("templates/footer.php");
?>