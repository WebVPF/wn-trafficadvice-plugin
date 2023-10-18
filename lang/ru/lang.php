<?php

return [
    'plugin' => [
        'name' => 'TrafficAdvice',
        'description' => 'Плагин для управления объёмом трафика предварительной загрузки. Генерирует JSON-ответ по адресу: /.well-known/traffic-advice',
    ],
    'settings' => [
        'menu_desc' => 'Управление объёмом трафика предварительной загрузки.',
        'title_label' => 'Настройка Traffic Advice',
        'title_comment' => 'страница с адресом /.well-known/traffic-advice',
        'is_activated_label' => 'Активно',
        'is_activated_comment' => 'Если выключено, вместо <code style="color:#cf0070">fraction</code> будет указано <code style="color:#cf0070">disallow</code> со значением <code style="color:#cf0070">true</code>',
        'fraction_label' => 'Значение fraction',
        'fraction_comment' => 'Значение может быть десятичным числом от 0 до 1 включительно.',
    ],
    // 'permissions' => [
    //     'some_permission' => 'Some permission',
    // ],
];
