<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$cakeDescription = 'CakePHP: the rapid development PHP framework'; ?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?= $cakeDescription ?>:
		<?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>

	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

	<?= $this->Html->css('milligram.min.css') ?>
	<?= $this->Html->css('cake.css') ?>
	<?= $this->Html->css('home.css') ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>

	<style type="text/css">
		.EntrarDiv {
			display: inline-block;
			border-radius: 1.1rem;
			background: white;
			position: relative;
			left: 50%;
			width: 140px;
			text-align: center;
		}
		.EntrarDiv:hover{
			position: relative;
			color: black;
			left: 50%; 
			text-align: center;
			cursor: pointer;
		}
		a {
			color: black;
			font-size: 50px;
			text-decoration: none;
		}
		body {
			padding: 60px 0;
			background: orange;
		}
		h1{
			color: black;
		}
	</style>
</head>
<body>
	<header>
		<div class="container text-center">
			<img alt="CakePHP" src="https://cakephp.org/v2/img/logos/CakePHP_Logo.svg" width="350"/>
			<h1>
				Trabalho Avaliação PSI módulo 13
			</h1>
		</div>
	</header>

	<div>
		<div class="EntrarDiv"><a href="Receitas"><?=__('Entrar')?></a></div>
	</div>

</body>
</html>