<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Check PHP</title>
</head>
<body>
  <h1>Test PHP scripts</h1>
  <p>Сьогодні: <?= date('d.m.Y', time()); ?></p>
  
  <h2>Виведення значень від 0 до 10 у циклі</h2>
  <ul>
    <?php for($i = 1; $i < 10; $i++): ?>
      <li>елемент №<?= $i; ?></li>
    <?php endfor; ?>
  </ul>
  
  <?php if(empty($_GET['flag'])): ?>
    <h2><?php hello(); ?></h2>
  <?php else: ?>
    <h2><?php hello(true); ?></h2>
  <?php endif; ?>
  
</body>
</html>

<?php
  function hello ($query=false) {
    if($query) {
      echo "Hello " . $_GET['name'];
    } else {
      echo "Hello World";    
    }
  }
?>