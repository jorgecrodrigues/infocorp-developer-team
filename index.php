<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Infocorp | Developers team</title>
    <!-- Meta tag's -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700" rel="stylesheet">
    <!-- Jquery 3.3.1 -->
    <script src="jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <!-- Owl Carousel -->
    <!-- Script -->
    <script src="owl-carousel-2-2.3.4/dist/owl.carousel.min.js"></script>
    <!-- Folha de estilo -->
    <link href="css/default.css" rel="stylesheet"/>
    <link href="css/components.css" rel="stylesheet"/>
</head>
<body>
<!-- Featured | BEM CSS PATTERN-->
<div id="featured" class="pbox pfeatured">
    <!-- Mouse -->
    <div class="xtop"></div>
    <div class="yleft"></div>
    <!-- End mouse -->
    <div class="pbox__middle">
        <div class="pbox__middle--content">
            <div class="pfeatured__box">
                <img class="pfeatured__box--brand" src="assets/svg/logoinfocorplonga.svg" title="Infocorp"
                     alt="Infocorp brand">
                <h1 class="pfeatured__box--line text-green">
                    Developer team <span class="w">|</span>
                </h1>
            </div>
        </div>
    </div>
    <div class="pbox__bottom">
        <div class="pbox__bottom--content">
            <p class="pfeatured__pdown">
                <a href="#projects" class="pfeatured__pdown--link" title="Veja nossos projetos">
                    <img class="pfeatured__pdown--icon" src="assets/svg/arrow-one.svg"
                         alt="Veja nossos projetos">
                </a>
            </p>
        </div>
    </div>
</div>

<!-- projects -->
<div id="projects" class="box projects">
    <div class="top">
        <div class="content">
            <ul class="pnavbar-top">
                <li class="pnavbar-top__up">
                    <a class="pnavbar-top__up--link" href="#featured">
                        <img class="pnavbar-top__up--icon" src="assets/svg/up-arrow-green.svg" alt="Arrow up">
                    </a>
                </li>
                <li class="pnavbar-top__groups">

                </li>
            </ul>


            <ul class="navbar">
                <li class="up">
                    <a href="#featured" class="link">
                        <img class="arrow-up" src="assets/svg/up-arrow-green.svg" alt="Arrow up">
                    </a>
                </li>
                <li class="title">
                    PROJETOS, <span class="subtitle">AQUI ESTÃO NOSSOS PROJETOS<br/> EM FASE DE TESTE.</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="middle">
        <div class="content">
            <div class="hbox">
                <div id="owl" class="owl">
                    <?php $projects = array_diff(scandir('test'), array('.', '..', 'index.php')); ?>
                    <?php foreach ($projects as $project): ?>
                        <p>
                            <a class="link" href="<?php echo "test/$project" ?>"><?php echo "$project" ?></a>
                        </p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="content">
            <ul class="navbar">
                <li class="title">
                    INFOCORP DEVELOPER TEAM. <span class="subtitle">Quer saber um pouco + sobre nós?</span> <span
                            class="w">_</span>
                </li>
                <li class="down">
                    <a href="#about" class="link" title="Saiba + sobre nós">
                        <img class="arrow-down" src="assets/svg/arrow-two.svg" alt="Arrow up">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="about" class="box about">
    <div class="middle">
        <div class="content">
            <div class="box">
                <div class="middle">
                    <div class="content left">
                        <h1 class="">O TEAM DEV</h1>
                        <p>
                            O nosso time é formado por alunos dos cursos de Ciência da Computação e Sistema de
                            Informação da Universidade Federal de Mato Grosso. O que fazemos? Desenvolvemos sistemas
                            para você e sua empresa. Somos apaixonados pelo que fazemos, no ritmo de sempre aprender e
                            compartilhar conhecimento além de experiência. O objetivo é simples, Aplicar o conhecimento
                            adquirido e mudar a vida das pessoas!
                        </p>
                        <p>
                            <a class="link" href="#featured">Voltar</a>
                            <a class="link" href="#projects">Ir para projetos</a>
                        </p>
                    </div>
                    <div class="content right">
                        <img class="brand" src="assets/svg/network.svg" title="Infocorp Brand"
                             alt="Infocorp Brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="content">
            <p class="infocorp">
                <b>INFOCORP</b>, Empresa Júnior do Instituto de Computação, UFMT <span class="w">|</span>
            </p>
        </div>
    </div>
</div>

<!-- Ops -->
<!--<div class="danger">
    <div id="projects" class="box">
        <div class="middle">
            <div class="content">
                A resolução da sua tela é inadequada para esta página.
                <br/>
                Min (450 X 500)
            </div>
        </div>
    </div>
</div>-->

<!-- Default script -->
<script src="js/default.js"></script>
</body>
</html>
