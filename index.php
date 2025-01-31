<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternativa Autolocadora</title>
    <!--CSS GERAL-->
    <link href="./src/css/style.css" rel="stylesheet">
    <!--FAVICON-->
    <link rel="icon" href="./src/imagens/favicon-alternativa.png">
    <!--GOOGLE FONTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Marck+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
        rel="stylesheet">
    <!--AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <header>
        <!--LOGO-->
        <div id="containerLogo">
            <img src="./src/imagens/logo.png" alt="Logo Alternativa Autolocadora" class="logo">
        </div>
        <!--MENU DE NAVEGAÇÃO (LINKS)-->
        <i class="fa-solid fa-bars" id="botaoHamburguer"></i>
        <nav>

            <ul class="menuLinks">
                <li><a href="#">HOME</a></li>
                <li><a href="#reserva">RESERVA</a></li>
                <li><a href="#para-empresas">VANTAGENS PARA EMPRESAS</a></li>
                <li><a href="#requisitos-para-locacao">REQUISITOS PARA LOCAÇÃO</a></li>
                <li><a href="#promocoes">PROMOÇÕES</a></li>
                <li><a href="#localizacao">LOCALIZAÇÃO</a></li>
                <li><a href="#fale-conosco">FALE CONOSCO</a></li>
            </ul>

        </nav>
    </header>

    <main>

        <div class="container">
            <?php if (isset($_SESSION['mensagem'])): ?>
            <div class="alert alert-<?= $_SESSION['tipo_mensagem']; ?>">
                <?= $_SESSION['mensagem']; ?>
            </div>
            <?php
                unset($_SESSION['mensagem']);
                unset($_SESSION['tipo_mensagem']);
            endif; ?>
        </div>

        <section>
            <div>
                <!--CARROSEL TIPOS CARROS-->
                <section class="banner cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="1000"
                    data-cycle-prev="#prev" data-cycle-next="#next">

                    <img src="./src/imagens/compactos.png" alt="imagem compactos" class="banner">
                    <img src="./src/imagens/hatch.png" alt="imagem hatches" class="banner">
                    <img src="./src/imagens/sedanCompacto.png" alt="imagem sedans compactos" class="banner">
                    <img src="./src/imagens/suv.png" alt="imagem suv" class="banner">
                    <img src="./src/imagens/pickup.png" alt="imagem pick ups" class="banner">
                </section>
                <div class="controles">
                    <i class="fa-solid fa-circle-arrow-left" id="prev" title="Categoria anterior"></i>
                    <i class="fa-solid fa-circle-arrow-right" id="next" title="Próxima categoria"></i>
                </div>
            </div>
        </section>

        <section class="cointainerReserva">
            <h1 class="reserva">RESERVA</h1>
            <!--MENU DATA LOCACAO-->
            <form action="./src/php/process-reserva.php" method="post" class="formularioReserva">
                <div>
                    <select class="selecaoLocal" name="selecaoLocal">
                        <option>--Retire em--</option>
                        <option>No Aeroporto</option>
                        <option>Na Rodoviária</option>
                        <option>Na Alternativa Autolocadora</option>
                        <option>Na Minha Residência</option>
                        <option>Outros</option>
                    </select>
                    <select class="selecaoCarro" name="selecaoCarro">
                        <option>--Escolha o modelo--</option>
                        <option>Compactos</option>
                        <option>Hatch 1.0</option>
                        <option>Sedan</option>
                        <option>SUV</option>
                        <option>Pick up</option>
                    </select>
                </div>
                <label>CHECK-IN</label>
                <div>
                    <input type="date" class="dateTime" name="checkin_data" required>
                    <input type="time" class="dateTime" name="checkin_hora" required>
                </div>
                <label>CHECK-OUT</label>
                <div>
                    <input type="date" class="dateTime" name="checkout_data" required>
                    <input type="time" class="dateTime" name="checkout_hora" required>
                </div>

                <button type="submit" name="reservar">Reservar</button>
            </form>

        </section>

        <!--PARA EMPRESAS (VANTAGENS CARDS)-->
        <h1 id="para-empresas">VANTAGENS PARA EMPRESAS</h1>
        <section id="containerCardVantagens">
            
            <div class="cardVantagens">
                <i class="fa-solid fa-car-burst"></i>
                <h2>Assistência 24 horas</h2>
            </div>
            <div class="cardVantagens">
                <i class="fa-solid fa-money-bills"></i>
                <h2>Preços competitivos</h2>
            </div>
            <div class="cardVantagens">
                <i class="fa-solid fa-dollar-sign"></i>
                <h2>Faturamento direto <br>pela empresa</h2>
            </div>
            
            <div class="cardVantagens">
                <i class="fa-regular fa-calendar-days"></i>
                <h2>Prazos de <br>locação flexíveis</h2>
            </div>
            <div class="cardVantagens">
                <i class="fa-solid fa-car-on"></i>
                <h2>Renovação Periódica<br> de frota</h2>
            </div>
            <div class="cardVantagens">
                <i class="fa-regular fa-user"></i>
                <h2>Atendimento personalizado</h2>
                
            </div>
        </section>
        <h1 id="requisitos-para-locacao">REQUISITOS PARA LOCAÇÃO</h1>
        <section class="containerCardRequisitos">
            <div class="cardRequisitos">
                <div class="organizacaoCardRequisitos">
                    <i class="fa-solid fa-user-check" id="imagemCardRequisitos"></i>
                    <h3>Idade e tempo de carteira</h3>
                </div>
                <p id="texto" class="texto-escondido">O responsável pela locação deve ter 21 anos completos, ser
                    habilitado há pelo menos 2 anos, e portar CNH dentro da validade (se vencida, mesmo dentro dos 30
                    dias permitidos pelo DETRAN, não é aceita).
                    Em alguns casos, dependendo da locadora essa regra pode ser flexibilizada, mantenha contato com
                    nossa equipe.</p>

            </div>
            <div class="cardRequisitos">
                <div class="organizacaoCardRequisitos">
                    <i class="fa-regular fa-id-card" id="imagemCardRequisitos"></i>
                    <h3>Documentos<br> originais</h3>
                </div>
                <p id="texto" class="texto-escondido">É preciso apresentar CNH original, nela constam também CPF e RG,
                    ideal ter em mãos.Em alguns casos é solicitado apresentar comprovante de residência atualizado.</p>

            </div>
            <div class="cardRequisitos">
                <div class="organizacaoCardRequisitos">
                    <i class="fa-regular fa-credit-card" id="imagemCardRequisitos"></i>
                    <h3>Cartão de crédito</h3>
                </div>
                <p id="texto" class="texto-escondido">Portar cartão de crédito (físico, virtual não é aceito) em nome do
                    locatário, dentro da validade, com limite disponível para bloqueio da caução ou o valor total da
                    locação (nos casos em que ultrapassar o valor da caução). Esse procedimento é indispensável para a
                    retirada do veículo, não serão aceitas outras formas de garantia.
                    Algumas locadoras aceitam cartões emitidos por lojas ou financeiras, consulte exceções.</p>

            </div>
            <div class="cardRequisitos">
                <div class="organizacaoCardRequisitos">
                    <i class="fa-solid fa-circle-check" id="imagemCardRequisitos"></i>
                    <h3>CPF sem restrição</h3>
                </div>
                <p id="texto" class="texto-escondido">As empresas de locação consultam o CPF do locatário, e não liberam
                    o carro em caso de apontamentos. Isso também se aplica aos condutores adicionais.
                    Algumas locadoras, desde que todos os outros requisitos sejam respeitados, dependendo da restrição,
                    liberam a locação. Fale com nossa equipe e saiba quais.</p>

            </div>
            <div class="cardRequisitos">
                <div class="organizacaoCardRequisitos">
                    <i class="fa-solid fa-plane-arrival" id="imagemCardRequisitos"></i>
                    <h3>Clientes<br> Estrangeiros</h3>
                </div>
                <p id="texto" class="texto-escondido">Estrangeiros devem apresentar o passaporte e a carteira de
                    motorista do país de origem. É ideal que o motorista porte também a Permissão Internacional para
                    Dirigir (PID).</p>

            </div>
        </section>
        <!--PROMOÇÔES-->
        <section>
            <div>
                <h1 id="promocoes">PROMOÇÕES</h1>
                <div class="containerPromocoes">
                    <section class="bannerPromocoes cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="1000"
                        data-cycle-prev="#prevPromocoes" data-cycle-next="#nextPromocoes">

                        <img src="/src/imagens/10Off.png" alt="imagem 10%Off" class="bannerPromocoes">
                        <img src="/src/imagens/pacoteFds.png" alt="imagem Pacote final de semana"
                            class="bannerPromocoes">
                        <img src="/src/imagens/indicacao.png" alt="imagem Desconto Indicação" class="bannerPromocoes">
                        <img src="/src/imagens/cartaVerde.png" alt="imagem carta verde" class="bannerPromocoes">
                    </section>
                </div>
                <div class="controlesPromocoes">
                    <i class="fa-solid fa-circle-arrow-left" id="prevPromocoes" title="Promoção anterior"></i>
                    <i class="fa-solid fa-circle-arrow-right" id="nextPromocoes" title="Próxima promoção"></i>
                </div>

            </div>
        </section>
        <div>
            <!--LOCALIZAÇÃO-->
            <h1 id="localizacao">LOCALIZAÇÃO</h1>
            <div id="containerLocalizacao">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.9878161916317!2d-51.17003992512873!3d-30.008506229609598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519776fbe97593f%3A0x1af65845dc42b5ff!2sR.%20Apar%C3%ADcio%20Mariense%2C%20211%20-%20Passo%20d&#39;Areia%2C%20Porto%20Alegre%20-%20RS%2C%2091030-370!5e0!3m2!1spt-BR!2sbr!4v1713312952161!5m2!1spt-BR!2sbr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div>
            <h1 id="fale-conosco">FALE CONOSCO</h1>
            <!--FALE CONOSCO (FORMULARIO)-->
            <div>
                <form action="./src/php/process-fale-conosco.php" method="post" id="formularioFaleConosco">
                    <input type="email" name="email" size="40" placeholder="Digite seu e-mail" required>
                    <input type="tel" name="telefone" size="25" placeholder="Digite seu telefone" required>
                    <textarea cols="25" rows="10" placeholder="Digite aqui sua mensagem" name="mensagem"
                        required></textarea>
                    <button type="submit" name="enviar">Enviar</button>
                </form>
            </div>
        </div>
    </main>

    <footer>

        <div class="containerImagensFooter">
            <img src="/src/imagens/abla.png" alt="imagem Associação" class="imagemFooter">
            <img src="/src/imagens/sindloc.png" alt="imagem Sindicato" class="imagemFooter">
            <img src="/src/imagens/bandeirasCartoes.png" alt="cartões aceitos" class="imagemFooter">
            <div class="divRedesSociais">
                <a href="https://wa.me/555195182231" target="_blank">

                    <i class="fa-brands fa-whatsapp" id="redesSociais" title="WhatsApp"></i>
                </a>
                <a href="https://www.instagram.com/alternativaautolocadora" target="_blank">
                    <i class="fa-brands fa-instagram" id="redesSociais" title="Instagram"></i>
            </div>
            </a>
        </div>

        <p class="copyright">Desenvolvido por Glauber Martini. Todos os direitos reservados</p>
        <a href="#"><i class="fa-solid fa-circle-arrow-up" id="voltar-topo" title="Voltar ao topo"></i></a>

    </footer>
    <script src="./src/js/jquery-3.7.1.js"></script>
    <script src="./src/js/scrolltop.js"></script>
    <script src="./src/js/jquery.cycle2.min.js"></script>
    <script src="./src/js/jquery.cycle2.carousel.min.js"></script>
    <script src="./src/js/toggleText.js"> </script>
    <script>
        $("#voltar-topo").click(function () {
            $("html, body").animate({ scrollTop: "0px" }, 800);
        });
    </script>

    <script>
        $("#botaoHamburguer").click(function () {
            $("nav").toggle(800)
        });

    </script>
    <script>
        $(window).resize(function () {
            if ($(window).width() > 750); {
                $("nav").show();
            }
        })
    </script>

</body>

</html>