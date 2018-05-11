<?php  include_once '/layouts/header.php';  ?>

    <div class="container-fluid">
        <?php 
            if(isset($_SESSION['msg_success'])){
        ?>
            <div class="alert alert-success" role="alert">
                Ingresso reservado com sucesso!
            </div>
        <?php unset($_SESSION['msg_success']); 
            }else if(isset($_SESSION['msg_error'])){ 
        ?>
            <div class="alert alert-danger" role="alert">
                Erro ao reservar o ingresso!
            </div>
        <?php 
            unset($_SESSION['msg_error']); 
        } ?>
    </div>

    <div class="container-fluid">

        <div class="col">
            <div class="row">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="layouts\assets\images\sana.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Sana Fest</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Data: 12/07/2018</h6>
                        <p class="card-text">Evento de animes, jogos, kpop e quadrinhos. Garante logo seu ingresso e divirta-se!</p>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalCompra">Adquirir Ingresso</a>
                        <a href="views/ListParticipantes.php" class="card-link">Ver participantes</a>  
                    </div>
                </div>

                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="layouts\assets\images\arduino_day.jpg" alt="Card image cap" height="187.94">
                    <div class="card-body">
                        <h5 class="card-title">Arduino Day 2018</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Data: 12/05/2018</h6>
                        <p class="card-text">Palestra sobre Arduino e muito mais venha agora e garante já seu ingresso.</p>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalCompra">Adquirir Ingresso</a>
                        <a href="views/ListParticipantes.php" class="card-link">Ver participantes</a>  
                    </div>
                </div>

                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="layouts\assets\images\ABANFARE.jpg" alt="Card image cap" height="187.94">
                    <div class="card-body">
                        <h5 class="card-title">ABANFARE</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Data: 30/11/2018</h6>
                        <p class="card-text">Final do campeonato de bandas e fanfarras do estado do Ceará.</p>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#modalCompra">Adquirir Ingresso</a>
                        <a href="views/ListParticipantes.php" class="card-link">Ver participantes</a>  
                    </div>
                </div>
            </div>
            
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Inisira seus dados</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="controller\EventoController.php">

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" required/>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Digite seu e-mail" name="email" required/>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone" required/>
                </div>

        </div>
        <div class="modal-footer">
                <input type="hidden" name="acao" value="compra"/>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Continuar</button>
            </form>
            
        </div>
        </div>
    </div>
    </div>






<?php include_once '/layouts/footer.php' ?>