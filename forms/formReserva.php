
<?php include("../includes/header.php") ?>


        <div class="container px-5 my-5 fade">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
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
                                <?php
                                    $livroSelecionado = isset($_GET['id']) ? $_GET['id'] : '';
                                    if($livroSelecionado == ''){
                                        echo "<option disabled selected>Selecione um livro</option>";
                                    }
                                    include("../includes/conn.php");
                                    $query = "SELECT * FROM livro";
                                    $result = mysqli_query($link, $query);
                                        while($reg = mysqli_fetch_assoc($result)){
                                            $idLivro = $reg['id'];
                                            $tituloLivro = $reg['titulo'];
                                            $fotoLivro = $reg['foto'];
                                            $path = img_books . basename($fotoLivro);
                                            $selecionado = ($idLivro == $livroSelecionado) ? 'selected' : '';
                                            echo "<option value='$idLivro' data-img='$path' $selecionado>$tituloLivro</option>";
                                        }

                                            ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Reservar</button>
                    </form>
                </div>
                <div class="col-lg-6 justify-content-center align-items-center d-flex fade">
                    <img src="" alt="Imagem do Livro" id="imgReserva" class="img-fluid rounded mb-4 mb-sm-0" style="width: 300px"/>
                </div>
            </div>
            <script src="<?= baseUrl ?> . js/scripts.js"></script>
        </div>

<?php include("../includes/footer.php") ?>