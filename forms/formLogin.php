
<?php include("../includes/header.php") ?>
        <div class="container px-5 my-5">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <h2 class="fw-bolder mb-4 text-center fade" id="tituloLogin">Login</h2>
                    <form action="<?= baseUrl ?>actions/actionLogin.php" method="post" name="formLogin" id="formLogin" class="fade">
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Digite seu Email" required>
                            <label for="emailLogin">Email: </label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control" id="senhaLogin" name="senhaLogin" placeholder="Digite sua senha" required>
                            <label for="senhaLogin" class="form-label">Senha: </label>
                        </div>
                        <button type="submit" class="btn btn-dark w-100" id="btnLogin" disabled>Login <i class="bi bi-person-check-fill"></i></button>
                    </form>
                    <p name="msgLogin" id="msgLogin"></p>
                    <br>
                    <p style="text-align: center;" class="fade">Ainda não possui uma conta? <a href="<?= baseUrl ?>forms/formUsuario.php">Clique aqui!</a></p>
                    <script src="<?= baseUrl ?>js/frontValidation.js"></script>
                </div>
            </div>
        </div>
<?php include("../includes/footer.php") ?>