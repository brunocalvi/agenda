<?php include_once('./templates/header.php'); ?>

<div class="container" id="view-contact-container">
<?php include_once('./templates/backbtn.html'); ?>

    <h1 id="main-title"><?php echo $contacts['name']; ?></h1>
    <p class="bolde">Telefone:</p>
    <p><?php echo $contacts['phone']; ?></p>
    <p class="bolde">Observações:</p>
    <p><?php echo $contacts['observations']; ?></p>
</div>

<?php include_once('./templates/footer.php'); ?>