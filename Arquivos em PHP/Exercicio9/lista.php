<?php
include 'usuarios.php';
?>
<ul>
<?php foreach ($usuarios as $usuario): ?>
  <li><?php echo $usuario; ?></li>
<?php endforeach; ?>
</ul>
<link rel="stylesheet" href="style.css">
