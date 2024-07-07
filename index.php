<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias | Cidade</title>

    <link rel="shortcut icon" href="assets/img/favcity.ico" type="image/x-icon">
    <!---CSS-->
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    <div class="grid-container">
        <?php require_once('./includes/header.php')?>
        <aside>
            <div class="grid-container-aside">
                <div class="entrevistas-container">
                    <h2>Entrevistas</h2>
                    <ul>
                        <li><a href="">José Almeida</a></li>
                        <li><a href="">Felipe Silva</a></li>
                        <li><a href="">Renato Rodrigues</a></li>
                        <li><a href="">Abelardo Silveira</a></li>
                        <li><a href="">André Carlos</a></li>
                        <li><a href="">Márcio Mello</a></li>
                        <li><a href="">João Pedro</a></li>
                        <li><a href="">Fernando Weiss</a></li>
                    </ul>
                </div>
                <div class="newsletter-container">
                    <h2>Newsletter</h2>
                    <div class="newsletter-form">
                        <h3>E-mail:</h3>
                        <form action="">
                            <input type="email" name="email" id="email" placeholder="Informe seu e-mail">
                            <input type="button" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </aside>
        <main>
            <div class="grid-container-main">
                <section>
                    <h2>Destaque</h2>
                    <article>
                        <div>
                            <span>NOVA LEGISLAÇÃO</span>
                            <img src="./assets/img/mundo.jpg" alt="">
                        </div>
                        <p>
                            À medida que os líderes municipais implementam políticas inovadoras para moldar o futuro da metrópole, os cidadãos se encontram no epicentro de uma transformação excitante. Esta nova legislação não só promete revitalizar bairros históricos...
                        <a href="#">Ler mais...</a>
                    </article>
                </section>
                <section>
                    <h2>Última Entrevista</h2>
                    <article>
                        <div>
                            <span>ENTREVISTA COM FELIPE SILVA</span>
                            <img src="./assets/img/doutor.jpg" alt="">
                        </div>
                        <p>
                            Dr. Felipe Silva lidera com sua expertise e visão no campo da medicina, os pacientes se encontram no centro de uma transformação crucial para a saúde e o bem-estar. Sua abordagem inovadora não apenas redefine os padrões...
                        </p>
                        <a href="#">Ler mais...</a>
                    </article>
                </section>
                <section>
                    <h2>Internacional</h2>
                    <article>
                        <ul>
                            <li>
                                <a href="#" class="noticia-container">
                                    <img src="./assets/img/internacional_1.jpg" alt="Imagem notícia" style="width: 120px; height: 100px;">
                                    <div style="border: none;">
                                        <h3>Internacional</h3>
                                        <p>Líderes mundiais assinaram um acordo histórico para reduzir as emissões de carbono em 50% até 2030...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="noticia-container">
                                    <img src="./assets/img/internacional_2.jpg" alt="Imagem notícia" style="width: 120px; height: 100px;">
                                    <div style="border: none;">
                                        <h3>Internacional</h3>
                                        <p>Cientistas anunciaram a descoberta de uma nova espécie de primata na remota região da Amazônia...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="noticia-container">
                                    <img src="./assets/img/internacional_3.jpg" alt="Imagem notícia" style="width: 120px; height: 100px;">
                                    <div style="border: none;">
                                        <h3>Internacional</h3>
                                        <p>Economias ao redor do mundo registram um crescimento inesperado do Produto Interno Bruto (PIB)...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="noticia-container">
                                    <img src="./assets/img/internacional_4.jpg" alt="Imagem notícia" style="width: 120px; height: 100px;">
                                    <div style="border: none;">
                                        <h3>Internacional</h3>
                                        <p>Um novo complexo esportivo foi inaugurado, oferecendo instalações de última geração para esportes...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </article>
                </section>
                <section>
                    <h2>Notíciais recentes</h2>
                    <article>
                        <ul>
                            <li>
                                <a href="#" class="noticia-container">
                                    <img src="./assets/img/recentes_1.jpg" alt="Imagem notícia" style="width: 120px; height: 100px;">
                                    <div style="border: none;">
                                        <h3>Notíciais recentes</h3>
                                        <p>A cidade celebrou a abertura do moderno Centro de Saúde Municipal, equipado com tecnologia de ponta...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="noticia-container">
                                    <img src="./assets/img/recentes_2.jpg" alt="Imagem notícia" style="width: 120px; height: 100px;">
                                    <div style="border: none;">
                                        <h3>Notíciais recentes</h3>
                                        <p>Escolas da cidade iniciaram um programa de reciclagem, incentivando os alunos a adotarem práticas sustentáveis...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="noticia-container">
                                    <img src="./assets/img/recentes_3.jpg" alt="Imagem notícia" style="width: 120px; height: 100px;">
                                    <div style="border: none;">
                                        <h3>Notíciais recentes</h3>
                                        <p>O festival anual de arte urbana transformou as ruas da cidade em galerias ao ar livre...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="noticia-container">
                                    <img src="./assets/img/recentes_4.jpg" alt="Imagem notícia" style="width: 120px; height: 100px;">
                                    <div style="border: none;">
                                        <h3>Notíciais recentes</h3>
                                        <p>Uma nova ciclovia foi inaugurada, conectando bairros e incentivando o uso de bicicletas como meio de transporte...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </article>
                </section>
            </div>
        </main>
        <footer>
            <div class="grid-container-footer">
                <span>Notícias Cidade © 2024</span>
            </div>
        </footer>
    </div>
</body>
</html>