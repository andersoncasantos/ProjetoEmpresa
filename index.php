<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/styles.css">
    <title>Infserver - Soluções em Tecnologia</title>
    <link rel="icon" href="img/favicon.png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
    </a>
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#inicio" class="nav__logo">
                <img src="img/logo-red.svg" width="220">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#inicio" class="nav__link active-link">Início</a></li>
                    <li class="nav__item"><a href="#nos" class="nav__link">Quem somos</a></li>
                    <li class="nav__item"><a href="#automacao" class="nav__link">Software e Automação</a></li>
                    <li class="nav__item"><a href="#servicos" class="nav__link">Serviços</a></li>
                    <li class="nav__item"><a href="#contato" class="nav__link">Contato</a></li>

                    <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--========== INÍCIO ==========-->
        <section class="inicio" id="inicio">
            <div class="inicio__container bd-container bd-grid">
                <div class="inicio__img">
                    <img src="img/home.svg" alt="Jovem com notebook">
                </div>

                <div class="nos__data">
                    <h1 class="inicio__title">Soluções em suprir sua necessidade</h1>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20solicitar%20um%20or%C3%A7amento." target="_blank" class="button">Solicitar Orçamento <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
        </section>

        <!--========== QUEM SOMOS ==========-->
        <section class="nos section bd-container" id="nos">
            <div class="nos__container bd-grid">
                <div class="nos__data">
                    <h2 class="section-title-center">Sobre nós</h2>
                    <p class="nos__description">Buscamos amplo conhecimento para suprir as necessidades do cliente, com uma equipe de profissionais competentes. Visando estratégia e comprometimento em todo processo, da implantação ao suporte técnico.</p>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20a%20empresa..." target="_blank" class="button">Conheça melhor</a>
                </div>

                <div class="nos__img">
                    <img src="img/sobre.svg" alt="Jovem com lupa, especificando quem somos">
                </div>
            </div>
        </section>

        <!--========== SOFTWARES ==========-->
        <section class="decoration section bd-container" id="automacao">
            <h2 class="section-title">Softwares para sua empresa <br> e negócio</h2>
            <div class="decoration__container bd-grid">
                <div class="decoration__data">
                    <img src="img/automacao.png" alt="Sistemas para comércios" class="decoration__img">
                    <h3 class="decoration__title">Automação Comercial</h3>
                    <p>Sistemas específicos para seu ambiente e comércio</p><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20Softwares%20para%20Automa%C3%A7%C3%A3o%20Comercial." target="_blank" class="button button-link">Saiba Mais</a>
                </div>

                <div class="decoration__data">
                    <img src="img/nf.png" alt="Emissão de nota fiscal eletrônica" class="decoration__img">
                    <h3 class="decoration__title">NFC-e NF-e</h3>
                    <p>Precisando emitir documentos fiscais? Temos a solução</p><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20Softwares%20para%20emiss%C3%A3o%20fiscal%20NF-e%20e%20NFC-e." target="_blank" class="button button-link">Saiba Mais</a>
                </div>

                <div class="decoration__data">
                    <img src="img/code.png" alt="Desenvolvimento de sites e lojas virtuais " class="decoration__img">
                    <h3 class="decoration__title">Sites e Lojas Virtuais</h3>
                    <p>Desenvolvemos o que você procura e sonha ter</p><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20Sites%20e%20Lojas%20Virtuais." target="_blank" class="button button-link">Saiba Mais</a>
                </div>
            </div>
        </section>

        <!--========== SERVIÇOS ==========-->
        <section class="accessory section bd-container" id="servicos">
            <h2 class="section-title">Serviços quem solucionam <br> seu dia dia</h2>
            <div class="accessory__container bd-grid">
                <div class="accessory__content">
                    <img src="img/laptop.png" alt="Produtos para informática" class="accessory__img">
                    <h3 class="accessory__title">Acessórios e Equipamentos de Informática</h3><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20Acess%C3%B3rios%20e%20Equipamentos%20de%20Inform%C3%A1tica." target="_blank" class="button button-link">Solicitar este serviço</a>
                </div>

                <div class="accessory__content">
                    <img src="img/impressora.png" alt="Suprimentos e manutenções em impressoras" class="accessory__img">
                    <h3 class="accessory__title">Manutenções e Suprimentos para Impressoras</h3><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20Manuten%C3%A7%C3%B5es%20e%20Suprimentos%20para%20Impressoras." target="_blank" class="button button-link">Solicitar este serviço</a>
                </div>

                <div class="accessory__content">
                    <img src="img/server.png" alt="Manutenção e implantação em servidores" class="accessory__img">
                    <h3 class="accessory__title">Implantação de Servidores Comerciais</h3><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20Implanta%C3%A7%C3%A3o%20de%20Servidores%20Comerciais." target="_blank" class="button button-link">Solicitar este serviço</a>
                </div>

                <div class="accessory__content">
                    <img src="img/rede.png" alt="Manutenções de rede e configuração" class="accessory__img">
                    <h3 class="accessory__title">Configurações de Rede</h3><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20solicitar%20uma%20Configura%C3%A7%C3%A3o%20de%20Rede." target="_blank" class="button button-link">Solicitar este serviço</a>
                </div>

                <div class="accessory__content">
                    <img src="img/conexao.png" alt="Montagem de servidores Firewall e Proxy" class="accessory__img">
                    <h3 class="accessory__title">Montagem de Rede Firewall e Proxy</h3><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20Montagem%20de%20Rede%20Firewall%20e%20Proxy." target="_blank" class="button button-link">Solicitar este serviço</a>
                </div>

                <div class="accessory__content">
                    <img src="img/chamada.png" alt="Ligue pra gente, temos uma equipe especializada" class="accessory__img">
                    <h3 class="accessory__title">Suporte Técnico Presencial e Remoto</h3><br>
                    <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20solicitar%20um%20Suporte%20T%C3%A9cnico." target="_blank" class="button button-link">Solicitar este serviço</a>
                </div>
            </div>
        </section>

        <!--========== SEND GIFT ==========-->
        <section class="send section" id="contato">
            <div class="send__container bd-container bd-grid">
                <div class="send__content">
                    <h2 class="section-title-center send__title">Deixe um contato que retornaremos para você</h2>
                    <form method="POST" action="./email.php">
                        <div class="send__direction">
                            <input name="email" type="text" placeholder="Seu contato" class="send__input">
                            <button class="button" type="submit" value="Enviar">
                                Enviar
                            </button>
                        </div>

                        <? if (isset($_GET['login']) && $_GET['login'] == 'enviado') { ?>
                            <div class="text-danger">
                                E-mail enviado com sucesso!
                            </div>
                        <? } ?>

                    </form>
                </div>

                <div class="send__img">
                    <img src="img/contato.svg">
                </div>
            </div>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section">
        <div class="footer__container bd-container bd-grid">
            <div class="footer__content">
                <h3 class="footer__title">Nossos Horários</h3>
                <ul>
                    <li><a class="footer__link">Segunda a Sexta: 08:00 às 18:00</a></li>
                    <li><a class="footer__link">Sábado 08:00 às 12:00</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Endereço</h3>
                <ul>
                    <li><a class="footer__link">Av. Santayana, 112 A </a></li>
                    <li><a class="footer__link">Montalvânia - MG</a></li>
                    <li><a class="footer__link">CEP: 39495-000</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Suporte Técnico</h3>
                <ul>
                    <li><a class="footer__link">(38) 99890-8043</a></li>
                    <li><a class="footer__link">contato@infserver.com.br</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Social</h3>
                <a href="https://www.facebook.com/infserver/" target="_blank" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                <a href="https://api.whatsapp.com/send?phone=5538998908043&text=Oi!!!" target="_blank" class="footer__social"><i class='bx bxl-whatsapp-square'></i></a>
                <a href="https://www.instagram.com/infserver/" target="_blank" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; Copyright 2022 - Infserver Soluções em Tecnologia - Todos os direitos reservados</p>
    </footer>

    <!--========== MAIN JS ==========-->
    <script src="js/main.js"></script>

</body>

</html>