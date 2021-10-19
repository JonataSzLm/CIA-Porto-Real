<!DOCTYPE html>
<html lang="pt-br">
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <title>Admin</title>

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
    
    <link href="<?= base_url() ?>assets/css/estilo.css" rel="stylesheet">
	  <link href="<?= base_url() ?>assets/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/footer-with-logo.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/lightbox.css" rel="stylesheet" />
</head>
<body id="topo">
  <!--Modal para adicionar imagem-->
  <div class="modal fade" id="ModalAddImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Imagem</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" id="frmImagem" name="frmImagem" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/salvar">
            <input type="file" name="txtImagemAnexo" id="txtImagemAnexo" class="form-control-file form-control-lg" required><br>
            <p class="lead">Adicione aqui uma imagem de seus arquivos.</p>
            <input type="hidden" name="idImagem" id="idImagem" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <input type="submit" name="btnImagem" id="btnImagem" class="btn btn-success">
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--Modal para adicionar video-->
  <div class="modal fade" id="ModalAddVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Video</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" id="frmImagem" name="frmImagem" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/salvarVideo">
            <input type="text" name="txtVideo" id="txtVideo" class="form-control form-control-lg" placeholder="Insira aqui o link do video" required><br>
            <p class="lead">Insira aqui o final do link do video do you tube.</p>
            <input type="hidden" name="idVideo" id="idVideo" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <input type="submit" name="btnVideo" id="btnVideo" class="btn btn-success">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div>
  <a href="<?php echo base_url()?>Admin/logout" class="btn btn-danger m-2 font-weight-bold">Sair <img src="<?= base_url()?>assets/src/images/sair.svg" width="23px"></a>
  <a href="#ajuda" class="btn btn-info m-2 font-weight-bold scroll" style="float: right;"><img src="<?= base_url()?>assets/src/images/help.svg" width="23px"> Ajuda</a>
  </div>
  <section id="galeria">
      <div class="container-fluid">
        <div class="row d-flex no-gutters">
          <div class="col-sm-12 text-center col-services">
            <h1 class="text-space">Galeria</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="rounded img-add">
              <a href="#ModalAddImage" data-toggle="modal" id="plus-imagem">
                <img src="<?php echo base_url(); ?>assets/src/images/plus.svg" class="img-fluid">
              </a>
            </div>
          </div>
		      <?php $cont = 2;
          foreach($dados as $imagem) { ?>
            <div class="col-4">
              <form method="POST" name="<?php echo $imagem->id ?>" id="<?php echo $imagem->id ?>" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/excluir/<?php echo $imagem->id ?>/<?php echo $imagem->imagem_anexo ?>">
                <a href="<?php echo base_url(); ?>uploads/<?php echo $imagem->imagem_anexo ?>" data-lightbox="img">
       	          <div class="galery-img rounded-top" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $imagem->imagem_anexo ?>');"></div>
                </a>
                <input type="submit" name="" class="btn btn-outline-danger btn-lg btn-block btn-lixo border-top-0" value="Apagar"><br>
              </form>
            </div>
            <?php 
            if ($cont%3 == 0) { ?>
              <div class="w-100"></div>           
            <?php } 
            $cont++;
          }?>
      </div>
      
      <div class="row d-flex no-gutters">
          <div class="col-sm-12 text-center col-services">
            <h1 class="text-space">Videos</h1>
          </div>
      </div>
        <div class="row">
          <div class="col-sm-4 mb-2">
            <div class="rounded img-add">
              <a href="#ModalAddVideo" data-toggle="modal" id="plus-video">
                <img src="<?php echo base_url(); ?>assets/src/images/plus.svg" class="img-fluid">
              </a>
            </div>
          </div>
          <?php $cont = 2;
          foreach($links as $video) { ?>
            <div class="col-sm-4">
              <form method="POST" name="<?php echo $video->id ?>" id="<?php echo $video->id ?>" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/excluirVideo/<?php echo $video->id ?>">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/<?php echo $video->video_link ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="rounded-top"></iframe>
                <input type="submit" name="" class="btn btn-outline-danger btn-lg btn-block btn-lixo border-top-0" value="Apagar"><br>
              </form>
            </div>
            <?php if ($cont%3 == 0) { ?>
              <div class="w-100"></div>           
            <?php } 
            $cont++;
          }?>    
        </div>
    </div>
  </section>
  <section id="ajuda">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-center col-services">
          <h1 class="text-space">Ajuda</h1>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <h4>Para adicionar imagens:</h4><br>
          <li>Primeiro <a href="#plus-imagem">click no +</a> que aparecerá a frente de todas imagens;</li>
          <li>Click em escolher imagem;</li>
          <li>Selecione a imagem desejada e click em abrir;</li>
          <li>Por ultimo click em enviar.</li>
          <br><br>
          <h4>Para adicionar videos:</h4><br>
          <li>Primeiro <a href="https://www.comersite.com.br/como-colocar-video-no-youtube/" target="_blank">suba o video para o YouTube</a> em sua conta (a privacidade pode ser publico, ou não listado);</li>
          <li>logo após isso copie o link do video;</li>
          <li><a href="#plus-video">click no +</a> do campo do video;</li>
          <li>cole o link no campo de texto que irá aparacer, <b>Lembre-se de retirar o que está atrás da ultima / (barra) do link</b>, <u>ver imagens ao fim desse tutotial</u>;</li>
          <li>click em enviar.</li><br>
          <img src="<?= base_url()?>assets/src/images/passo1.png" class="img-fluid"><br><br>
          <img src="<?= base_url()?>assets/src/images/passo2.png" class="img-fluid"><br><br>
          <img src="<?= base_url()?>assets/src/images/passo3.png" class="img-fluid"><br>
          <br>
          <h4>Para apagar uma imagem ou video:</h4><br>
          <li>Click no botão vermelho debaixo do item desejado.</li>
          <br><br>
          <h4>Para desfazer o login:</h4><br>
          <li>Click no botão vermelho no canto superior esquerdo.</li>
          <br><br>
          <p><b>Para mais informações entre em conato com o desenvolvedor:</b> Jonatas Lima, e-mail: jonataslima5@outlook.com.</p>
          <br><br><br>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </section>

  <section>
      <footer class="container-fluid bg-dark text-white rodape">
        <div class="row">
          <div class="col-sm-12 link-rodape">
            <a href="#topo" class="scroll">Voltar ao topo</a>
            <a href="<?php echo base_url()?>Principal"  target="_blank">Ir para pagina principal</a>
            <p>Copyright © – 2019 CIA Porto Real - Jonatas Lima</p>
          </div>
        </div>
      </footer>
      <div class="container-fluid rodape bg-black">
        <div class="row no-gutters">
          <div class="col-sm-4 mx-auto">
            <br><br>
          </div>
        </div>
      </div>

    <script src="<?= base_url() ?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?= base_url() ?>assets/js/lightbox.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>

</body>
</html>