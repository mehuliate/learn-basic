<?php require 'partials/head.php'; ?>
<ul>
<?php foreach ($users as $user): ?>
	<li><?= $user->name; ?></li>
<?php endforeach; ?>
</ul>
	<h1>Submit a names</h1>
	<form method="POST" action="/names">
		<input type="text" name="name">
		<button type="submit">Submit</button>
	</form>
<?php require 'partials/footer.php'; ?>
