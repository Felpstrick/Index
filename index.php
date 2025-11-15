<?php include("includes/header.php") ?>
        <!-- Mashead header-->
        <header class="masthead fade">
            <div class=" px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Onde sua próxima história irá começar</h1>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="<?= baseUrl ?>assets/img/estante_home.png" alt="" class="img-fluid rounded mb-4 mb-sm-0" />
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <aside class="text-center bg-dark py-5 fade">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">Venhar conhecer nossa estante!</div>
                    </div>
                </div>
            </div>
        </aside>


        <?php 
            include("includes/conn.php");
            $query = "SELECT * FROM livro";
            $result = mysqli_query($link, $query);
            $total = mysqli_num_rows($result);
            if($total > 0){
                echo "<div class='row px-5 my-5 fade'>";
                    while($reg = mysqli_fetch_assoc($result)){
                        $idLivro = $reg['id'];
                        $tituloLivro = $reg['titulo'];
                        $editoraLivro = $reg['editora'];
                        $anoPublicacao = $reg['ano_publicacao'];
                        $generoLivro = $reg['genero'];
                        $fotoLivro = $reg['foto'];
                        $path = img_books . basename($fotoLivro);
                        echo "
                            <div class='col-sm-12 mb-4 col-md-4 mb-4 col-lg-3 mb-4'>
                                <div class='card h-100' style='height:200px'>
                                    <div class='card-body'>
                                        <h3 class='card-title' style='text-align:center'>$tituloLivro</h3>
                                        <br>
                                        <div class ='row'>
                                            <div class='col-6 text-center'>
                                                <img src='$path' class='img-fluid mb-3' alt='Capa do livro $tituloLivro' style='height:200px; object-fit: cover; ratio: 3:4;'/>
                                            </div>
                                            <div class='col-6'>
                                                <p><strong>Editora:</strong> $editoraLivro</p>
                                                <p><strong>Ano de Publicação:</strong> $anoPublicacao</p>
                                                <p><strong>Gênero:</strong> $generoLivro</p>";
                                                if($reg['status'] == 'indisponivel'){
                                                    echo "<span class='badge bg-danger'>Indisponível</span>";
                                                } 
                                                else {
                                                    echo"<a href='" . baseUrl. "forms/formReserva.php?id=$idLivro'><button class='btn btn-dark mt-3' data-bs-toggle='modal'>Reserve!</button></a>";
                                                }
                                                echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div:
                    </div>

                    ";
                echo "</div>";
                }
            }


            
        
        ?>
        
        

<?php include("includes/footer.php") ?>
