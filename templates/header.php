<?php 
include_once('config/url.php');
include_once('config/process.php');

// limpa a mensagem
if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = "";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap-grid.rtl.min.css" integrity="sha512-at7npIl3u0XaVTsnGD9hAyp6JHX0tt88dTnwoOB/safyhpP5Toedb1MJGd6H8dBpnX626A1Lx5m7SwQn1ywhgw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/styles.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary arruma-menu">
            <a class="navbar-brand" href="<?php echo $base_url; ?>index.php">
                <img src="<?php echo $base_url; ?>img/logo.svg" alt="Agenda">
            </a>
            <div class="navbar-nav">
                <a class="nav-link" id="home-link" href="<?php echo $base_url; ?>index.php">Agenda</a>
                <a class="nav-link" id="home-link" href="<?php echo $base_url; ?>create.php">Adicionar Contato</a>
            </div>
        </nav>
    </header>