<?php require('partials/head.php'); ?>

<h1>My Tasks</h1>

<ul>
  <?php foreach ($tasks as $task) : ?>
    <li>
      <?php if ($task->completed) : ?>
        <strike>
      <?php endif; ?>
        <?= $task->description; ?>
      <?php if ($task->completed) : ?>
        </strike>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>

<h2>Submit you Name</h2>

<form method="POST" action="/name">
    <input name="name" type="text">
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
