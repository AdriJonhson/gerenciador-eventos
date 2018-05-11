<?php 
    include_once ("../controller/ParticipantesController.php");
    $usuarios = Listar();
?>
<!DOCTYPE html>
<html>
<head>
    <link  rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eventos Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php">Navbar</a>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container-fluid">

        <h3 align="center">#SanaFest</h3>

        <table class='table table-striped table-hover'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                </tr>
            </thead>
            
           <tbody>
            <?php foreach($usuarios as $usuario){ ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['nome']?></td>
                </tr>
            <?php } ?>

           </tbody>
            

        </table>
    </div>


    <script src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
</body>
</html>