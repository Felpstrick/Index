<?php require("../includes/config.php") ?>
<?php include("../includes/header.php") ?>

<?php  
    $tituloLivro = $autorLivro = $editoraLivro = $publicacaoLivro = $generoLivro = "";
    $ok = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tituloLivro = trim($_POST["nomeLivro"]);
        $editoraLivro = trim($_POST["editoraLivro"]);
        $publicacaoLivro = trim($_POST["publicacaoLivro"]);
        $publicacaoLivro = date('Y-m-d');
        $anoPublicacao = date('Y');
        $generoLivro = trim($_POST["generoLivro"]);

        if (empty($tituloLivro) || empty($editoraLivro) || empty($publicacaoLivro) || empty($generoLivro)) {
            $ok = false;
            echo"<span class='text-danger'>Campos não preenchidos</span>";
        }
        

        if ($ok) {
            include("../includes/conn.php");
            $sql = "INSERT INTO livro (titulo, editora, ano_publicacao, genero, status) 
            VALUES ('$tituloLivro', '$editoraLivro', '$anoPublicacao', '$generoLivro', 'disponivel')";
            mysqli_query($link, $sql);
            mysqli_close($link);
            echo"<div class='container align-center text-center jusftify-content-center'>
                    <span class='text-success mt-5'>Cadastro realizado com sucesso!</span>
                </div>";
        }
    }

?>

<?php include("../includes/footer.php") ?>