<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$output = [];
$result =0;
exec("python3 calculate.py $a $b $c", $output, $result);

if($result !== 0) {
  echo "<h1 style='color: red'>$output[0]</h1>";
  echo "<a href='/form.php'>Back to form</a>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment4 Process | IST105</title>
  </head>
  <body>
    <?php foreach($output as $key=>$value): ?>
      <p><?= str_contains($value, "Result") ? "<b>$value</b>" : $value ?></p>
    <?php endforeach ?>
    <a href='/form.php'>Back to form</a>
  </body>
</html>
