
<?php include("header.php") ?>
        <div class="container-fluid px-5 my-5 fade">
            <div class="row">
                
                <div class="text-center mb-5 col-sm-6">
                    <h1 class="fw-bolder">Sobre nós</h1>
                    <p class="lead fw-normal text-muted mb-0">Conheça mais sobre nossa equipe e missão.</p>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8">
                        <p class="text-muted" style="text-align: justify;">Nossa missão é proporcionar aos leitores uma plataforma onde possam descobrir novas histórias e autores. 
                            Acreditamos que cada livro tem o poder de transformar vidas e queremos facilitar essa conexão entre leitores e escritores.</p>
                        <p class="text-muted" style="text-align: justify;">Além disso, buscamos proporcionar uma plataforma onde os leitores possam visualizar os livros que temos disponíveis,
                            podendo realizar uma reserva, assim não perdendo a oportunidade de ler aquele livro tão desejado.</p>
                        </div>
                    </div>
                    <button class="btn btn-dark rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Send Feedback</span>
                        </span>
                    </button>
                </div>
                <div class="col-sm-6">
                    <div class="about-img">
                        <img src="<?= baseUrl ?>assets/img/pessoa-folheando-livro.jpg" alt="About Us" class="img-fluid rounded mb-4 mb-sm-0" />
                    </div>
                </div>
            </div>
            

            

        </div>

<?php include("footer.php") ?>