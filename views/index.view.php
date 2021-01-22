<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    header {
      background-color: grey;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>
<body>
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
</body>
</html>
