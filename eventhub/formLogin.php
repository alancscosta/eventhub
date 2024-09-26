<?php include("header.php") ?>
    <section class="vh-100" style="background-color: #000a68;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="img/formlogin.png"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form action="actionLogin.php" method="POST" enctype="multipart/form-data">

                    <div class="d-flex align-items-center mb-3 pb-1">
                        <span class="h1 fw-bold mb-0">EventHub</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Bem vindo, acesse sua conta!</h5>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form2Example17" class="form-control form-control-lg" require/>
                        <label class="form-label" for="form2Example17">Email</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form2Example27" class="form-control form-control-lg" require/>
                        <label class="form-label" for="form2Example27">Senha</label>
                    </div>

                    <div class="pt-1 mb-4">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Esqueceu senha?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Não tem conta? <a href="formUsuario.php"
                        style="color: #393f81;">Cadastre aqui</a></p>
                    </form>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <style>
        body {
            background-color: #000a68;
        }
    </style>

<?php include("footer.php") ?>