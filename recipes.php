<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Receitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/recipes.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./css/reset.css" media="screen" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-color: blue;
        }



        .carousel-control-prev, .carousel-control-next {
            background: none; /* Remove o fundo */
            border: none; /* Remove a borda */
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: black; /* Define a cor da seta */
            border-radius: 50%; /* Borda arredondada, se necessário */
            width: 30px; /* Largura da seta */
            height: 30px; /* Altura da seta */
        }

        .carousel-control-prev-icon::after, .carousel-control-next-icon::after {
            display: none; /* Remove o símbolo padrão das setas */
        }

        .carousel-control-prev:hover, .carousel-control-next:hover {
            opacity: 0.7; /* Efeito de hover */
        }
        
        
    </style>
</head>

<body class="wrapper">
    <header class="header">
        <img src="./assets/logo.webp" class="logo" alt="Logo" />
        <nav class="navigation">
            <a class="nav-link" href="home.html">Página inicial</a>
            <a class="nav-link" href="products.php">Produtos</a>
            <a class="nav-link" href="recipes.html">Receitas</a>
            <a class="nav-link" href="about-us.html">Sobre nós</a>
            <a class="nav-link" href="contact.html">Contato</a>
            <div class="search-box">
                <i class="nav-search fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Pesquisar..." class="search-input" />
        </nav>
    </header>
    <main class="main-content">
        <h1 class="recipes-title">Receitas Saudáveis</h1>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                    aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                    aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                    aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10"
                    aria-label="Slide 11"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11"
                    aria-label="Slide 12"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12"
                    aria-label="Slide 13"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/bolinhoLentinhaBrocolis.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolinho de lentilha com brócolis</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/brownieGraoBico.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Brownie de grão-de-bico</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/RisotoArrozArboreo.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Risoto queijo parmesão </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/legumesQuinoaBranca.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Legumes com quinoa e molho tahine </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/sopaLentilhaVermelha.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Sopa de lentilha vermelha</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/panquecaCacauSementeGirassol.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Panqueca fit com whey de cacau</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/farofaSementeAboboraTorrada.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Farofa de semente de abóbora</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/GermenTrigo.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Salada de trigo em grão</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/pategirassol.jpeg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Patê de semente de girassol</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/sorvetelowcarbdepistache.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Sorvete low carb de pistache</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/pudimchiacombananaenozes.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Pudim de chia com banana e nozes</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/iorgutemacadamia.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Iogurte de macadâmia</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/biscoitodeaveiacomcastanha.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Biscoito de aveia com castanha de caju</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/leitedeamendoas.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Leite de amêndoas</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/paodepisache.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Pão de pistache</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/brigadeirodepistache.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Brigadeiro fit com nozes e castanhas</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/saladadefolhascomamendoas.jpeg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Salada de folhas com amêndoas laminadas</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/bolodeavela.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de avelã</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/barradecereais.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Barra de cereais com mix de castanhas</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/nozespecan .jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Torta de nozes pecã agridoce</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/amendoascruascaramelizadas.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Amêndoas cruas caramelizadas</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/arrozdecastanha.jpeg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Arroz de castanha-de-caju</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/browniemacadamia.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Brownie de macadâmia</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/granola-caseira.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Granola caseira com mix de castanhas</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/patedecastanhadecaju.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Patê de castanha-de-caju sem sal</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/paolevedodecerveja.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Pão de levedo de cerveja </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/bolo-de-maca-farinhaamendoas.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de maça com farinha de amêndoa</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/panquecabananaverde.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Panqueca de farinha de banana verde</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/farofa-crocante-de-panko.jpeg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Farofa com farinha panko</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/Acai-Smoothie.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Smoothie de açaí em pó</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/bolofarinhaberinjela.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de farinha de berinjela </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/paodelinhaca.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Pão com farinha de linhaça dourada</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/VitaminaGérmentrigo.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Vitamina com gérmen de trigo</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/biscoitoarrozintegral.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Biscoito de farinha de arroz integral </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/gelatinacolageno.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Gelatina com colágeno hidrolisado</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/bolofarinhadecoco.png" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de farinha de coco</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/biscoitomaracuja.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Biscoito de farinha de maracujá</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/docebananacacau.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Doce de banana e cacau </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/bolocacaualcalino.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de cacau </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/mingauaveia.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Mingau de aveia </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/bolouva.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de farinha de uva</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/panquecafarinhasoja.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de farinha de soja </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/bolotrigointregal.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de farinha de trigo integral</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/paoamidodemilho.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Pão de amido de milho</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/biscoito-amidodemilho.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Biscoito de amido de milho</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/bolinhodetrigulho.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolinho de triguilho</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/pudimfarelodeaveia.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de laranja cristalizada</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/Bolo-amendoas.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de farinha de amêndoa</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="carousel-item">
                    <ul class="recipes-carousel">
                        <li class="recipes-card">
                            <img src="./assets/bolopolvilhodoce.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de polvilho doce</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/boloaveia.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Bolo de farinha de aveia</h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                        <li class="recipes-card">
                            <img src="./assets/pudimfarelodeaveia.jpg" alt="" class="image" />
                            <div class="recipes-info">
                                <h2 class="recipes-name">Pudim com gelatina e farelo de aveia </h2>
                                <div class="recipes-cta">
                                    <button class="recipes-button">Ver receita</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>            
            </div>

            <div class="btn-left">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    </div>
    
<div>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>                   
   
    </main>

   
</body>


<footer class="footer">

    <script src="./scripts/script.js"></script>

    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>



</html>