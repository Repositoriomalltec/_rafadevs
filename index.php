<?php require dirname(__FILE__) . "/inc/header.php";?>
<meta name="description" content="<?=TITULO;?>">
<meta name="keywords" content="">
<title>
    <?=TITULO;?>
</title>
</head>

<body>
    <div id="google_translate_element" style="position:absolute; top:-1px;left:-1px;"></div>
    <div class="parallax">
        <div id="group1" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div id="hello">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <img src="img/logotipo.png" alt="Malltec" data-aos="zoom-in" class="img-fluid mx-auto">
                        </div>

                    </div>
                </div>
                <a href="#group2" class="btn btn-link position-absolute text-white btn-down font2"><i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
        <div id="group2" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
                <div class="container py-4 py-md-5 px-5 px-sm-4 common-text">
                    <h3 class="position-relative fc-1 text-uppercase text-center"> Sobre mim
                        <hr class="dash">
                    </h3>
                    <div class="row mt-5 py-4 text-justify">
                        <div class="col-lg-6 offset-sm-3 col-md-7 col-sm-8 offset-sm-2">
                            <p>Olá! Meu nome é <strong>Carlos Santos</strong>!</p>
                            <p>Tenho 30 anos, moro em São Paulo, sou formado em Análise e Desenvolvimento de Sistemas.
                                Já trabalhei em pequenas e médias empresas e atualmente sou <strong>back end</strong>
                                em uma startup. Além disso, toco minha empresa e tenho alguns projetos em produção.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax__layer parallax__layer--back">
            </div>
        </div>
        <div id="group3" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
                <div class="container py-4 py-md-5 px-5 px-sm-4 common-text">
                    <h3 class="position-relative text-white text-uppercase text-center"> Skills
                        <hr class="dash">
                    </h3>
                    <div class="text-center mt-5">
                        Meu foco é desenvolvimento web, mas estou sempre estudando novas tecnologias! Aqui
                        estão algumas das minhas habilidades.
                    </div>
                    <?php require dirname(__FILE__) . "/inc/skills.php";?>
                </div>
            </div>
            <div class="parallax__layer parallax__layer--base">
            </div>
        </div>
        <div id="group4" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
                <div class="container py-4 py-md-5 px-5 px-sm-4 common-text">
                    <h3 class="position-relative fc-1 text-uppercase text-center"> Clientes
                        <hr class="dash">
                    </h3>
                    <div class="text-justify mt-5 pb-5">
                        Os trabalhos à seguir foram desenvolvidos em parceiria com profissionais web designer e
                        front-end. O back-end foi desenvolvido com algumas tecnologias citada na seção acima, baseado
                        na necessidade do cliente. Todos os sistemas possuem área administrativa desenvolvidas por mim.
                    </div>
                    <div class="row mt-5 pt-5 jobs text-center">
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                            <div class="card job">
                                <div class="card-body">
                                    <h5 class="card-title fc-1">Pedro Melo Advogados</h5>
                                    <img src="img/c2.jpg" class="img-fluid w-100" alt="Pedro Melo Advogados">
                                    <div class="visible-hover">
                                        <a href="http://pedromelo.adv.br/" target="_blank" class="btn btn-secondary">Visitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                            <div class="card job">
                                <div class="card-body">
                                    <h5 class="card-title fc-1">Kazza Flat's</h5>
                                    <img src="img/c1.jpg" class="img-fluid w-100" alt="Kazza Flat's">
                                    <div class="visible-hover">
                                        <a href="http://kazzaflats.com.br/" target="_blank" class="btn btn-secondary">Visitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                            <div class="card job">
                                <div class="card-body">
                                    <h5 class="card-title fc-1">Due Luci</h5>
                                    <img src="img/c4.jpg" class="img-fluid w-100" alt="Due Luci">
                                    <div class="visible-hover">
                                        <a href="http://dueluci.com.br/" target="_blank" class="btn btn-secondary">Visitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                            <div class="card job">
                                <div class="card-body">
                                    <h5 class="card-title fc-1">Portal Italiano</h5>
                                    <img src="img/c3.jpg" class="img-fluid w-100" alt="Portal Italiano">
                                    <div class="visible-hover">
                                        <a href="http://portalitaliano.com.br/" target="_blank" class="btn btn-secondary">Visitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax__layer parallax__layer--base">
            </div>
        </div>
        <div id="group5" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="container py-4 py-md-5 px-5 px-sm-4 common-text">
                    <h3 class="position-relative fc-1 text-uppercase text-center mt-5"> Entre em contato <hr class="dash"></h3>
                    <div class="mt-5 pb-5 text-center">
                        Curtiu meu trabalho? Quer ajuda com seu projeto? Entre em contato pelo formulário a seguir!
                    </div>
                    <?php require dirname(__FILE__) . "/inc/form.php";?>
                    <div class="row mt-5 pt-5 text-center">
                        <div class="col-sm-6 col-12 mb-4">
                            <i class="font3 fc-1 fab fa-whatsapp d-block mb-3"></i> +55 11 947563708</a>
                        </div>
                        <div class="col-sm-6 col-12">
                            <i class="font3 far fa-envelope-open fc-1 d-block mb-3"></i>
                            <a href="mailto:contatomalltec@gmail" class="d-block text-default" target="_blank">
                                contatomalltec@gmail</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div id="group6" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
                
            </div>
            <div class="parallax__layer parallax__layer--base">
            </div>
        </div> -->
        <!--  <div id="group7" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
            </div>
        </div> -->
    </div>
    <a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
    <?php require dirname(__FILE__) . "/inc/footer.php";?>
</body>

</html>