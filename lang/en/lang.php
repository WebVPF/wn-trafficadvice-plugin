<?php

return [
    'plugin' => [
        'name' => 'TrafficAdvice',
        'description' => 'Plugin for managing the amount of preload traffic. Generates a JSON response to: /.well-known/traffic-advice',
    ],
    'settings' => [
        'menu_desc' => 'Manage the volume of preload traffic.',
        'title_label' => 'Settings TrafficAdvice',
        'title_comment' => 'page with address /.well-known/traffic-advice',
        'is_activated_label' => 'Active',
        'is_activated_comment' => 'If disabled, <code style="color:#cf0070">fraction</code> will be replaced with <code style="color:#cf0070">disallow</code> with the value <code style="color:#cf0070">true</code>',
        'fraction_label' => 'Meaning for fraction',
        'fraction_comment' => 'The value can be a decimal number from 0 to 1 inclusive.',
    ],
];
