<body>
	<nav class="top-bar expanded" data-topbar role="navigation">
		<ul class="title-area large-3 medium-4 columns">
			<li class="name">
				<h1><a href=""><?= $this->fetch('title') ?></a></h1>
			</li>
		</ul>
		<div class="top-bar-section">
			<ul class="right">
				<li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentação</a></li>
				<li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>

				<?php
				/*if ($this->request->session()->read('Auth.User.id')) { 
					<li>
						<a>  echo $this->request->session()->read('Auth.User.username'); 
						</a>
					</li>
					*/
					?>
				</ul>
			</div>
			<div class="top-bar-section">
				<ul class="right">

					<!-- fazer if de entrar ou logout  -->
					<li><?= $this->Html->link(__('Sair'), ['action' => '../users/logout']) ?></li>
					<li><?= $this->Html->link(__('Entrar'), ['action' => '../users/login']) ?></li>

				</ul>
			</div>
		</nav>
		<?= $this->Flash->render() ?>
		<div class="container clearfix">
			<?= $this->fetch('content') ?>
		</div>
		<footer> 
		</footer>
	</body>