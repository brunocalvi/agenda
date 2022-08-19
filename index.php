<?php include_once('templates/header.php'); ?>

<div class="container">
    <?php if(isset($printMsg) && $printMsg != '') { ?>
        <p id="msg"><?php echo $printMsg; ?></p>
    <?php } ?>

    <h1 id="main-title">Minha Agenda</h1>

    <?php if(count($contacts) > 0) { ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact) { ?>
                    <tr>
                        <td scope="row" class="col-id"><?php echo $contact["id"]; ?></td>
                        <td scope="row"><?php echo $contact["name"]; ?></td>
                        <td scope="row"><?php echo $contact["phone"]; ?></td>
                        <td class="actions">
                            <a href="<?php echo $base_url; ?>show.php?id=<?php echo $contact["id"]; ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="#"><i class="far fa-edit edit-icon"></i></a>
                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </td>
                    </tr>

                <?php } ?>    
            </tbody>
        </table>   



    <?php } else { ?>
        <p id="empty-list-text">Ainda não há contatos na agenda <a href="<?php echo $base_url; ?>create.php">Adicionar Contato</a>.</p>

    <?php } ?>
</div>

<?php include_once('templates/footer.php'); ?>
    
