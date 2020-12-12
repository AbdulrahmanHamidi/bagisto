<?php
return [
    [
        'key' => 'themex',
        'name' => 'ThemeX',
        'sort' => 1
    ],
    [
        'key' => 'themex.settings',
        'name' => 'Custom Settings',
        'sort' => 1,
    ],
    [
        'key' => 'themex.settings.settings',
        'name' => 'Custom Groupings',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'status',
                'title' => 'Status',
                'type' => 'boolean',
                'channel_based' => true,
                'locale_based' => false
            ]
        ]
    ]
];