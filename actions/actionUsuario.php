<?php include("../includes/header.php") ?>

<?php  
    $nomeUsuario = $emailUsuario = $telefoneUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
    $ok = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeUsuario = trim($_POST["nomeUsuario"]);
        $emailUsuario = trim($_POST["emailUsuario"]);
        $telefoneUsuario = trim($_POST["telefoneUsuario"]);
        $senhaUsuario = trim($_POST["senhaUsuario"]);
        $confirmarSenhaUsuario = trim($_POST["confirmarSenhaUsuario"]);

        if (empty($nomeUsuario) || empty($emailUsuario) || empty($telefoneUsuario) || empty($senhaUsuario) || empty($confirmarSenhaUsuario)) {
            $ok = false;
            echo"<span class='text-danger'>Campos não preenchidos</span>";
        } 
        if ($senhaUsuario !== $confirmarSenhaUsuario) {
            echo"<span class='text-danger'>Senhas não coincidem</span>";
            $ok = false;
        }
        else{
            $senhaUsuario = md5($senhaUsuario);
        }

        if ($ok) {
            include("../includes/conn.php");
            $sql = "INSERT INTO usuario (nome, email, telefone, senha, tipo) 
            VALUES ('$nomeUsuario', '$emailUsuario', '$telefoneUsuario', '$senhaUsuario', 'usuario')";
            mysqli_query($link, $sql);
            mysqli_close($link);
            echo"<div class='container align-center text-center jusftify-content-center'>
                    <span class='text-success mt-5'>Cadastro realizado com sucesso!</span>
                </div>
                <script>
                    setTimeout(function(){
                        window.location.href = '" . baseUrl . "';
                    }, 3000);
                </script>";
        }
    }

?>

<?php include("../includes/footer.php") ?>