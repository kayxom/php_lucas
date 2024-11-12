<?php
    include('process/conn.php');
    
    $msg = '';
    
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        $status = $_SESSION['status'];
        $_SESSION['msg'] = '';
        $_SESSION['status'] = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Pedido</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-ZCbKRCUGAJoNkeks1kpP4OTVp7sP1yioe5JwLzQFfL0zy1qnxGFmt6g/eSTRulon" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTn4FgCGR7D7k5Qs4wlLArmaZq8kYR10EOn1caEP0QEo9QkaGN26/rzmbl2m1OifuWoQ7aB" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a href="index.php" class="navbar-brand">
                <img src="img/pizza.svg" alt="Pizzaria do João" id="brand-logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Peça sua Pizza</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <?php if($msg != '') { ?>
        <div class="alert alert-<?php echo $status ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif; ?>
</body>
</html>