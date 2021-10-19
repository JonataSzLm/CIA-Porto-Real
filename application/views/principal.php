<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!--Metadados:-->
	<title>CIA Porto Real</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Jonatas Lima">
  <meta name="description" content="Rodeio profissional, com serviços de qualidade, especializados e estrutura completa. Clique e confira nosso trabalho."><!--Adicionar descrição!!!!-->
  <meta name="keywords" content="rodeio, rodeio de cavalo, rodeio de boi, rodeio de carneiro, Iguatama, São Francisco, serviço especializado, peão de rodeio, eventos, companhia de rodeios, CIA de rodeios" />

  <!--Icone do site-->
  <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>icone/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>icone/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>icone/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>icone/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>icone/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>icone/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>icone/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>icone/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>icone/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url() ?>icone/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>icone/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>icone/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>icone/favicon-16x16.png">
  <link rel="manifest" href="<?= base_url() ?>icone/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#417C38">

  <!--Arquivos CSS externos:-->
  <link href="<?= base_url() ?>assets/css/bootstrap-reboot.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/estilo.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/footer-with-logo.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/lightbox.css" rel="stylesheet" />
  <script type="text/javascript">
    var mensagem = '<?php echo $mensagem; ?>';
    var base_url = '<?php echo base_url();?>';
  </script>
</head>
<body>
  <!--Menu (algumas classes estão editadas no arquivo bootstrap.css):-->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white nav-shadow">
      <img src="<?= base_url() ?>assets/src/images/logo.svg" width="30" height="30">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse justify-content-md-end collapse show" id="navbarsExample08" style="">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link scroll" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#servicos">SERVIÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#sobre">SOBRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#galeria">GALERIA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#contato">CONTATO</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--Imagem do Home:-->
    <section id="home">
      <div class="hero-image">
        <div class="hero-text">
          <h1 class="display-3">CIA. PORTO REAL</h1>
          <p class="lead">Rodeio Profissional</p>
          <a href="#sobre" class="btn btn-outline-light scroll">QUEM SOMOS</a>
        </div>
      </div>
    </section>
    <!--Sessão de servicos:-->
    <section id="servicos">
      <div class="container-fluid">
        <div class="row d-flex">
          <div class="col-sm-12 text-center col-services">
            <h1 class="text-space">Serviços Prestados</h1>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-sm-3 col-services">
            <div class="card text-center border-0">
              <img class="card-img-top" src="<?= base_url() ?>assets/src/images/microphone.svg" width="100" height="100">
              <div class="card-body">
                <h5 class="card-title">Equipe</h5>
                <p class="card-text">Locutor de arena, locução comercial, comentarista de rodeio e animador de plateia.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-services">
            <div class="card text-center border-0">
              <img class="card-img-top" src="<?= base_url() ?>assets/src/images/seringa.svg" width="100" height="100">
              <div class="card-body">
                <h5 class="card-title">Veterinário</h5>
                <p class="card-text">Serviço veterinário especializado para eventos.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-services">
            <div class="card text-center border-0">
              <img class="card-img-top" src="<?= base_url() ?>assets/src/images/lampada.svg" width="100" height="100">
              <div class="card-body">
                <h5 class="card-title">Estruturas</h5>
                <p class="card-text">Arquibancadas, camarote, palco, iluminação, arena, bretes, palco, telões e banheiros químicos.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-services">
            <div class="card text-center border-0">
              <img class="card-img-top" src="<?= base_url() ?>assets/src/images/cavalo.svg" width="110" height="110">
              <div class="card-body">
                <h5 class="card-title">Companhias de rodeio</h5>
                <p class="card-text">CIA de rodeio em cavalos, CIA de rodeio em touros e CIA de rodeio em carneiros.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--informaçõs da empresa, dono, etc:-->
    <section id="sobre" class="dark-row text-white">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" id="empresa">
             <div class="container">
            <div class="row d-flex">
              <div class="col-sm-12 text-center">
                <h1 class="text-space">Sobre a empresa</h1>
              </div>
            </div>
              <div class="row no-gutters d-flex">
                <div class="col-sm-4 offset mt-4">
                  <img src="<?= base_url() ?>assets/src/images/portoreal.jpg" class="img-fluid" alt="Imagem responsiva">
                </div>
                <div class="col-sm-8">
                  <div class="text-carousel ml-3">
                    <p class="mt-2">A CIA Porto Real apareceu nos eventos e na mídia em agosto de 2017, como convidados de um rodeio, para participar com a tropa na festa do cavalo de Lagoa da Prata - MG.</p> 
                    <p>No ano de 2018 foram iniciadas as apresentações da CIA Porto Real, um início muito prazeroso, onde conhecemos Zé Ricardo Mazeto, tropeiro experiente de SP, que nos cedeu alguns animais, Cubanita, Queima de Arquivo, Douradinha, Dopamina, Bugrinha entre outros, que na ocasião já vieram prenhes do Malagão, garanhão da tropa Jr.</p>
                    <p>Na primeira oportunidade de conversar com o tropeiro de Aparecida do Taboado - MS, compramos um cavalo preto chamado Noturno, da tropa Tito Cardoso, em seguida vieram Garimpo, Pirata e Malandro. Depois vieram mais alguns como Moleque de Rua, Primeira Dama, Ciclone, Leite Azedo e Tanque de Guerra.</p>
                    <p>A CIA Porto Real nasceu com alguns objetivos, primeiro resgatar a cultura de nossa cidade, segundo apresentar animais de rodeio com qualidade. Hoje com nome de Iguatama, onde houve na década de 40 os primeiros rodeios de cavalos do Brasil, nas margens do Rio São Francisco, em que os fazendeiros juntamente com a população de Porto Real, (o antigo nome da cidade) tiveram o prazer de assistir e participar das festividades da época.</p>

                  </div>
                </div>
              </div>
            </div>   
          </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row d-flex text-center mb-4">
              <div class="col-sm-12 text-center">
                <h1 class="text-space">Sobre o proprietário</h1>
              </div>
            </div>
              <div class="row no-gutters d-flex">
                <div class="col-sm-4 offset">
                  <img src="<?= base_url() ?>assets/src/images/proprietario.jpg" class="img-fluid" alt="Imagem responsiva">
                </div>
                <div class="col-sm-8">
                  <div class="text-carousel ml-3">
                    <p class="mt-2">Jader Protasio Costa, nascido no município de Iguatama-MG, as margens do Rio São Francisco, filho de Joaquim Protasio da Costa e Terezinha Rodrigues Protasio, Formado no curso Técnico Agrícola com habilitação em agropecuária em Bambuí-MG, no período de 1998 a 2000. No período de 2006 a 2010, formou-se em Medicina Veterinária pela UNIFOR-MG.</p>
                    <p class="mb-1"><em>"Desde os dois anos de idade comecei na fazenda andar na égua Sulica, castanha, mansa, sofrida, depois vieram outros demais. Sou criador de cavalos e praticante dos esportes equestres a um bom tempo, já participei de várias competições com cavalos. Por um bom período tive oportunidade de conviver e ajudar o amigo da cia PR3 Paulo Augusto, onde participamos de diversos rodeios, como madrinheiro e outros apoios, na época nas cidades vizinhas, sempre fui entusiasta com o meio rural e com a criação dos equinos, e como toda criança nasce e vive com sonhos, objetivos e metas, na minha vida não é diferente."</em>
                    <footer class="blockquote-footer">Jader Protasio</footer></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
      </div>
    </section>
    <!--Galeria (Adicionar PHP)-->
    <?php
      $galeria = '<section id="galeria">
      <div class="container-fluid">
        <div class="row d-flex no-gutters">
          <div class="col-sm-12 text-center col-services">
            <h1 class="text-space">Galeria</h1>
          </div>
        </div>
        <div class="row no-gutters">';
      if ($dados == false) {
        $galeria = $galeria . '<div class="col-sm-12"><p class="lead">Não há imagens salvas!!</p></div>';
        $galeria = $galeria . '</div><div class="collapse" id="collapseExample"><div class="row no-gutters">';
        $galeria = $galeria . '</div>
          <div class="row d-flex no-gutters">
            <div class="col-sm-12 text-center col-services">
              <h1 class="text-space">Videos</h1>
            </div>
          </div>
          <div class="row no-gutters">';
        if ($links == false) {
          $galeria = $galeria . '<div class="col-sm-12"><p class="lead">Não há videos salvos!!</p></div>';
        } else {
          $cont3 = 1;
          foreach($links as $video) {
            $galeria = $galeria . '<div class="col-sm-4">
                  <iframe width="100%" height="200px" src="https://www.youtube.com/embed/' . $video->video_link . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 0"></iframe>
                </div>';
            if ($cont3%3 == 0) {
              $galeria = $galeria . '<div class="w-100"></div>';
            }
            $cont3++;
          }
        }
      } else {
        $cont =  1;
        foreach ($dados as $imagem) {
          if ($cont <= 6) {
            $galeria = $galeria . '<div class="col-4">
                  <a href=' . '"' . base_url() . 'uploads/' . $imagem->imagem_anexo . '"' . 'data-lightbox="img">
                    <div class="galery-img" style="background-image: url('. "'" . base_url() . 'uploads/' . $imagem->imagem_anexo . "'" . ');"></div>
                  </a>
                </div>';
            if ($cont%3 == 0) {
              $galeria = $galeria . '<div class="w-100"></div>';
            }
          }
          $cont++;
        }
        $galeria = $galeria . '</div><div class="collapse" id="collapseExample"><div class="row no-gutters">';
        $cont2 = 1;
        foreach ($dados as $imagem) {
          if ($cont2 > 6) {
            $galeria = $galeria . '<div class="col-4">
                  <a href=' . '"' . base_url() . 'uploads/' . $imagem->imagem_anexo . '"' . 'data-lightbox="img">
                    <div class="galery-img" style="background-image: url('. "'" . base_url() . 'uploads/' . $imagem->imagem_anexo . "'" . ');"></div>
                  </a>
                </div>';
            if ($cont2%3 == 0) {
              $galeria = $galeria . '<div class="w-100"></div>';
            }
          }
          $cont2++;
        }
        $galeria = $galeria . '</div>
          <div class="row d-flex no-gutters">
            <div class="col-sm-12 text-center col-services">
              <h1 class="text-space">Videos</h1>
            </div>
          </div>
          <div class="row no-gutters">';
        if ($links == false) {
          $galeria = $galeria . '<div class="col-sm-12"><p class="lead">Não há videos salvos!!</p></div>';
        } else {
          $cont3 = 1;
          foreach($links as $video) {
            $galeria = $galeria . '<div class="col-sm-4">
                  <iframe width="100%" height="200px" src="https://www.youtube.com/embed/' . $video->video_link . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 0"></iframe>
                </div>';
            if ($cont3%3 == 0) {
              $galeria = $galeria . '<div class="w-100"></div>';
            }
            $cont3++;
          }
        }
      }
        $galeria = $galeria . '</div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <center>
              <a href="#galeria">
                <input class="btn btn-dark m-5" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="btn-exp" onclick="alteraTexto();" value="Mostrar mais">
              </a>
            </center>
          </div>
        </div>
      </div>
    </section>';

    echo $galeria;

    ?>
          

    <!--Contato (usar PHP):-->
    <section id="contato" class="bg-light">
      <div class="container-fluid">
        <div class="row d-flex no-gutters">
          <div class="col-sm-12 text-center col-services">
            <h1 class="text-space">Contato</h1>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-sm-6">
            <form method="POST" id="frmEmail" name="frmImagem" enctype="multipart/form-data" action="<?php echo base_url(); ?>Principal/email">
              <div class="form-group">
                <label for="txtNome">Nome:</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Insira seu nome" required="">
              </div>
              <div class="form-group">
                <label for="txtAssunto">Assunto:</label>
                <input type="text" class="form-control" id="txtAssunto" name="txtAssunto" placeholder="Insira o assunto" required="">
              </div>
              <div class="form-group">
                <label for="txtEmail">Endereço de email:</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail" aria-describedby="emailHelp" placeholder="Seu email" required="">
              </div>
              <div class="form-group">
                <label for="txtMensagem">Mensagem:</label>
                <textarea class="form-control" id="txtMensagem" name="txtMensagem" rows="4" placeholder="Digite aqui sua mensagem" required=""></textarea>
              </div>
              <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
          </div>
          <div class="col-sm-6">
            <h4>Outras formas de contato:</h4>
            <p class="lead">Contate-nos e garanta seu evento.</p>
            <div class="text-info">
              <p><object data="<?= base_url() ?>assets/src/images/phone.svg" type="" class="svg"></object> (37) 9 9966-5460</p>
              <p><object data="<?= base_url() ?>assets/src/images/envelope.svg" type="" class="svg"></object> jaderprt@yahoo.com.br</p>
              <p><object data="<?= base_url() ?>assets/src/images/map.svg" type="" class="svg"></object> Rua 05, Nº 457, Centro, Iguatama-MG</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Rodapé-->
    <section>
      <footer class="container-fluid bg-dark text-white rodape">
        <div class="row">
          <div class="col-sm-12 link-rodape">
            <a href="#home" class="scroll">Home</a>
            <a href="#sobre" class="scroll">Informações da empresa</a>
            <a href="#contato" class="scroll">Contato</a>
            <p>Copyright © – 2019 CIA Porto Real - Jonatas Lima</p>
          </div>
        </div>
      </footer>
      <div class="container-fluid rodape bg-black">
        <div class="row no-gutters">
          <div class="col-sm-4 mx-auto">
            <div class="social-icons">
              <a href="https://www.youtube.com/channel/UC6yY-PsbeRz89FO5vmoNKTQ/featured?view_as=subscriber" class="youtube" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
              </a>
              <a href="https://www.facebook.com/326409557943527/photos/326410737943409/" class="facebook" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
              </a>
              <a href="https://instagram.com/jaderprotasio?igshid=qcvtff52yli1" class="instagram" target="_blank">
                <svg aria-hidden="true" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Links de arquivos js externos-->
    <script src="<?= base_url() ?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?= base_url() ?>assets/js/lightbox.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>
</body>
</html>