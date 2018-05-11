<?php session_start();?>
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

        <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingresso Sana Fest 2018</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <b>Nome:</b> <?= $_SESSION['usuario']['nome']; ?> <br>
            <b>E-Mail:</b> <?=  $_SESSION['usuario']['email']; ?> <br>
            <b>Local:</b> Centro de Eventos - Fortaleza/CE
        </div>
        <div class="modal-footer">
            <form action="../controller/EventoController.php" method="post">
                <input type="hidden" name="acao" value="print"/>
                <button type="submit" class="btn btn-success">Imprimir</button>
            </form>
        </div>
        </div>
    </div>
    </div>


    <script src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#modalCompra').modal('show');
        });
    </script>
</body>
</html>