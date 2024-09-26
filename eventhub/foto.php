//Início do bloco de validação da FOTO
        $diretorio    = "img/"; //Define para qual diretório do sistema as imagens serão movidas
        $fotoUsuario  = $diretorio . basename($_FILES['fotoUsuario']['name']); // img/paulinho.jpg
        $erroUpload   = false; //Variável criada para verificar se houve erro no upload da foto
        $tipoDaImagem = strtolower(pathinfo($fotoUsuario, PATHINFO_EXTENSION)); //Pegar o tipo do arquivo

        //Verificar se o tamanho do arquivo é diferente de ZERO
        if($_FILES['fotoUsuario']['size'] != 0){
            
            //Verificar se o tamanho do arquivo da foto é maior do que 5MB
            if($_FILES['fotoUsuario']['size'] > 5000000){
                echo "<div class='alert alert-warning text-center'>A foto não pode ter <strong>TAMANHO</strong> maior do que 5MB!</div>";
                $erroUpload = true;
            }

            //Verificar o tipo do arquivo (pela extensão)
            if($tipoDaImagem != "jpg" && $tipoDaImagem != "jpeg" && $tipoDaImagem != "png" && $tipoDaImagem != "webp"){
                echo "<div class='alert alert-warning text-center'>A foto precisa estar nos formatos <strong>JPG, JPEG, PNG ou WEBP</strong>!</div>";
                $erroUpload = true;
            }

            //Verificar se o arquivo conseguiu ser movido para o diretório IMG
            if(!move_uploaded_file($_FILES['fotoUsuario']['tmp_name'], $fotoUsuario)){
                echo "<div class='alert alert-danger text-center'>Erro ao tentar <strong>MOVER A FOTO</strong> para o diretório de imagens!</div>";
                $erroUpload = true;
            }

        }
        else{
            echo "<div class='alert alert-warning text-center'>A <strong>foto</strong> é obrigatória!</div>";
            $erroUpload = true;
        }

        //Se não houverem erros de preenchimento, exibe os dados cadastrados!
        if(!$erroPreenchimento && !$erroUpload){