<?php include_once('templates/header.php'); ?>

<div class="container">
<?php include_once('./templates/backbtn.html'); ?>

    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?php echo $base_url; ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?php echo $contacts["id"]; ?>">

        <div class="form-group">
            <label for="name">Nome do Contato:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o Nome" value="<?php echo $contacts["name"]; ?>" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefone do Contato:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o Telefone" value="<?php echo $contacts["phone"]; ?>" required>
        </div>

        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Digite as Observações ..." rows="3"><?php echo $contacts["observations"]; ?>
            </textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>

</div>    

<?php include_once('templates/footer.php'); ?>