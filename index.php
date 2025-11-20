<?php include("includes/header.php") ?>
        <!-- Mashead header-->
        <header class="d-flex align-items-center fade bg-image py-5">
            <div class="px-5">
                <div class="row gx-5 align-items-center">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-lg-start">
                            <h1 class="display-3 fw-bold mb-4 text-light">Onde sua próxima história irá começar</h1>
                        </div>
                </div>
            </div>
        </header>

        
        <section class="text-center bg-dark py-5 fade">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        
                        <a href="#estante" class="nav-link"><div class="h2 fs-1 text-white mb-4">Venhar conhecer nossa estante!</div></a><i data-lucide="pointer" style="color:aliceblue"></i>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="fade conteiner px-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featured-vertical mb-5 position-relative">
                            <img src="<?= baseUrl ?>assets/img/destaque.png" class="featured-vertical-img" alt="Destaque vertical">
                            <div class="featured-vertical-overlay">
                                <h2 class="text-white fw-bold mb-2">Destaques de Livros</h2>
                                <a href="#" class="btn btn-light">Ver mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="genres p-4 rounded mb-5">
                        <h3 class="fw-bold mb-3">Gêneros Populares</h3>

                        <div class="genre-badges">

                            <a href="#" class="genre-item genre-ficcao">
                                <i data-lucide="book-open"></i> Ficção
                            </a>

                            <a href="#" class="genre-item genre-romance">
                                <i data-lucide="heart"></i> Romance
                            </a>

                            <a href="#" class="genre-item genre-fantasia">
                                <i data-lucide="wand-2"></i> Fantasia
                            </a>

                            <a href="#" class="genre-item genre-terror">
                                <i data-lucide="skull"></i> Terror
                            </a>

                            <a href="#" class="genre-item genre-suspense">
                                <i data-lucide="alert-triangle"></i> Suspense
                            </a>

                            <a href="#" class="genre-item genre-bio">
                                <i data-lucide="person-standing"></i> Biografias
                            </a>

                            <a href="#" class="genre-item genre-hq">
                                <i data-lucide="square-gantt-chart"></i> HQs & Mangás
                            </a>

                            <a href="#" class="genre-item genre-ciencia">
                                <i data-lucide="atom"></i> Ciência & Tecnologia
                            </a>

                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <?php 
            include("includes/conn.php");
            $query = "SELECT * FROM livro";
            $result = mysqli_query($link, $query);
            $total = mysqli_num_rows($result);
            if($total > 0){
                echo "<div class='row px-5 fade' name='estante' id='estante'>";
                    while($reg = mysqli_fetch_assoc($result)){
                        $idLivro = $reg['id'];
                        $tituloLivro = $reg['titulo'];
                        $editoraLivro = $reg['editora'];
                        $anoPublicacao = $reg['ano_publicacao'];
                        $generoLivro = $reg['genero'];
                        $autorLivro = $reg['autor'];
                        $fotoLivro = $reg['foto'];
                        $path = img_books . basename($fotoLivro);
                        echo "
                            <div class='col-sm-12 col-md-3 col-lg-2 mb-4'>
                                <div class='card h-100' style='border-radius: 12px; max-width: 300px;'>
                                    <div style='aspect-ratio: 3 / 4; width: 90%; overflow: hidden;' class='mt-3 mb-1 align-self-center'>
                                        <img src='$path' class='mb-3 card-img-top' alt='Capa do livro $tituloLivro' style='width: 100%; border-radius: 12px; height: 100%; display: block'/>
                                    </div>
                                    <div class='card-body d-flex flex-column'>
                                        <h5 class='card-title'>$tituloLivro</h3>
                                        <p class='text-muted'>$autorLivro</p>
                                        <p class='text-muted'>$anoPublicacao</p>";
                                                if($reg['status'] == 'indisponivel'){
                                                    echo "<span class='btn btn-dark mt-3 disabled'>Indisponível</span>";
                                                } 
                                                else {
                                                    echo"<a href='" . baseUrl. "forms/formReserva.php?id=$idLivro'><button class='btn btn-dark mt-3' data-bs-toggle='modal'>Reserve!</button></a>";
                                                }
                                                echo "
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
