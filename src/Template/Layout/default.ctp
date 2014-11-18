<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $title_header = (!empty($title)) ? $title.' | ' : ''; echo $title_header;?>CakePHP Brasil</title>
	<?php echo $this->Html->meta('icon');?>
  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <?php echo $this->Html->css('style');?>
    <?php $this->fetch('meta'); 

        echo $this->Html->css(array(
            'font-awesome.css',
            'fontello-custom.css',
            'style.css',
        ));

    $this->fetch('css'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class='section-index ltr'>
<div id="wrap" class="header-type-1">
  <?php echo $this->Element('header') ?>
  <!-- MODAL LOGIN END -->

  <a style="display:none;" id="start_here"></a>

  <div id="page-body">
  
    <?php echo $this->Element('breadcrumbs') ?>

    <div class="page-body-inner container">     

      <!-- 
      ###############################################################
       Sidebar inclusion starts below (see overall_footer.html also )
      ###############################################################-->  

      
                
      
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content');?>

       <?php 
         if ($this->Markdown->checkRoute('Blogs#index')) {
             echo $this->Element('sidebar');    
         }
        ?>
        

      <!-- 
      ###############################################################
       Sidebar inclusion END
      ###############################################################-->  

      </div><!-- page-body-inner end -->
    </div><!-- #page-body end-->
  <?php echo $this->Element('footer') ?>
  </div>

    <?php echo $this->Html->scriptBlock('base_url = "'.$this->Url->build('/', true).'"');

     echo $this->Html->script(array(
            '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
            'jquery.tweetscroll.js',
            'jquery.colorbox-min.js',
            'jflickrfeed.min.js',
            'bootstrap.min.js',
            'bootstrap-hover-dropdown.js',
            'custom.js',
        ));
        echo $this->fetch('script'); ?>
  </body>
</html>
