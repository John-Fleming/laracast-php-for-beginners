<?php require('partials/head.php'); ?>

<h1>All Users</h1>

<?php foreach ($users as $user) : ?>
  <li><?= $user->name ?></li>
  <?php endforeach; ?>

<h2>Submit you Name</h2>

<form method="POST" action="/users">
    <input name="name" type="text">
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
