
<?php include("../includes/header.php") ?>
        <div class="container px-5 my-5 fade">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <h2 class="fw-bolder mb-4 text-center">Crie sua conta com facilidade</h2>
                    <form action="<?= baseUrl ?>actions/actionUsuario.php" method="post" name="formUsuario" id="formUsuario">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Digite seu nome completo" required>
                            <label for="nomeUsuario">Nome: </label>
                            <div class="invalid-feedback">A name is required.</div>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Digite seu Email" required>
                            <label for="emailUsuario">Email: </label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="telefoneUsuario" name="telefoneUsuario" placeholder="Digite seu Telefone" required>
                            <label for="emailUsuario">Telefone: </label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="Digite sua senha" required>
                            <label for="senhaUsuario" class="form-label">Senha: </label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control" id="confirmarSenhaUsuario" name="confirmarSenhaUsuario" placeholder="Confime sua senha" required>
                            <label for="confirmarSenhaUsuario" class="form-label">Confirme sua senha: </label>
                        </div>
                        <button type="submit" class="btn btn-dark w-100" id="btnCadastro" disabled>Cadastrar</button>
                    </form>
                    <p name="msgCadastro" id="msgCadastro"></p>
                    <br>
                    <script src="<?= baseUrl ?>js/frontValidation.js"></script>
                </div>
            </div>
        </div>
<?php include("../includes/footer.php") ?>