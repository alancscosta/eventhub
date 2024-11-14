<?php include("header.php") ?>

    <div class="container-fluid text-center">

        <h2>Cadastro de Evento:</h2>

        <div class="d-flex justify-content-center mb-3">

            <div class="row">

                <div class="col-sm-12">

                    <form action="actionEvento.php" class="was-validated" method="POST" enctype="multipart/form-data">

                        <div class="form-floating mb-3 mt-3">
                            <input type="file" class="form-control" id="fotoEvento" name="fotoEvento" required>
                            <label for="fotoEvento" class="form-label">Foto:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="tituloEvento" placeholder="Informe o titulo do Evento" name="tituloEvento" required>
                            <label for="tituloEvento" class="form-label">Titulo:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="descricaoEvento" placeholder="Informe uma descrição do Evento" name="descricaoEvento" required></textarea>
                            <label for="descricaoEvento" class="form-label">Descrição:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" id="categoriaEvento" name="categoriaEvento" required>
                                <option value="artesVisuais">Artes Visuais</option>
                                <option value="culinaria">Culinária</option>
                                <option value="empreendedorismo">Empreendedorismo</option>
                                <option value="esportes">Esportes</option>
                                <option value="finanças">Finanças</option>
                                <option value="literatura">Literatura</option>
                                <option value="marketing">Marketing</option>
                                <option value="moda">Moda</option>
                                <option value="recursosHumano">Recursos Humanos</option>
                                <option value="saude">Saúde</option>
                                <option value="sustentabilidade">Sustentábilidade</option>
                                <option value="tecnologia">Tecnologia</option>
                                <option value="outros">Outros</option>
                            </select>
                            <label for="categoriaEvento" class="form-label">Categoria:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="date" class="form-control" id="dataEvento" placeholder="Informe a data do Evento" name="dataEvento" required>
                            <label for="dataEvento" class="form-label">Data:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="time" class="form-control" id="horaEvento" placeholder="Informe a data do Evento" name="horaEvento" required>
                            <label for="horaEvento" class="form-label">Hora:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="time" class="form-control" id="duracaoEvento" placeholder="Informe a data do Evento" name="duracaoEvento" required>
                            <label for="duracaoEvento" class="form-label">Duração:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <br>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="enderecoEvento" placeholder="Informe o ENDEREÇO do Evento" name="enderecoEvento" required>
                            <label for="enderecoEvento" class="form-label">Endereço:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                                <select class="form-select" id="cidadeEvento" name="cidadeEvento" required>
                                    <option value="telemaco" selected>Telêmaco Borba</option>
                                </select>
                                <label for="cidadeEvento" class="form-label">Cidade:</label>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>

                        <br>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="proprietarioEvento" placeholder="Informe o NOME do Proprietário" name="proprietarioEvento" required>
                            <label for="proprietarioEvento" class="form-label">Proprietário:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="emailEvento" placeholder="Informe o EMAIL do Proprietário" name="emailEvento" required>
                            <label for="emailEvento" class="form-label">Email:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                        
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="telefoneEvento" placeholder="Informe o TELEFONE do Proprietário" name="telefoneEvento" required>
                            <label for="telefoneEvento" class="form-label">Telefone:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                        
                        <br>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
       
    </div>

<?php include("footer.php") ?>
