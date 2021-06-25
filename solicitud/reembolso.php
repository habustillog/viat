<?php if (!empty($_FILES["arch"])): ?>
  <?php echo $_FILES["arch"]['tmp_name']; ?>
  <?php else: ?>
    <?php echo "no esta" ?>
<?php endif; ?>

<form class="" method="post">
  <input type="file" name="arch" value="">
  <button type="submit" name="button">alg</button>
</form>
