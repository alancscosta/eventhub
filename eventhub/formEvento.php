<?php include("header.php") ?>

    <div class="container-fluid text-center">

        <h2>Cadastro de Produto:</h2>

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
                            <label for="tituloEvento" class="form-label">Titulo do Evento:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="descricaoEvento" placeholder="Informe uma descrição do Evento" name="descricaoEvento" required></textarea>
                            <label for="descricaoEvento" class="form-label">Descrição do Evento:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" id="categoriaEvento" name="categoriaEvento" required>
                                <option value="alimentos">Alimentos</option>
                                <option value="eletronicos">Eletrônicos</option>
                                <option value="vestuario">Vestuário</option>
                            </select>
                            <label for="categoriaEvento" class="form-label">Categoria:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="dataEvento" placeholder="Informe a data do Evento" name="dataEvento" required>
                            <label for="dataEvento" class="form-label">Data do Evento:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="dataEvento" placeholder="Informe a data do Evento" name="dataEvento" required>
                            <label for="dataEvento" class="form-label">Hora do Evento:</label>
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