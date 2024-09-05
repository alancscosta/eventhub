<?php include "header.php"; ?>

<?php
    //Bloco para declaração de variáveis PHP
    $nomeUsuario = $sobrenomeUsuario = $enderecoUsuario = $femininoUsuario = $masculinoUsuario = $numeroEnderecoUsuario = $cepUsuario = $complementoUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
    $erroPreenchimento = false;

    //Verifica o método de requisição do formulário
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Validação do campo nomeUsuario utilizando a função empty
        //Verifica se o campo do formulário está vazio e caso sim, exibe mensagem de alerta
        if(empty($_POST["nomeUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>NOME</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        //Se o campo não estiver vazio, ele filtra o dado e armazena na variável PHP
        else {
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
        }

        if(empty($_POST["sobrenomeUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>SOBRENOME</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        //Se o campo não estiver vazio, ele filtra o dado e armazena na variável PHP
        else {
            $sobrenomeUsuario = filtrar_entrada($_POST["sobrenomeUsuario"]);
        }

        //Validação do campo enderecoUsuario utilizando a função empty
        if(empty($_POST["enderecoUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CIDADE</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $enderecoUsuario = filtrar_entrada($_POST["enderecoUsuario"]);
        }

        //Validação do campo femininoUsuario utilizando a função empty
        if(empty($_POST["femininoUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>GENERO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $femininoUsuario = filtrar_entrada($_POST["femininoUsuario"]);
        }

        //Validação do campo masculinoUsuario utilizando a função empty
        if(empty($_POST["masculinoUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>GENERO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $masculinoUsuario = filtrar_entrada($_POST["masculinoUsuario"]);
        }

        //Validação do campo numeroEnderecoUsuario utilizando a função empty
        if(empty($_POST["numeroEnderecoUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>NUMERO ENDEREÇO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $numeroEnderecoUsuario = md5(filtrar_entrada($_POST["numeroEnderecoUsuario"]));
        }

        //Validação do campo cepUsuario utilizando a função empty

        if(empty($_POST["cepUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $cepUsuario = md5(filtrar_entrada($_POST["cepUsuario"]));
        }

        //Validação do campo complementoUsuario utilizando a função empty

        if(empty($_POST["complementoUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $complementoUsuario = md5(filtrar_entrada($_POST["complementoUsuario"]));
        }

        //Validação do campo emailUsuario utilizando a função empty

        if(empty($_POST["emailUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $emailUsuario = md5(filtrar_entrada($_POST["emailUsuario"]));
        }

        //Validação do campo senhaUsuario utilizando a função empty

        if(empty($_POST["senhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $senhaUsuario = md5(filtrar_entrada($_POST["senhaUsuario"]));
        }

        //Validação do campo confirmarSenhaUsuario utilizando a função empty
        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
        else {
            $confirmarSenhaUsuario = md5(filtrar_entrada($_POST["confirmarSenhaUsuario"]));
            if($senhaUsuario != $confirmarSenhaUsuario){
                echo "<div class='alert alert-warning text-center'>As <strong>SENHAS</strong> não coincidem!</div>";
                $erroPreenchimento = true;
            }
        }

        //Se não houverem erros de preenchimento, exibe os dados cadastrados!
        if(!$erroPreenchimento){

            //Armazena a QUERY na variável $inserirUsuario
            $inserirUsuario = "INSERT INTO Usuarios (nomeUsuario, sobrenomeUsuario, enderecoUsuario, femininoUsuario, masculinoUsuario, numeroEnderecoUsuario, cepUsuario, complementoUsuario, emailUsuario, senhaUsuario)
            VALUES ('$nomeUsuario', '$sobrenomeUsuario', '$enderecoUsuario', '$femininoUsuario', '$masculinoUsuario', '$numeroEnderecoUsuario', '$cepUsuario', '$complementoUsuario', '$emailUsuario', '$senhaUsuario')";

            //Inclui o arquivo de conexao com o banco de dados
            include "conexaoBD.php";

            //Utiliza a função msyqli_query() para executar a QUERY
            //Se a função conseguir executar a query, exibe mensagem e monta a tabela com os dados cadastrados
            if(mysqli_query($conn, $inserirUsuario)){
                echo "
                    <div class='alert alert-success text-center'><strong>Usuário</strong> cadastrado com sucesso!</div>
                ";
            }
            else{
                echo "<div class='alert alert-danger text-center'>Erro ao tentar cadastrar <strong>Usuário</strong></div>" . mysqli_error($conn);
            }
            
        }

    }

    //Função para filtrar dados do formulário e evitar SQL Injection
    function filtrar_entrada($dado){
        $dado = trim($dado); //Remove espaços desnecessários
        $dado = stripslashes($dado); //Remove as barras invertidas
        $dado = htmlspecialchars($dado); //Converte caracteres especiais em entidades HTML

        return($dado);
    }

?>

<?php include "footer.php"; ?>