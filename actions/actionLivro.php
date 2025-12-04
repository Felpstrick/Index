<?php include("../includes/header.php") ?>

<?php  
    $tituloLivro = $autorLivro = $editoraLivro = $publicacaoLivro = $generoLivro = $descricaoLivro ="";
    $ok = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tituloLivro = trim($_POST["nomeLivro"]);
        $editoraLivro = trim($_POST["editoraLivro"]);
        $publicacaoLivro = trim($_POST["publicacaoLivro"]);
        $publicacaoLivro = date('Y-m-d');
        $anoPublicacao = date('Y');
        $generoLivro = trim($_POST["generoLivro"]);
        $autorLivro = trim($_POST["autorLivro"]);
        $descricaoLivro = trim($_POST["descricaoLivro"]);

        if (empty($tituloLivro) || empty($editoraLivro) || empty($publicacaoLivro) || empty($generoLivro) || empty($autorLivro) || empty($descricaoLivro)) {
            $ok = false;
            echo"<span class='text-danger'>Campos não preenchidos</span>";
        }   
        $directory    = img_books;
        $fotoCapa  =   $_FILES["fotoCapa"]["name"];
        $finalPath = img_dir . $fotoCapa;
        $uploadOK     = true;
        $imgType = strtolower(pathinfo($fotoCapa, PATHINFO_EXTENSION));

        if($_FILES["fotoCapa"]["size"] > 5000000) {
            echo "<div class='alert alert-warning'>Atenção! A foto ultrapassa o <strong>TAMANHO MÁXIMO</strong> permitido (5MB)!</div>";
            $uploadOK = false;
        }
        if($imgType != "jpg" && $imgType != "png" && $imgType != "jpeg") {
            echo "<div class='alert alert-warning'>Atenção! Apenas <strong>JPG, JPEG, PNG</strong> são permitidos!</div>";
            $uploadOK = false;
        }
        else{
            if(!move_uploaded_file($_FILES["fotoCapa"]["tmp_name"], $finalPath)){
                echo "<div class='alert alert-warning'>Erro ao tentar mover 
                    <strong>A FOTO</strong> para o diretório $directory!</div>";
                $uploadOK = false;
            }
        }

        $fotoComplentar = $_FILES["fotoComplementar"]["name"];
        $numFotos = count($fotoComplentar);
        $paths = [];

        for ($i = 0; $i < $numFotos; $i++) {
            $imgTypeComp = strtolower(pathinfo($fotoComplentar[$i], PATHINFO_EXTENSION));

            if($_FILES["fotoComplementar"]["size"][$i] > 5000000) {
                echo "<div class='alert alert-warning'>Atenção! A foto ultrapassa o <strong>TAMANHO MÁXIMO</strong> permitido (5MB)!</div>";
                $uploadOK = false;
            }
            if($imgTypeComp != "jpg" && $imgTypeComp != "png" && $imgTypeComp != "jpeg") {
                echo "<div class='alert alert-warning'>Atenção! Apenas <strong>JPG, JPEG, PNG</strong> são permitidos!</div>";
                $uploadOK = false;
            }

            $novoNome = uniqid("livro_") . "." . $imgTypeComp;
            $finalPathComp = img_dir . $novoNome;
            $pathDB = $directory . $novoNome;
            if(!move_uploaded_file($_FILES["fotoComplementar"]["tmp_name"][$i], $finalPathComp)){
                echo "<div class='alert alert-warning'>Erro ao tentar mover 
                    <strong>A FOTO</strong> para o diretório $directory!</div>";
                $uploadOK = false;
            } 
            else {
                $paths[] = $novoNome;
                }
            }
        

        if ($ok && $uploadOK) {
            include("../includes/conn.php");
            $sql = "INSERT INTO livro (foto, titulo, autor, editora, ano_publicacao, genero, descricao, status) 
            VALUES ('$fotoCapa', '$tituloLivro', '$autorLivro', '$editoraLivro', '$anoPublicacao', '$generoLivro', '$descricaoLivro', 'disponivel')";

            mysqli_query($link, $sql);
            $idlivro = mysqli_insert_id($link);

            foreach ($paths as $path) {
                $sqlComp = "INSERT INTO img_livros (caminho, idLivro) 
                VALUES ('$path', '$idlivro')";

                mysqli_query($link, $sqlComp);
            }

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