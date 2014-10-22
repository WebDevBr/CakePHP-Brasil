<?php $authUser = (isset($authUser)) ? $authUser : false;?>
<?php if ($authUser):?>
	<li>
      <?php
        echo $this->Html->link(
          'meu perfil',
          '/devs/perfil',
          ['class'=>'btn btn-dark']
        );
      ?>
    </li>
    <li>
      <?php
        echo $this->Html->link(
          'meus artigos',
          '/meus-artigos',
          ['class'=>'btn btn-dark']
        );
      ?>
    </li>
    <li>
      <?php
        echo $this->Html->link(
          'sair',
          '/devs/logout',
          ['class'=>'btn btn-dark']
        );
      ?>
    </li>
<?php else: ?>
	<li>
      <?php
        echo $this->Html->link(
          'cadastre-se',
          '/devs/cadastro',
          ['class'=>'btn btn-dark']
        );
      ?>
    </li>
    <li>
      <?php
        echo $this->Html->link(
          'acesse',
          '/devs/acesso',
          ['class'=>'btn btn-dark']
        );
      ?>
    </li>
<?php endif;?>