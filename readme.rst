Exemplo de uso do Template Blade no CodeIgniter
===============================================

A Blade template engine é uma ferramenta muito útil na construção de aplicações web usando MVC, pois permite que as views fiquem bem legíveis e com bem pouco ou quase nenhum código PHP explícito no meio do HTML.

[Documentação do Blade](https://laravel.com/docs/5.3/blade)


Exemplos
--------
Tradicionalmente para imprimir ou exibir o valor de uma variável *PHP*, usamos: 
::
	<h1><?php echo $titulo ?> </h1>

	<ul>

	<?php foreach($clientes as $c): ?>

	<li><?= $c->nome ?></li>

	<?php endforeach; ?>

	</ul>


Com o Template Blade, usamos:
::
	<h1>{{ $titulo }}</h1>

	<ul>

	@foreach ($clientes as $c)

	<li>{{ $c->nome }}</li>

	@ endforeach

	</ul>


Como demonstrado, o código HTML não fica carregado com códigos PHP.


Instalação
----------

Vamos utilizar nesse exemplo o Composer para fazer a instalação dos componentes e do próprio CodeIgniter:
::
	composer create-project bcit-ci/codeigniter codeigniter_template_blade --prefer-dist

Após concluir a criação do projeto, acesse o diretório do projeto:
::		
	cd codeigniter_template_blade

No diretório do projeto do projeto execute o comando para adicionar o pacote Blade Template Engine: 
::		
	composer require xiaoler/blade

Pronto, projeto criado e o pacote do Blade adicionado


Configuração
------------

Com a utilização do Composer, acesse o diretório **application/config/** e edite o arquivo **config.php**, para que os pacotes sejam carregados corretamente.  Altere o seguinte código: 
::

	$config['composer_autoload'] = FALSE;

Para:

::
	$config['composer_autoload'] = './vendor/autoload.php';


Adicione a librarie Blade.php no **diretório application/librares/** 

**Obs.:** Não esqueça de criar a pasta **views** em **application/cache/***.
