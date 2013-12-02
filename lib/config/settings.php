<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
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
        'description' => 'Вы можете отключить вывод в стандартном месте. Используйте хелпер вывода {shopSnowmanPlugin::display()} что бы вставить код плагина в любое место темы оформления',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',
        )
    ),
    'first_visit' => array(
        'title' => 'Показывать только при первом визите на сайт',
        'description' => '',
        'value' => '0',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Нет',
            '1' => 'Да',
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
    'position' => array(
        'title' => 'Положение',
        'description' => '',
        'value' => 'fixed',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'absolute' => 'absolute',
            'fixed' => 'fixed',
        )
    ),
    'enabled_text' => array(
        'title' => 'Выводить текст поздравления',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Нет',
            '1' => 'Да',
        )
    ),
    'text' => array(
        'title' => 'Текст(HTML)',
        'description' => 'Тег &lt;br&gt; устанавливает перевод строки в том месте, где этот тег находится.<br>'
        . 'Тег &lt;b&gt; устанавливает жирное начертание шрифта. Синтаксис &lt;b&gt;Текст&lt;/b&gt;<br>'
        . 'http://htmlbook.ru/html/ - Справочник по HTML',
        'value' => '<span style="color:red;"><b>Поздравляем Вас с Новым 2014 годом!</b><br/><br/> При покупке до 30.12.2013 скидки 10%</span>',
        'control_type' => waHtmlControl::TEXTAREA,
    ),
    'width' => array(
        'title' => 'Ширина',
        'description' => 'Ширина блока в пикселях',
        'value' => '200',
        'control_type' => waHtmlControl::INPUT,
    ),
    'text_align' => array(
        'title' => 'Выравнивание текста',
        'description' => '',
        'value' => 'center',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'center' => 'По центру',
            'justify' => 'По ширине',
            'left' => 'По левому краю',
            'right' => 'По правому краю',
        )
    ),
    'font_size' => array(
        'title' => 'Размер текста',
        'description' => 'Размер текста в пикселях',
        'value' => '16',
        'control_type' => waHtmlControl::INPUT,
    ),
    'background_color' => array(
        'title' => 'Цвет фона',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/, none - прозрачный фон',
        'value' => '#FFFFFF',
        'control_type' => waHtmlControl::INPUT,
    ),
    'opacity' => array(
        'title' => 'Прозрачность',
        'description' => '1 - непрозрачный, 0 - полностью прозрачный',
        'value' => '0.8',
        'control_type' => waHtmlControl::INPUT,
    ),
    'padding' => array(
        'title' => 'Оступы',
        'description' => 'Отступы от текста по бокам в пикселях',
        'value' => '10',
        'control_type' => waHtmlControl::INPUT,
    ),
    'border_radius' => array(
        'title' => 'Радиус закругления углов',
        'description' => '0 - без закругления',
        'value' => '10',
        'control_type' => waHtmlControl::INPUT,
    ),
    'border_width' => array(
        'title' => 'Толщина бордюра',
        'description' => 'значение в пикселях',
        'value' => '2',
        'control_type' => waHtmlControl::INPUT,
    ),
    'border_color' => array(
        'title' => 'Цвет бордюра',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/, none - прозрачный фон',
        'value' => '#FF0000',
        'control_type' => waHtmlControl::INPUT,
    ),
    'enabled_close' => array(
        'title' => 'Выводить кнопку "Закрыть"',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Нет',
            '1' => 'Да',
        )
    ),
    'close_text' => array(
        'title' => 'Текст кнопки "Закрыть"',
        'description' => '',
        'value' => 'Закрыть',
        'control_type' => waHtmlControl::INPUT,
    ),
);
