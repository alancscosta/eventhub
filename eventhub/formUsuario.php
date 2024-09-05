<?php include("header.php") ?>
        <section class="h-100" style="background-color: #000a68;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                    <img src="img/eventhublogo.png"
                        alt="Sample photo" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"/>
                    </div>
                    <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                        <h3 class="mb-5 text-uppercase">Formulário de Cadastro</h3>
                        <form action="actionUsuario.php" class="was-validated" method="POST" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="nomeUsuario" class="form-control form-control-lg" name="nomeUsuario" required/>
                                    <label class="form-label" for="nomeUsuario">Nome</label>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="sobrenomeUsuario" class="form-control form-control-lg" name="sobrenomeUsuario" required/>
                                    <label class="form-label" for="sobrenomeUsuario">Sobrenome</label>
                                    <div class="valid-feedback"></div>
                                    ,<div class="invalid-feedback"></div>
                                </div>
                            </div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="enderecoUsuario" class="form-control form-control-lg" name="enderecoUsuario" required/>
                                <label class="form-label" for="enderecoUsuario">Endereço</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                            <h6 class="mb-0 me-4">Genero: </h6>

                            <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" name="femininoUsuario" id="femininoUsuario"
                                value="femininoUsuario" required/>
                                <label class="form-check-label" for="femininoUsuario">Feminino</label>
                            </div>

                            <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" name="masculinoUsuario" id="masculinoUsuario"
                                value="masculinoUsuario" required/>
                                <label class="form-check-label" for="masculinoUsuario">Masculino</label>
                            </div>

                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="numeroEnderecoUsuario" class="form-control form-control-lg" name="numeroEnderecoUsuario" required/>
                                <label class="form-label" for="numeroEnderecoUsuario">Número</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="cepUsuario" class="form-control form-control-lg" name="cepUsuario" required/>
                                <label class="form-label" for="cepUsuario">CEP</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="complementoUsuario" class="form-control form-control-lg" name="complementoUsuario" required/>
                                <label class="form-label" for="complementoUsuario">Complemento</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="emailUsuario" class="form-control form-control-lg" name="emailUsuario" required/>
                                <label class="form-label" for="emailUsuario">Email</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="senhaUsuario" class="form-control form-control-lg" name="senhaUsuario" required/>
                                <label class="form-label" for="senhaUsuario">Senha</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>

                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="confirmarSenhaUsuario" class="form-control form-control-lg" name="confirmarSenhaUsuario" required/>
                                <label class="form-label" for="confirmarSenhaUsuario">Confirmar Senha</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="d-flex justify-content-end pt-3">
                                <button type="submit" class="btn btn-primary btn-lg ms-2">Cadastrar</button>
                            
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </form>

<?php include("footer.php") ?>