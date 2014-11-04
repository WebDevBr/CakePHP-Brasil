<div class="row">
	<div class="col-md-12">
		<p>O CakePHP Brasil foi construido para ajudar a divulgar o CakePHP assim como ajudar iniciantes e profissionais experientes a explorar o melhor do Framework, minha esperança é que a comunidade participe ativamente publicando artigos, ajudando a corrigir o código, sugerindo novos módulos ou desenvolvendo eles e até mesmo com os custos financeiros do projeto através de doações ou anunciando no portal.</p>
		<p>Você ainda pode inserir um banner do CakePHP Brasil no seu site e mostrar que você está ajudando. O resultado disso vai voltar pra você em forma de reconhecimento para o seu trabalho.</p>
		<p>Agradeço muito a todos que estão e que vão participar e até mesmo você que vem aqui só pra ler nosso material, ninguém vai postar nada se não tiver você pra ler.</p>
		<p>Obrigado a todos por participarem.</p>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<h3>Doação</h3>
		<p>Para doar qualquer valor ao CakePHP Brasil, basta clicar em um dos links abaixo, você será redirecionado para o PagSeguro ou para uma página do WebDevBr com os dados das minhas contas.</p>
		<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
		<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post" target="_blank">
		<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
		<input type="hidden" name="currency" value="BRL" />
		<input type="hidden" name="receiverEmail" value="erik.figueiredo@gmail.com" />
		<input type="submit" name="submit" value="PagSeguro" class="btn btn-success"/>
		<a href="http://www.webdevbr.com.br/financeiro/deposito" class="btn btn-default" target="_blank">Depósito em conta</a>
		</form>
		<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
		</p>
	</div>
	<div class="col-md-3">
		<h3>Anuncie aqui</h3>
		<p>Para anunciar aqui entre em contato comigo, meu email é falecom@erikfigueiredo.com.br, você pode clicar no link a baixo para enviar um email</p>
		<p><a href="mailto:falecom@erikfigueiredo.com.br" class="btn btn-default">falecom@erikfigueiredo.com.br</a></p>
	</div>
	<div class="col-md-3">
		<h3>Codifique</h3>
		<p>Você ainda pode ajudar a corrigir ou desenvolver recursos para o CakePHP Brasil, acesse o repositório no GitHub.</p>
		<p><a href="https://github.com/erikfig/CakePHP-Brasil" class="btn btn-primary" target="_blank">GitHub</a></p>
	</div>
	<div class="col-md-3">
		<h3>Publique conteúdo</h3>
		<p>Você ainda pode enviar seu artigo aqui, nós usamos o padrão Markdown para publicar, então é super simples e você pega o jeito rapidinho.</p>
		<p><a href="<?php echo $this->Url->build('/devs/cadastro');?>" class="btn btn-success" target="_blank">Cadastre-se</a></p>

	</div>
	<div class="row">
		<div class="col-md-12">
			<hr>
			<p>Agradeço sua participação, qualquer que seja ela, até mesmo seu acesso.</p>
			<p>Att. Erik Figueiredo</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr>
			<?php echo $this->element('disqus');?>
		</div>
	</div>
</div>