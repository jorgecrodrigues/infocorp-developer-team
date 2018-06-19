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
                <h1 class="pfeatured__box--line">
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
<div id="projects" class="pbox pprojects">
    <div class="pbox__top">
        <div class="pbox__top--content">
            <ul class="pnavbar-top">
                <li class="pnavbar-top__up">
                    <a class="pnavbar-top__up--link" href="#featured">
                        <img class="pnavbar-top__up--icon" src="assets/svg/arrow-two.svg" alt="Arrow up">
                    </a>
                </li>
                <li class="pnavbar-top__groups">
                    <p class="pnavbar-top__groups--title">
                        PROJETOS,
                        <span class="pnavbar-top__groups--subtitle">
                            AQUI ESTÃO NOSSOS PROJETOS<br/> EM FASE DE TESTE.
                        </span>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="pbox__middle">
        <div class="pbox__middle--content">
            <div class="o">
                <div id="owl" class="owl">
                    <?php $projects = array_diff(scandir('test'), array('.', '..', 'index.php')); ?>
                    <?php foreach ($projects as $project): ?>
                        <p><a href="<?php echo "test/$project" ?>"><?php echo "$project" ?></a></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="pbox__bottom">
        <div class="pbox__bottom--content">
            <ul class="pnavbar-bottom">
                <li class="pnavbar-bottom__groups">
                    <p class="pnavbar-bottom__groups--title">
                        INFOCORP DEVELOPER TEAM.
                        <span class="pnavbar-bottom__groups--subtitle">
                            Quer saber um pouco + sobre nós?
                        </span>
                        <span class="w">_</span>
                    </p>
                </li>
                <li class="pnavbar-bottom__down">
                    <a class="pnavbar-bottom__down--link" href="#about">
                        <img class="pnavbar-bottom__down--icon" src="assets/svg/arrow-two.svg" alt="Arrow up">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="about" class="pbox pabout">
    <div class="pbox__middle">
        <div class="pbox__middle--content">

            <div class="pbox">
                <div class="pbox__middle">
                    <div class="pbox__middle--content pabout__pbox--left">
                        <h1 class="pabout__pbox--title">O TEAM DEV</h1>
                        <p class="pabout__pbox--text">
                            O nosso time é formado por alunos dos cursos de Ciência da Computação e Sistemas de
                            Informação da Universidade Federal de Mato Grosso. O que fazemos? Desenvolvemos sistemas
                            para você e sua empresa. Somos apaixonados pelo que fazemos, no ritmo de sempre aprender e
                            compartilhar conhecimento, além de experiência. O objetivo é simples: aplicar o conhecimento
                            adquirido e mudar a vida das pessoas!
                        </p>
                        <p class="pabout__pbox--links">
                            <a class="pabout__pbox--link" href="#featured">Voltar</a>
                            <a class="pabout__pbox--link" href="#projects">Ir para projetos</a>
                        </p>
                    </div>
                    <div class="pbox__middle--content pabout__pbox--right"></div>
                </div>
            </div>

        </div>
    </div>
    <div class="pbox__bottom">
        <div class="pbox__bottom--content">
            <p class="pabout__infocorp">
                <b>INFOCORP</b>, Empresa Júnior do Instituto de Computação, UFMT <span class="w">|</span>
            </p>
        </div>
    </div>
</div>

<!-- Default script -->
<script src="js/default.js"></script>
</body>
</html>
