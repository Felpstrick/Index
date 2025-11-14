
<?php include("../includes/header.php") ?>
        <div class="container px-5 my-5 p-5 fade">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <h2 class="fw-bolder mb-4 text-center">Cadstro de livros</h2>
                    <form action="<?= baseUrl ?>actions/actionLivro.php" method="post" name="formLivro" id="formLivro">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="nomeLivro" name="nomeLivro" placeholder="Digite o nome do livro: " required>
                            <label for="nomeLivro">Livro: </label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="autorLivro" name="autorLivro" placeholder="Digite o autor do livro: " required>
                            <label for="autorLivro">Autor: </label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="editoraLivro" name="editoraLivro" placeholder="Digite a editora: " required>
                            <label for="editoraLivro">Editora: </label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="date" class="form-control" id="publicacaoLivro" name="publicacaoLivro" required>
                            <label for="publicacaoLivro">Data de publicação: </label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="generoLivro" class="form-control" id="generoLivro" name="generoLivro" placeholder="Digite o gênero do livro: " required>
                            <label for="generoLivro" class="form-label">Gênero: </label>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Cadastrar</button>
                    </form>
                    <p name="msgLivro" id="msgLivro"></p>
                    <br>
                    <script src="<?= baseUrl ?>js/frontValidation.js"></script>
                </div>
            </div>
        </div>
<?php include("../includes/footer.php") ?>
