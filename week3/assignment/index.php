<?php

$a = rand(1, 9);
$b = rand(1, 9);
$answer = $a + $b;
$question = "What is $a + $b?";

$options = [];
while (count($options) < 3) {
    $option = rand(2, 18);
    if ($option !== $answer) {
        $options[] = $option;
    }
}
$options[] = $answer;
shuffle($options);

?>
<h4><?= $question ?></h4>
<ol>
  <?php foreach ($options as $option) : ?>
    <li>
        <a href="result.php?a=<?= $a ?>&b=<?= $b ?>&answer=<?= $option ?>">
          <?= $option ?>
        </a>
    </li>
  <?php endforeach; ?>
</ol>