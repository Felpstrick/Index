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
        $autorLivro = trim($_POST["autorLivro"]);

        if (empty($tituloLivro) || empty($editoraLivro) || empty($publicacaoLivro) || empty($generoLivro) || empty($autorLivro)) {
            $ok = false;
            echo"<span class='text-danger'>Campos não preenchidos</span>";
        }   
        $directory    = img_books;
        $fotoLivro  =   $_FILES["fotoLivro"]["name"];
        $finalPath = img_dir . $fotoLivro;
        $uploadOK     = true;
        $imgType = strtolower(pathinfo($fotoLivro, PATHINFO_EXTENSION));

        if($_FILES["fotoLivro"]["size"] > 5000000) {
            echo "<div class='alert alert-warning'>Atenção! A foto ultrapassa o <strong>TAMANHO MÁXIMO</strong> permitido (5MB)!</div>";
            $uploadOK = false;
        }
        if($imgType != "jpg" && $imgType != "png" && $imgType != "jpeg") {
            echo "<div class='alert alert-warning'>Atenção! Apenas <strong>JPG, JPEG, PNG</strong> são permitidos!</div>";
            $uploadOK = false;
        }
        else{
            if(!move_uploaded_file($_FILES["fotoLivro"]["tmp_name"], $finalPath)){
                echo "<div class='alert alert-warning'>Erro ao tentar mover 
                    <strong>A FOTO</strong> para o diretório $directory!</div>";
                $uploadOK = false;
            }
        }
        

        if ($ok && $uploadOK) {
            include("../includes/conn.php");
            $sql = "INSERT INTO livro (foto, titulo, autor, editora, ano_publicacao, genero, status) 
            VALUES ('$finalPath', '$tituloLivro', '$autorLivro', '$editoraLivro', '$anoPublicacao', '$generoLivro', 'disponivel')";
            mysqli_query($link, $sql);
            mysqli_close($link);
            echo"<div class='container align-center text-center jusftify-content-center mt-5 p-5'>
                    <p class='alert alert-success mt-5'>Cadastro realizado com sucesso!</p>
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