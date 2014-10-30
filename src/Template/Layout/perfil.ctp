<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?> - CakePHP Brasil</title>
	<?php echo $this->Html->meta('icon');?>
    <!-- Bootstrap -->
    <?php echo $this->Html->css('style');?>
    <?php $this->fetch('meta'); ?>
    <?php $this->fetch('css'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header id="header" class="perfil">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php

             $img_url = (empty($user->photo))? 'default.jpg' : 'perfil/'.$user->photo;
             $img = $this->Html->image(
                'perfil/'.$img_url,
                ['alt'=>'Logo CakePHP Brasil', 'class'=>'logo img-rounded']
             );
              echo $this->Html->link(
                $img,
                '/'.$user->slug,
                ['escape'=>false]
              );
            ?>
          </div>
          <div class="col-md-4">
            <p class="text-right">
            <?php
              echo $this->Html->link(
                '<strong>ajude manter este projeto online!</strong>',
                '/pages/apoio',
                ['escape'=>false, 'class'=>'text-shadow']
              );
            ?>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <nav class="horizontal text-right">
              <ul>
              <?php echo $this->element('menu');?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1><?php $title = (!empty($title)) ? $title : 'CakePHP - O Framework PHP de Desenvolvimento rápido!'; echo $title;?></h1>
          </div>
        </div>
      </section>
      <section class="container">
        <?php $this->Flash->render(); ?>
        <?php echo $this->fetch('content');?>
      </section>
      <div class="container">
        <?php echo $this->element('disqus');?>
      </div>
    </main>

    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center"><small>copyright CakePHP Brasil</small></p>
          </div>
        </div>
      </div>
    </footer>
    <?php echo $this->Html->scriptBlock('base_url = "'.$this->Url->build('/', true).'"');?>
    <?php echo $this->Html->script('script');?>
    <?php echo $this->fetch('script'); ?>
  </body>
</html>