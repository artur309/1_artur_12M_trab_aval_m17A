<?php $articles = json_decode($this->requestAction('receitas/lastPosts/4'));?>

<h2>Ultimos Posts</h2>
<table>
	<tr>
		<th>ID</th><th>Titulo</th><th>Criado</th>
	</tr>
	<?php foreach($articles as $article): ?>
		<tr>
			<td><?= $article->id?></td><td><?= $article->title?></td><td><?= $article->created?></td>
		</tr>
	<?php endforeach ?>
</table>