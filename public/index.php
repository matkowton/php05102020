<?php

$menu = [
  'Главная',
  'Корзина',
  'Доставка'
];
?>

<ul>
    <?php foreach ($menu as $item) : ?>
        <li><a href="#"><?=$item?></a></li>
    <? endforeach;?>
</ul>

