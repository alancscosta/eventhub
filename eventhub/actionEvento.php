<?php include("header.php"); ?>

<?php

    //Bloco para declaração das variáveis
    $fotoEvento = $tituloEvento= $descricaoEvento = $categoriaEvento = $dataEvento = $horaEvento = $duracaoEvento = $enderecoEvento = $cidadeEvento = $proprietarioEvento = $emailEvento = $telefoneEvento = "";
    $erroPreenchimento = false; //Variável para controle de erros durante o preenchimento do formulário

    //Verifica o método de envio do FORM
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Validação do campo tituloEvento
        if(empty($_POST["tituloEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>TITULO DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $tituloEvento = filtrar_entrada($_POST["tituloEvento"]);
        }

        //Validação do campo descricaoEvento
        if(empty($_POST["descricaoEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>DESCRIÇÃO DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $descricaoEvento = filtrar_entrada($_POST["descricaoEvento"]);
        }

        //Validação do campo categoriaEvento
        if(empty($_POST["categoriaEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CATEGORIA DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $categoriaEvento = filtrar_entrada($_POST["categoriaEvento"]);
        }

        //Validação do campo dataEvento
        if(empty($_POST["dataEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>DATA DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $dataEvento = filtrar_entrada($_POST["dataEvento"]);
        }

        //Validação do campo horaEvento
        if(empty($_POST["horaEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>HORA DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $horaEvento = filtrar_entrada($_POST["horaEvento"]);
        }

        //Validação do campo duracaoEvento
        if(empty($_POST["duracaoEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>HORA DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $duracaoEvento = filtrar_entrada($_POST["duracaoEvento"]);
        }
        
        //Validação do campo enderecoEvento
        if(empty($_POST["enderecoEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>ENDEREÇO DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $enderecoEvento = filtrar_entrada($_POST["enderecoEvento"]);
        }

        //Validação do campo cidadeEvento
        if(empty($_POST["cidadeEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CIDADE DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $cidadeEvento = filtrar_entrada($_POST["cidadeEvento"]);
        }

        //Validação do campo proprietarioEvento
        if(empty($_POST["proprietarioEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>PROPRIETARIO DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $proprietarioEvento = filtrar_entrada($_POST["proprietarioEvento"]);
        }

        //Validação do campo emailEvento
        if(empty($_POST["emailEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>EMAIL DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $emailEvento = filtrar_entrada($_POST["emailEvento"]);
        }

        //Validação do campo telefoneEvento
        if(empty($_POST["telefoneEvento"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>TELEFONE DO EVENTO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $telefoneEvento = filtrar_entrada($_POST["telefoneEvento"]);
        }

        //Início do bloco de validação da FOTO
        $diretorio    = "img/"; //Define para qual diretório do sistema as imagens serão movidas
        $fotoEvento  = $diretorio . basename($_FILES['fotoEvento']['name']); // img/paulinho.jpg
        $erroUpload   = false; //Variável criada para verificar se houve erro no upload da foto
        $tipoDaImagem = strtolower(pathinfo($fotoEvento, PATHINFO_EXTENSION)); //Pegar o tipo do arquivo

        //Verificar se o tamanho do arquivo é diferente de ZERO
        if($_FILES['fotoEvento']['size'] != 0){
            
            //Verificar se o tamanho do arquivo da foto é maior do que 5MB
            if($_FILES['fotoEvento']['size'] > 5000000){
                echo "<div class='alert alert-warning text-center'>A foto não pode ter <strong>TAMANHO</strong> maior do que 5MB!</div>";
                $erroUpload = true;
            }

            //Verificar o tipo do arquivo (pela extensão)
            if($tipoDaImagem != "jpg" && $tipoDaImagem != "jpeg" && $tipoDaImagem != "png" && $tipoDaImagem != "webp"){
                echo "<div class='alert alert-warning text-center'>A foto precisa estar nos formatos <strong>JPG, JPEG, PNG ou WEBP</strong>!</div>";
                $erroUpload = true;
            }

            //Verificar se o arquivo conseguiu ser movido para o diretório IMG
            if(!move_uploaded_file($_FILES['fotoEvento']['tmp_name'], $fotoEvento)){
                echo "<div class='alert alert-danger text-center'>Erro ao tentar <strong>MOVER A FOTO</strong> para o diretório de imagens!</div>";
                $erroUpload = true;
            }

        }
        else{
            echo "<div class='alert alert-warning text-center'>A <strong>foto</strong> é obrigatória!</div>";
            $erroUpload = true;
        }
        
        //Se NÃO houver erro de preenchimento (caso a variável de controle esteja com o valor 'false')
        if(!$erroPreenchimento && !$erroUpload){

            //Cria a Query para realizar a inserção das informações na tabela Produtos
            $inserirEvento = "INSERT INTO eventos (fotoEvento, tituloEvento, descricaoEvento, categoriaEvento, dataEvento, horaEvento, duracaoEvento, enderecoEvento, cidadeEvento, proprietarioEvento, emailEvento, telefoneEvento)
                            VALUES ('$fotoEvento', '$tituloEvento', '$descricaoEvento', '$categoriaEvento', '$dataEvento', '$horaEvento', '$duracaoEvento',  '$enderecoEvento', '$cidadeEvento', '$proprietarioEvento', '$emailEvento', '$telefoneEvento')"; 

            //Inclui o arquivo de conexao com o banco de dados
            include "conexaoBD.php";

            //Utiliza a função msyqli_query() para executar a QUERY
            //Se a função conseguir executar a query, exibe mensagem e monta a tabela com os dados cadastrados
            if(mysqli_query($conn, $inserirEvento)){
                echo "
                    <div class='alert alert-success text-center'><strong>Evento</strong> cadastrado com sucesso!</div>
                ";
            }
            else{
                echo "<div class='alert alert-danger text-center'>Erro ao tentar cadastrar <strong>Evento</strong></div>" . mysqli_error($conn);
            }
            
        }

    }

    //Função para filtrar as entradas de dados do formulário para evitar SQL Injection
    function filtrar_entrada($dado){
        $dado = trim($dado); //Remove espaços desnecessários
        $dado = stripslashes($dado); //Remove as barras invertidas
        $dado = htmlspecialchars($dado); //Converte caracteres especiais em entidades HTML

        return($dado); //Retorna o dado já filtrado
    }

?>

<?php include("footer.php");?>