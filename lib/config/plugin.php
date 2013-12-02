<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Снеговик',
    'description' => 'Анимированный снеговик на вашем сайте',
    'vendor' => '985310',
    'version' => '1.0.0',
    'img' => 'img/snowman.png',
    'frontend' => true,
    'handlers' => array(
        'frontend_head' => 'frontendHead',
    ),
);
//EOF
