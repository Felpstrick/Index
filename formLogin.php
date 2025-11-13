<?php include("header.php") ?>
        <div class="container px-5 my-5 p-5">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <h2 class="fw-bolder mb-4 text-center">Login</h2>
                    <form action="actionLogin.php" method="post" name="formLogin" id="formLogin">
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Digite seu Email" required>
                            <label for="emailUsuario">Email: </label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="Digite sua senha" required>
                            <label for="senhaUsuario" class="form-label">Password: </label>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Login</button>
                    </form>
                    <p name="mensagem" id="mensagem"></p>
                    <br>
                    <p style="text-align: center;">Ainda não possui uma conta? <a href="formUsuario.php">Clique aqui!</a></p>
                    <script src="js/frontValidation.js"></script>
                </div>
            </div>
        </div>
<?php include("footer.php") ?>