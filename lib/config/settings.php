<?php

return array(
    'status' => array(
        'title' => 'Статус плагина',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',
        )
    ),
    'default_output' => array(
        'title' => 'Вывод в стандартном месте',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',
        )
    ),
    'left' => array(
        'title' => 'Отступ слева',
        'description' => 'значение в пикселях',
        'value' => '0',
        'control_type' => waHtmlControl::INPUT,
    ),
    'top' => array(
        'title' => 'Отступ сверху',
        'description' => 'значение в пикселях',
        'value' => '0',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'text' => array(
        'title' => 'Текст(HTML)',
        'description' => '',
        'value' => 'Текст поздравления',
        'control_type' => waHtmlControl::TEXTAREA,
    ),
);