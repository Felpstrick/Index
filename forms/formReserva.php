
<?php include("../includes/header.php") ?>


        <div class="container px-5 my-5 fade">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-4">
                    <form action="" method="post">
                        <h2 class="fw-bolder mb-4 text-center">Faça sua reserva</h2>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="nomeReserva" name="nomeReserva" placeholder="Digite seu nome completo" required>
                            <label for="nomeReserva">Nome: </label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="emailReserva" name="emailReserva" placeholder="Digite seu Email" required>
                            <label for="emailReserva">Email: </label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="telefoneReserva" name="telefoneReserva" placeholder="Digite seu Telefone" required>
                            <label for="telefoneReserva">Telefone: </label>
                        </div>
                        <div class="mb-3 mt-3">
                            <select class="form-select" name="selecionarLivro" id="selecionarLivro">
                                <option value="" disabled selected>Selecione o livro</option>
                                <option value="">Revolução dos Bichos</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Reservar</button>
                    </form>
                </div>
                <div class="col-lg-8 justify-content-center align-items-center d-flex">
                    <p>Imagem do livro</p>
                    <img src="<?=  baseUrl ?>assets/img/portrait_black.png" alt="" class="img-fluid rounded mb-4 mb-sm-0" style="width: 300px"/>
                </div>
            </div>
        </div>

<?php include("../includes/footer.php") ?>